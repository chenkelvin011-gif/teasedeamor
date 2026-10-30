<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\DropVote;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with TEASE DE AMOR Volume 1 & Volume 2.
     */
    public function run(): void
    {
        // Clear existing data (FK checks off so MySQL allows truncating parent tables)
        Schema::disableForeignKeyConstraints();
        OrderItem::truncate();
        Order::truncate();
        Product::truncate();
        DropVote::truncate();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        // 0. Admin / demo user (password: password)
        User::factory()->create([
            'name' => 'Admin TEASE DE AMOR',
            'email' => 'admin@teasedeamor.test',
        ]);

        // 1. Only 2 Products: Volume 1 (White) and Volume 2 (Black) - All Rp 200.000 with Model Photos
        $products = [
            [
                'name' => 'TEASE DE AMOR — OVERSIZED TEE VOLUME 1',
                'slug' => 'tease-de-amor-oversized-tee-volume-1',
                'collection' => 'Volume 1',
                'tagline' => 'Broken White • Fluffy Maroon "LOVE AMOR LOVE"',
                'description' => 'Rilisan resmi TEASE DE AMOR Volume 1 dengan warna broken white vintage. Menampilkan tipografi fluffy maroon bertekstur puff timbul "LOVE AMOR LOVE", detail leher rib tebal, dan woven label eksklusif di bagian hem. Siluet boxy oversized yang jatuh sempurna.',
                'price' => 200000,
                'original_price' => 249000,
                'badge' => 'VOLUME 1 (WHITE)',
                'color_name' => 'Broken White',
                'color_code' => '#F4EFE6',
                'sizes' => ['1', '2'],
                'stock' => 50,
                'image_url' => '/assets/model-vol1-box-back.jpg',
                'gallery_urls' => [
                    '/assets/model-vol1-box-back.jpg',
                    '/assets/model-vol1-outdoor.jpg',
                    '/assets/vol1-white.jpg',
                    '/assets/vol2-sizechart.jpg',
                ],
                'fabric_details' => '100% Heavyweight Cotton 24s/16s (235 GSM), Fluffy Maroon Velvet/Puff Screenprint, Boxy Drop-Shoulder, Double Needle Stitch.',
                'is_featured' => true,
            ],
            [
                'name' => 'TEASE DE AMOR — OVERSIZED TEE VOLUME 2',
                'slug' => 'tease-de-amor-oversized-tee-volume-2',
                'collection' => 'Volume 2',
                'tagline' => 'Pitch Black • "TEASE ME FIRST OR I\'LL TEASE U BETTER"',
                'description' => 'Rilisan resmi TEASE DE AMOR Volume 2 dengan warna hitam pekat. Bagian depan menampilkan logo minimalis dada "TDA TEASE DE AMOR", dan bagian belakang menampilkan statement graffiti khas anak muda "TEASE ME FIRST OR I\'LL TEASE U BETTER." dengan ilustrasi heart smiley maroon.',
                'price' => 200000,
                'original_price' => 249000,
                'badge' => 'VOLUME 2 (BLACK)',
                'color_name' => 'Pitch Black',
                'color_code' => '#141416',
                'sizes' => ['1', '2'],
                'stock' => 50,
                'image_url' => '/assets/model-vol2-cafe-back.jpg',
                'gallery_urls' => [
                    '/assets/model-vol2-cafe-back.jpg',
                    '/assets/model-vol2-chair-front.jpg',
                    '/assets/vol2-back.jpg',
                    '/assets/vol2-front.jpg',
                    '/assets/vol2-sizechart.jpg',
                ],
                'fabric_details' => '100% Heavyweight Cotton 16s (235 GSM), Plastisol Screenprint Depan & Belakang, Distressed Red Graphic, Drop Shoulder Boxy Cut.',
                'is_featured' => true,
            ],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }

        // 2. Voting for next volume (Relationship marketing)
        $votingOptions = [
            [
                'option_key' => 'vol3_burgundy',
                'title' => 'Volume 3: Full Deep Burgundy & Fluffy Heart',
                'description' => 'Warna dasar merah marun anggur pekat khas identitas TEASE DE AMOR.',
                'votes_count' => 182,
            ],
            [
                'option_key' => 'vol3_mineral_wash',
                'title' => 'Volume 3: Vintage Mineral Washed Charcoal',
                'description' => 'Efek cucian abu-abu arang distressed vintage dengan grafis graffiti baru.',
                'votes_count' => 245,
            ],
        ];

        foreach ($votingOptions as $v) {
            DropVote::create($v);
        }

        // 3. Demo Sample Order (Gisel - Persona UTS)
        $sampleOrder = Order::create([
            'order_number' => 'TDA-2026-8941',
            'customer_name' => 'Gisel (Mahasiswa UPH Medan)',
            'customer_phone' => '081265439810',
            'customer_email' => 'gisel.student@gmail.com',
            'shipping_address' => 'Jl. Dr. Mansyur No. 42B, Medan Selayang',
            'city' => 'Kota Medan',
            'province' => 'Sumatera Utara',
            'postal_code' => '20153',
            'courier' => 'J&T Express',
            'shipping_cost' => 15000,
            'subtotal' => 200000,
            'discount' => 0,
            'voucher_code' => null,
            'total_amount' => 215000,
            'payment_method' => 'QRIS',
            'payment_status' => 'PAID',
            'order_status' => 'PROCESSING',
            'tracking_number' => 'JNT8829104192',
            'notes' => 'Sertakan box kemasan TEASE DE AMOR dan sticker pack.',
        ]);

        OrderItem::create([
            'order_id' => $sampleOrder->id,
            'product_id' => 2,
            'product_name' => 'TEASE DE AMOR — OVERSIZED TEE VOLUME 2',
            'color_name' => 'Pitch Black',
            'size' => '1',
            'quantity' => 1,
            'unit_price' => 200000,
            'subtotal' => 200000,
        ]);

        // 4. Dummy orders for demo (riwayat pesanan, tracking, dsb.)
        $this->seedDummyOrders(30);
    }

    /**
     * Generate random but realistic orders based on the checkout rules
     * (couriers, vouchers, payment methods) in CheckoutController.
     */
    private function seedDummyOrders(int $count): void
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(2026);

        $products = Product::all();
        $couriers = [
            'J&T Express' => ['cost' => 15000, 'prefix' => 'JNT'],
            'SiCepat BEST' => ['cost' => 18000, 'prefix' => 'SCP'],
            'JNE Reguler' => ['cost' => 16000, 'prefix' => 'JNE'],
            'Instant / Sameday' => ['cost' => 25000, 'prefix' => 'GSD'],
        ];
        $paymentMethods = ['QRIS', 'BCA Virtual Account', 'Mandiri Virtual Account', 'COD'];
        $vouchers = [null, null, null, 'GENZLOVE', 'FREESHIP', 'VOLUMEDROP'];
        $locations = [
            ['Kota Medan', 'Sumatera Utara', '201'],
            ['Kota Binjai', 'Sumatera Utara', '207'],
            ['Kab. Deli Serdang', 'Sumatera Utara', '203'],
            ['Kota Pematangsiantar', 'Sumatera Utara', '211'],
            ['Kota Jakarta Barat', 'DKI Jakarta', '118'],
            ['Kota Tangerang', 'Banten', '151'],
            ['Kota Bandung', 'Jawa Barat', '401'],
            ['Kota Surabaya', 'Jawa Timur', '602'],
            ['Kota Pekanbaru', 'Riau', '282'],
            ['Kota Batam', 'Kepulauan Riau', '294'],
        ];
        $notes = [
            null, null,
            'Tolong dibungkus rapi, buat kado pacar.',
            'Kirim sore hari ya kak.',
            'Minta sticker pack tambahan dong.',
            'Titip ke satpam kos kalau tidak ada orang.',
        ];

        for ($i = 0; $i < $count; $i++) {
            // Mix of recent and older orders so every status shows up
            $createdAt = $faker->dateTimeBetween($faker->randomElement(['-2 days', '-6 days', '-45 days']), 'now');
            $daysAgo = now()->diffInDays($createdAt);

            $courierName = $faker->randomElement(array_keys($couriers));
            $shippingCost = $couriers[$courierName]['cost'];
            $paymentMethod = $faker->randomElement($paymentMethods);

            // Order status depends on order age
            if ($daysAgo >= 7) {
                $orderStatus = $faker->randomElement(['DELIVERED', 'DELIVERED', 'DELIVERED', 'CANCELLED']);
            } elseif ($daysAgo >= 2) {
                $orderStatus = $faker->randomElement(['SHIPPED', 'SHIPPED', 'DELIVERED']);
            } else {
                $orderStatus = $faker->randomElement(['PENDING', 'PROCESSING', 'PROCESSING']);
            }
            $paymentStatus = match (true) {
                $orderStatus === 'CANCELLED' => 'REFUNDED',
                $orderStatus === 'PENDING' => 'UNPAID',
                $paymentMethod === 'COD' && $orderStatus !== 'DELIVERED' => 'UNPAID',
                default => 'PAID',
            };

            // 1-2 line items
            $items = [];
            $subtotal = 0;
            foreach ($faker->randomElements($products->all(), $faker->numberBetween(1, 2)) as $product) {
                $qty = $faker->numberBetween(1, 2);
                $items[] = [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'color_name' => $product->color_name,
                    'size' => $faker->randomElement($product->sizes),
                    'quantity' => $qty,
                    'unit_price' => $product->price,
                    'subtotal' => $product->price * $qty,
                ];
                $subtotal += $product->price * $qty;
            }

            $voucher = $faker->randomElement($vouchers);
            $discount = match ($voucher) {
                'GENZLOVE' => 20000,
                'FREESHIP' => $shippingCost,
                'VOLUMEDROP' => (int) round($subtotal * 0.10),
                default => 0,
            };

            [$city, $province, $postalPrefix] = $faker->randomElement($locations);
            $firstName = $faker->firstName();
            $lastName = $faker->lastName();

            $order = Order::create([
                'order_number' => 'TDA-2026-' . str_pad((string) (1000 + $i), 4, '0', STR_PAD_LEFT),
                'customer_name' => "$firstName $lastName",
                'customer_phone' => '08' . $faker->numerify('##########'),
                'customer_email' => strtolower($firstName) . '.' . strtolower($lastName) . $faker->numberBetween(1, 99) . '@gmail.com',
                'shipping_address' => $faker->streetAddress(),
                'city' => $city,
                'province' => $province,
                'postal_code' => $postalPrefix . $faker->numerify('##'),
                'courier' => $courierName,
                'shipping_cost' => $shippingCost,
                'subtotal' => $subtotal,
                'discount' => $discount,
                'voucher_code' => $voucher,
                'total_amount' => max(0, $subtotal + $shippingCost - $discount),
                'payment_method' => $paymentMethod,
                'payment_status' => $paymentStatus,
                'order_status' => $orderStatus,
                'tracking_number' => in_array($orderStatus, ['SHIPPED', 'DELIVERED'])
                    ? $couriers[$courierName]['prefix'] . $faker->numerify('##########')
                    : null,
                'notes' => $faker->randomElement($notes),
            ]);
            $order->forceFill(['created_at' => $createdAt, 'updated_at' => $createdAt])->save();

            foreach ($items as $item) {
                $order->items()->create($item);
            }
        }
    }
}
