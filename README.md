# 🖤 TEASE DE AMOR — Streetwear Apparel Store (Calle De Larache Style)

Aplikasi Web E-Commerce Streetwear berbasis **Laravel 10** yang dirancang dengan estetika minimalis-brutalist khas brand streetwear ternama **Calle De Larache (CDL)** untuk brand **TEASE DE AMOR** (Volume 1 & Volume 2).

Proyek ini telah dikonfigurasi secara lengkap dan siap dibuka serta dijalankan langsung di **Visual Studio Code** pada sistem operasi Windows Anda.

---

## ⚡ Fitur Utama Sesuai Kebutuhan

1. **Estetika Streetwear Ala Calle De Larache:**
   - Desain modern editorial bernuansa *dark brutalist* dan *high-contrast typography* dengan aksen warna khas TEASE DE AMOR (*Deep Burgundy/Maroon* `#6A1017`).
   - *Marquee Ticker* berjalan di bagian atas (*Drop Live, Promo, Free Shipping*).
   - Katalog produk drop eksklusif (*Volume 1*, *Volume 2*, dan *Special Drop*).
   - *Tunnel Walk Lookbook* sesuai konsep kampanye pemasaran digital Gen Z & mahasiswa.

2. **Data Data Size Lengkap (S, M, L, XL, XXL):**
   - **Tabel Ukuran Lengkap (Centimeter):**
     - **Size S:** Lebar Dada 54 cm | Panjang 70 cm | Panjang Lengan 24 cm | BB: 45–55 kg | TB: 155–165 cm
     - **Size M:** Lebar Dada 57 cm | Panjang 73 cm | Panjang Lengan 25 cm | BB: 55–68 kg | TB: 165–173 cm
     - **Size L:** Lebar Dada 60 cm | Panjang 76 cm | Panjang Lengan 26 cm | BB: 68–80 kg | TB: 172–180 cm *(Best Seller)*
     - **Size XL:** Lebar Dada 63 cm | Panjang 78 cm | Panjang Lengan 27 cm | BB: 80–92 kg | TB: 178–188 cm
     - **Size XXL:** Lebar Dada 66 cm | Panjang 80 cm | Panjang Lengan 28 cm | BB: 90–105 kg | TB: 180–195 cm
   - **Fit Finder Interaktif:** Masukkan tinggi badan (cm) dan berat badan (kg) Anda, sistem otomatis merekomendasikan ukuran terbaik.
   - **Spesifikasi Bahan:** 100% Heavyweight Cotton 16s/24s (235 GSM), *Boxy Drop-Shoulder Fit*, jahitan rantai *double needle*, sablon *high density puff ink*.

3. **Harga Produk Serba Rp 200.000:**
   - Seluruh produk unggulan Volume 1 & Volume 2 dipatok pada harga resmi **Rp 200.000** (harga coret Rp 249.000, diskon 20%).
   - Sistem voucher diskon:
     - `FREESHIP` : Gratis ongkos kirim Rp 15.000
     - `GENZLOVE` : Potongan langsung Rp 20.000 untuk mahasiswa Gen Z
     - `VOLUMEDROP` : Diskon 10%

4. **Bisa Checkout Langsung Dari Website:**
   - **Shopping Bag / Cart Drawer:** Tambah item, pilih ukuran (S/M/L/XL/XXL), ubah jumlah, terapkan kode voucher.
   - **Modal & Halaman Direct Checkout:**
     - Data Diri Pembeli (Nama, No WhatsApp, Email).
     - Alamat Pengiriman Lengkap (Medan / Seluruh Indonesia).
     - Opsi Ekspedisi: **J&T Express** (Rp 15.000), **SiCepat BEST** (Rp 18.000), **JNE Reguler** (Rp 16.000).
     - Metode Pembayaran: **QRIS Dinamis** (simulasi scan QR), **Virtual Account BCA/Mandiri**, **E-Wallet**, dan **COD**.
   - **Invoice & Receipt Resmi:** Cetak struk/faktur pesanan dengan nomor order unik (cth: `TDA-2026-XXXX`).
   - **Sinkronisasi WhatsApp Otomatis:** Tombol satu kali klik untuk mengirim rekap pesanan langsung ke WhatsApp Admin.
   - **Live Tracking System:** Lacak status pesanan secara real-time (*Lacak Pesanan*).

5. **Fitur Relationship Marketing & Komunitas (Topik UTS):**
   - **Voting Interaktif Volume 03:** Mahasiswa/pelanggan dapat memvoting konsep warna drop berikutnya secara langsung di web.
   - **UGC & Styling Challenge Showcase.**

---

## 🚀 Cara Menjalankan di Visual Studio Code

### Langkah 1: Buka Folder Proyek di VS Code
Buka Visual Studio Code, lalu pilih menu **File > Open Folder...**, dan arahkan ke:
```
C:\Users\Lenovo\.gemini\antigravity\scratch\tease-de-amor-laravel
```
*(Atau buka terminal PowerShell dan jalankan: `code C:\Users\Lenovo\.gemini\antigravity\scratch\tease-de-amor-laravel`)*

### Langkah 2: Jalankan Server Laravel
Ada dua cara mudah:

#### Opsi A: Menggunakan file `serve.bat` (Paling Praktis)
Cukup klik dua kali (double click) file **`serve.bat`** di dalam folder proyek. Browser akan otomatis terbuka ke `http://127.0.0.1:8000`.

#### Opsi B: Menggunakan Terminal Visual Studio Code
1. Tekan tombol `` Ctrl + ` `` di VS Code untuk membuka Terminal.
2. Ketik perintah berikut dan tekan Enter:
   ```bash
   php artisan serve
   ```
3. Buka browser dan kunjungi:
   ```
   http://127.0.0.1:8000
   ```

---

## 📂 Struktur File Penting Proyek

- `routes/web.php` : Daftar rute katalog, checkout, invoice, size-guide, dan tracking.
- `app/Http/Controllers/StoreController.php` : Logika katalog produk, data size chart, dan voting komunitas.
- `app/Http/Controllers/CheckoutController.php` : Logika pemrosesan direct checkout, kalkulasi voucher, dan generator WhatsApp.
- `app/Models/Product.php` : Model produk kaos oversized Rp 200.000.
- `app/Models/Order.php` : Model transaksi pesanan dan resi pengiriman.
- `resources/views/layouts/app.blade.php` : Layout utama, navbar, footer, cart drawer, dan modal checkout.
- `resources/views/store/index.blade.php` : Halaman beranda dengan katalog streetwear ala Calle de Larache.
- `resources/views/store/product.blade.php` : Halaman detail produk & pemilih ukuran.
- `resources/views/store/size-guide.blade.php` : Halaman panduan size & diagram ukuran.
- `resources/views/store/lookbook.blade.php` : Editorial lookbook Campus Tunnel Walk.
- `resources/views/store/invoice.blade.php` : Faktur resmi pesanan siap cetak.
- `resources/views/store/tracking.blade.php` : Halaman lacak pesanan real-time.
- `database/database.sqlite` : Database lokal tanpa perlu setting MySQL/XAMPP.

---

## 💡 Akun Demo / Data Uji Coba

- **Contoh Nomor Pesanan untuk Pelacakan:** `TDA-2026-8941`
- **Kode Voucher Siap Pakai:** `FREESHIP` (Gratis Ongkir) atau `GENZLOVE` (Potongan Rp 20.000)
- **WhatsApp Admin Default:** `+62 812-6543-9810`
