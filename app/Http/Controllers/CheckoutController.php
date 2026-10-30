<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    /**
     * Courier shipping costs
     */
    protected $couriers = [
        'J&T Express' => 15000,
        'SiCepat BEST' => 18000,
        'JNE Reguler' => 16000,
        'Instant / Sameday' => 25000,
    ];

    /**
     * Vouchers
     */
    protected $vouchers = [
        'GENZLOVE' => ['type' => 'fixed', 'amount' => 20000, 'label' => 'Potongan Mahasiswa Gen Z Rp 20.000'],
        'FREESHIP' => ['type' => 'free_shipping', 'amount' => 15000, 'label' => 'Gratis Ongkir Rp 15.000'],
        'VOLUMEDROP' => ['type' => 'percent', 'amount' => 0.10, 'label' => 'Diskon 10% Spesial Volume Drop'],
    ];

    /**
     * Checkout Page
     */
    public function index(Request $request)
    {
        $products = Product::where('is_featured', true)->get();
        $couriers = $this->couriers;
        return view('store.checkout', compact('products', 'couriers'));
    }

    /**
     * Validate Voucher API
     */
    public function checkVoucher(Request $request)
    {
        $code = strtoupper(trim($request->input('code')));
        if (isset($this->vouchers[$code])) {
            return response()->json([
                'success' => true,
                'code' => $code,
                'voucher' => $this->vouchers[$code],
                'message' => 'Voucher berhasil diterapkan: ' . $this->vouchers[$code]['label']
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Kode voucher tidak valid atau sudah kedaluwarsa.'
        ], 422);
    }

    /**
     * Process Direct Checkout
     */
    public function processOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:100',
            'customer_phone' => 'required|string|max:20',
            'shipping_address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'courier' => 'required|string',
            'payment_method' => 'required|string',
            'items' => 'required',
        ]);

        $rawItems = $request->input('items');
        $items = is_string($rawItems) ? json_decode($rawItems, true) : $rawItems;

        if (empty($items) || !is_array($items)) {
            if ($request->wantsJson()) {
                return response()->json(['success' => false, 'message' => 'Keranjang belanja kosong.'], 422);
            }
            return back()->with('error', 'Keranjang belanja kosong.');
        }

        $courierName = $request->input('courier', 'J&T Express');
        $shippingCost = $this->couriers[$courierName] ?? 15000;

        $subtotal = 0;
        $orderItemsData = [];

        foreach ($items as $item) {
            $product = isset($item['product_id']) ? Product::find($item['product_id']) : null;
            $unitPrice = $product ? $product->price : 200000;
            $qty = max(1, intval($item['quantity'] ?? 1));
            $itemSubtotal = $unitPrice * $qty;
            $subtotal += $itemSubtotal;

            $orderItemsData[] = [
                'product_id' => $product ? $product->id : null,
                'product_name' => $item['product_name'] ?? ($product ? $product->name : 'TEASE DE AMOR OVERSIZED TEE'),
                'color_name' => $item['color_name'] ?? ($product ? $product->color_name : 'Noir'),
                'size' => $item['size'] ?? 'L',
                'quantity' => $qty,
                'unit_price' => $unitPrice,
                'subtotal' => $itemSubtotal,
            ];
        }

        // Voucher Calculation
        $voucherCode = strtoupper(trim($request->input('voucher_code', '')));
        $discount = 0;
        if (!empty($voucherCode) && isset($this->vouchers[$voucherCode])) {
            $voucher = $this->vouchers[$voucherCode];
            if ($voucher['type'] === 'fixed') {
                $discount = min($voucher['amount'], $subtotal);
            } elseif ($voucher['type'] === 'free_shipping') {
                $discount = $shippingCost;
            } elseif ($voucher['type'] === 'percent') {
                $discount = intval($subtotal * $voucher['amount']);
            }
        }

        $totalAmount = max(0, ($subtotal + $shippingCost) - $discount);
        $orderNumber = 'TDA-' . date('Ymd') . '-' . strtoupper(Str::random(4));
        $trackingNumber = 'JNT' . rand(100000000, 999999999);

        $order = Order::create([
            'order_number' => $orderNumber,
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_email' => $request->input('customer_email'),
            'shipping_address' => $request->input('shipping_address'),
            'city' => $request->input('city'),
            'province' => $request->input('province'),
            'postal_code' => $request->input('postal_code', '20153'),
            'courier' => $courierName,
            'shipping_cost' => $shippingCost,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'voucher_code' => $voucherCode ?: null,
            'total_amount' => $totalAmount,
            'payment_method' => $request->input('payment_method'),
            'payment_status' => 'PAID', // Direct checkout simulator sets status to PAID upon confirmation
            'order_status' => 'PROCESSING',
            'tracking_number' => $trackingNumber,
            'notes' => $request->input('notes'),
        ]);

        foreach ($orderItemsData as $orderItem) {
            $orderItem['order_id'] = $order->id;
            OrderItem::create($orderItem);
        }

        // Generate WhatsApp message formatted string
        $waMessage = "Halo Admin TEASE DE AMOR! Saya mau konfirmasi pesanan dari website:\n\n"
            . "• No Pesanan: " . $order->order_number . "\n"
            . "• Nama: " . $order->customer_name . "\n"
            . "• No HP/WA: " . $order->customer_phone . "\n"
            . "• Alamat: " . $order->shipping_address . ", " . $order->city . ", " . $order->province . "\n"
            . "• Kurir: " . $order->courier . " (Rp " . number_format($order->shipping_cost, 0, ',', '.') . ")\n"
            . "• Pembayaran: " . $order->payment_method . "\n"
            . "• Total Bayar: Rp " . number_format($order->total_amount, 0, ',', '.') . "\n\n"
            . "Daftar Item:\n";

        foreach ($orderItemsData as $idx => $itm) {
            $waMessage .= ($idx + 1) . ". " . $itm['product_name'] . " [Size " . $itm['size'] . "] x" . $itm['quantity'] . " = Rp " . number_format($itm['subtotal'], 0, ',', '.') . "\n";
        }
        $waMessage .= "\nMohon segera diproses ya! Terima kasih.";
        $waLink = "https://api.whatsapp.com/send?phone=6281265439810&text=" . rawurlencode($waMessage);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'order' => $order->load('items'),
                'order_number' => $order->order_number,
                'total_formatted' => $order->formatted_total,
                'whatsapp_url' => $waLink,
                'redirect_url' => route('checkout.confirmation', $order->order_number),
                'message' => 'Pesanan berhasil dibuat & checkout selesai!'
            ]);
        }

        return redirect()->route('checkout.confirmation', $order->order_number);
    }

    /**
     * Order Confirmation & Invoice Receipt
     */
    public function orderConfirmation($orderNumber)
    {
        $order = Order::with('items')->where('order_number', $orderNumber)->firstOrFail();
        return view('store.invoice', compact('order'));
    }

    /**
     * Live Tracking Page
     */
    public function tracking(Request $request)
    {
        $orderNumber = $request->input('order_number');
        $order = null;

        if ($orderNumber) {
            $order = Order::with('items')
                ->where('order_number', trim($orderNumber))
                ->orWhere('customer_phone', trim($orderNumber))
                ->first();
        }

        return view('store.tracking', compact('order', 'orderNumber'));
    }
}
