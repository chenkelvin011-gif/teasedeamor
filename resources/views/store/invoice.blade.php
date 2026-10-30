@extends('layouts.app')

@section('title', 'Invoice Pesanan ' . $order->order_number . ' — TEASE DE AMOR')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    
    <!-- Printable Invoice Card -->
    <div id="printableInvoice" class="bg-zinc-950 border border-white/15 rounded-2xl p-6 sm:p-10 space-y-8 shadow-2xl relative">
        
        <!-- Header Receipt -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-white/10 pb-6">
            <div>
                <span class="text-[10px] font-mono tracking-widest text-brand-accent uppercase font-bold">✦ OFFICIAL INVOICE & RECEIPT</span>
                <h1 class="font-syne text-2xl sm:text-3xl font-extrabold uppercase text-white mt-0.5">TEASE DE AMOR</h1>
                <p class="text-xs font-mono text-zinc-400">Brand Apparel & Fashion • Medan, Sumatera Utara</p>
            </div>
            <div class="text-left sm:text-right font-mono">
                <span class="inline-block px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 text-xs font-bold uppercase mb-1">
                    ✓ {{ $order->payment_status === 'PAID' ? 'LUNAS / TERVERIFIKASI' : 'PENDING PAYMENT' }}
                </span>
                <div class="text-xs text-zinc-400">No. Order: <strong class="text-white">{{ $order->order_number }}</strong></div>
                <div class="text-[11px] text-zinc-500">{{ $order->created_at->format('d M Y, H:i') }} WIB</div>
            </div>
        </div>

        <!-- Customer & Shipping Info -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs font-mono bg-zinc-900/60 p-5 rounded-xl border border-white/10">
            <div class="space-y-1">
                <span class="text-zinc-500 uppercase block">Ditujukan Kepada:</span>
                <div class="text-sm font-space font-bold text-white">{{ $order->customer_name }}</div>
                <div class="text-zinc-300">WhatsApp: {{ $order->customer_phone }}</div>
                @if($order->customer_email)
                <div class="text-zinc-400">{{ $order->customer_email }}</div>
                @endif
            </div>
            <div class="space-y-1">
                <span class="text-zinc-500 uppercase block">Alamat Pengiriman & Kurir:</span>
                <div class="text-zinc-200">{{ $order->shipping_address }}</div>
                <div class="text-zinc-300">{{ $order->city }}, {{ $order->province }} ({{ $order->postal_code }})</div>
                <div class="text-brand-cream font-bold mt-1">Kurir: {{ $order->courier }}</div>
                @if($order->tracking_number)
                <div class="text-[11px] text-green-400">No. Resi: {{ $order->tracking_number }}</div>
                @endif
            </div>
        </div>

        <!-- Itemized Order Table -->
        <div class="space-y-3">
            <h3 class="font-space font-bold text-xs uppercase tracking-wider text-zinc-300">Daftar Produk Yang Dipesan:</h3>
            <div class="border border-white/10 rounded-xl overflow-hidden">
                <table class="w-full text-left text-xs font-mono">
                    <thead class="bg-zinc-900 text-zinc-400 uppercase text-[10px] border-b border-white/10">
                        <tr>
                            <th class="p-3">Item / Produk</th>
                            <th class="p-3 text-center">Ukuran</th>
                            <th class="p-3 text-center">Qty</th>
                            <th class="p-3 text-right">Harga</th>
                            <th class="p-3 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10 text-zinc-300">
                        @foreach($order->items as $item)
                        <tr>
                            <td class="p-3.5 font-bold text-white">
                                {{ $item->product_name }}
                                <span class="block text-[10px] text-zinc-400 font-normal">{{ $item->color_name }}</span>
                            </td>
                            <td class="p-3.5 text-center">
                                <span class="px-2.5 py-0.5 rounded bg-brand-maroon/50 text-white font-bold border border-brand-accent/30">Size {{ $item->size }}</span>
                            </td>
                            <td class="p-3.5 text-center">{{ $item->quantity }}</td>
                            <td class="p-3.5 text-right font-mono">Rp {{ number_format($item->unit_price, 0, ',', '.') }}</td>
                            <td class="p-3.5 text-right font-mono font-bold text-white">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Calculation Summary -->
        <div class="border-t border-white/10 pt-4 space-y-2 text-xs font-mono max-w-xs ml-auto">
            <div class="flex justify-between text-zinc-400">
                <span>Subtotal Kaos:</span>
                <span class="text-white">{{ $order->formatted_subtotal }}</span>
            </div>
            <div class="flex justify-between text-zinc-400">
                <span>Ongkir ({{ $order->courier }}):</span>
                <span class="text-white">{{ $order->formatted_shipping_cost }}</span>
            </div>
            @if($order->discount > 0)
            <div class="flex justify-between text-brand-accent">
                <span>Potongan Voucher ({{ $order->voucher_code }}):</span>
                <span>- Rp {{ number_format($order->discount, 0, ',', '.') }}</span>
            </div>
            @endif
            <div class="flex justify-between text-sm font-bold text-white border-t border-white/10 pt-2 font-space">
                <span>TOTAL AKHIR:</span>
                <span class="font-mono text-brand-cream text-base">{{ $order->formatted_total }}</span>
            </div>
            <div class="text-[10px] text-zinc-500 text-right">Metode: {{ $order->payment_method }}</div>
        </div>

        <!-- Action Buttons -->
        <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row gap-3 justify-between items-center print:hidden">
            <div class="flex gap-2 w-full sm:w-auto">
                <button onclick="window.print()" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-white font-space text-xs font-bold uppercase border border-white/15 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                    <span>Cetak Invoice</span>
                </button>
                <a href="{{ route('store.tracking', ['order_number' => $order->order_number]) }}" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-white font-space text-xs font-bold uppercase border border-white/15 transition-colors flex items-center justify-center gap-2">
                    <span>Lacak Pengiriman</span>
                </a>
            </div>

            <a href="https://api.whatsapp.com/send?phone=6281265439810&text={{ urlencode('Halo Admin TEASE DE AMOR, pesanan saya ' . $order->order_number . ' total ' . $order->formatted_total . ' sudah saya selesaikan di website. Mohon segera diproses.') }}" target="_blank" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-space text-xs font-bold uppercase flex items-center justify-center gap-2 shadow-lg transition-colors">
                <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>Konfirmasi ke Admin WA</span>
            </a>
        </div>

    </div>

</div>
@endsection
