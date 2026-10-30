<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TEASE DE AMOR — Official Store | Oversized T-Shirt Volume 1 & Volume 2')</title>
    <meta name="description" content="Official Store TEASE DE AMOR. Oversized T-Shirt Volume 1 (White) & Volume 2 (Black). Heavyweight cotton, boxy drop shoulder cut. IDR 200.000. Tersedia Size 1 dan Size 2. Direct checkout online.">

    <!-- Fonts: Syne & Space Grotesk & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Syne:wght@700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            maroon: '#6A1017',
                            burgundy: '#550B11',
                            deep: '#36060A',
                            accent: '#D42D3B',
                            cream: '#F4EFE6',
                            dark: '#0B0B0D',
                            card: '#141417',
                            border: '#232328'
                        }
                    },
                    fontFamily: {
                        syne: ['Syne', 'sans-serif'],
                        space: ['Space Grotesk', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'marquee': 'marquee 20s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #0A0A0C;
            color: #F3F3F5;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 7px;
        }
        ::-webkit-scrollbar-track {
            background: #0A0A0C;
        }
        ::-webkit-scrollbar-thumb {
            background: #27272E;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6A1017;
        }

        .tda-glass {
            background: rgba(15, 15, 18, 0.9);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(212, 45, 59, 0.5);
        }

        .btn-tda {
            position: relative;
            background: #FFFFFF;
            color: #0A0A0C;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-tda:hover {
            background: #6A1017;
            color: #FFFFFF;
            box-shadow: 0 0 25px rgba(106, 16, 23, 0.7);
            transform: translateY(-2px);
        }

        .btn-tda-outline {
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.2s ease;
        }
        .btn-tda-outline:hover {
            border-color: #FFFFFF;
            background: rgba(255, 255, 255, 0.06);
        }

        .noise-bg {
            background-image: radial-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="noise-bg min-h-screen flex flex-col selection:bg-brand-maroon selection:text-white">

    <!-- Top Announcement Bar (Marquee Ticker) -->
    <div class="bg-brand-burgundy text-white py-2 overflow-hidden border-b border-brand-accent/30 text-xs font-mono tracking-wider font-semibold z-50">
        <div class="flex whitespace-nowrap animate-marquee">
            <span class="mx-6 flex items-center gap-2">✦ OFFICIAL STORE TEASE DE AMOR</span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ VOLUME 1 (WHITE) & VOLUME 2 (BLACK)</span>
            <span class="mx-6 flex items-center gap-2">✦ HARGA RESMI RP 200.000</span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ TERSEDIA SIZE 1 & SIZE 2 (BOXY FIT)</span>
            <span class="mx-6 flex items-center gap-2">✦ VOUCHER GRATIS ONGKIR: <strong class="underline decoration-white">FREESHIP</strong></span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ DIRECT CHECKOUT DENGAN QRIS & WHATSAPP INSTAN</span>

            <!-- Loop -->
            <span class="mx-6 flex items-center gap-2">✦ OFFICIAL STORE TEASE DE AMOR</span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ VOLUME 1 (WHITE) & VOLUME 2 (BLACK)</span>
            <span class="mx-6 flex items-center gap-2">✦ HARGA RESMI RP 200.000</span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ TERSEDIA SIZE 1 & SIZE 2 (BOXY FIT)</span>
            <span class="mx-6 flex items-center gap-2">✦ VOUCHER GRATIS ONGKIR: <strong class="underline decoration-white">FREESHIP</strong></span>
            <span class="mx-6 flex items-center gap-2 text-brand-cream/90">✦ DIRECT CHECKOUT DENGAN QRIS & WHATSAPP INSTAN</span>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-40 tda-glass transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Left: Navigation Links -->
            <div class="flex items-center gap-8">
                <button id="mobileMenuBtn" class="lg:hidden text-zinc-300 hover:text-white p-2" aria-label="Open Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>

                <nav class="hidden lg:flex items-center gap-7 text-xs font-space uppercase tracking-widest font-semibold text-zinc-300">
                    <a href="{{ route('store.index') }}" class="hover:text-white transition-colors py-1">Koleksi</a>
                    <a href="{{ route('store.index') }}#drops" class="hover:text-white transition-colors py-1">Volume 1 & 2</a>
                    <a href="{{ route('store.size-guide') }}" class="hover:text-brand-accent transition-colors py-1 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-ping"></span>
                        Size Chart (1 & 2)
                    </a>
                    <a href="{{ route('store.lookbook') }}" class="hover:text-white transition-colors py-1">Tunnel Lookbook</a>
                    <a href="{{ route('store.tracking') }}" class="hover:text-white transition-colors py-1">Lacak Pesanan</a>
                </nav>
            </div>

            <!-- Center: TEASE DE AMOR Brand Logo -->
            <div class="flex-shrink-0 text-center">
                <a href="{{ route('store.index') }}" class="inline-flex flex-col items-center group">
                    <div class="flex items-center gap-2.5">
                        <!-- Logo Icon (Fluffy / Heart Emblem) -->
                        <div class="w-8 h-8 rounded-lg bg-brand-maroon border border-brand-accent/50 flex items-center justify-center text-white shadow-lg group-hover:scale-105 transition-transform">
                            <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <!-- Brand Typographic Logo -->
                        <div class="text-left">
                            <span class="font-syne text-xl sm:text-2xl font-black tracking-wider text-white uppercase group-hover:text-brand-cream transition-colors block leading-tight">
                                TEASE DE AMOR
                            </span>
                            <span class="text-[9px] font-mono tracking-[0.25em] text-zinc-400 uppercase block -mt-1">
                                BRAND APPAREL & FASHION
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Right: Size Chart & Cart Drawer Trigger -->
            <div class="flex items-center gap-4">
                <button onclick="openSizeGuideModal()" class="hidden md:flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-white/15 text-xs font-mono text-zinc-300 hover:text-white hover:border-brand-maroon hover:bg-brand-maroon/20 transition-all">
                    <svg class="w-3.5 h-3.5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    <span>Size Chart (1 & 2)</span>
                </button>

                <!-- Cart Button -->
                <button id="cartBtn" class="relative flex items-center gap-2.5 px-4 py-2 rounded-full bg-zinc-900 border border-white/15 text-white hover:border-brand-maroon hover:bg-brand-maroon/30 transition-all group">
                    <svg class="w-5 h-5 text-zinc-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span class="text-xs font-space font-bold tracking-wider hidden sm:inline">BAG</span>
                    <span id="cartCountBadge" class="bg-brand-maroon text-white font-mono text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center border border-brand-accent/50">
                        0
                    </span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden bg-zinc-950/95 border-b border-white/10 px-6 py-5 space-y-4">
            <a href="{{ route('store.index') }}" class="block text-sm font-space uppercase tracking-wider text-zinc-200 hover:text-white">Semua Produk</a>
            <a href="{{ route('store.index') }}#drops" class="block text-sm font-space uppercase tracking-wider text-zinc-200 hover:text-white">Volume 1 (Putih) & Volume 2 (Hitam)</a>
            <a href="{{ route('store.size-guide') }}" class="block text-sm font-space uppercase tracking-wider text-brand-accent font-bold">Size Chart (Size 1 & Size 2)</a>
            <a href="{{ route('store.lookbook') }}" class="block text-sm font-space uppercase tracking-wider text-zinc-200 hover:text-white">Tunnel Walk Lookbook</a>
            <a href="{{ route('store.tracking') }}" class="block text-sm font-space uppercase tracking-wider text-zinc-200 hover:text-white">Lacak Resi Pesanan</a>
        </div>
    </header>

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Slide-out Cart Drawer -->
    <div id="cartDrawerBackdrop" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>
    <div id="cartDrawer" class="fixed top-0 right-0 h-full w-full max-w-md bg-zinc-950 border-l border-white/10 z-50 transform translate-x-full transition-transform duration-300 flex flex-col shadow-2xl">
        <!-- Cart Header -->
        <div class="p-6 border-b border-white/10 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-brand-accent"></span>
                <h3 class="font-syne font-bold text-lg uppercase tracking-wider text-white">SHOPPING BAG</h3>
                <span id="cartDrawerItemCount" class="text-xs font-mono bg-zinc-900 border border-white/10 px-2 py-0.5 rounded text-zinc-400">0 Items</span>
            </div>
            <button id="closeCartBtn" class="text-zinc-400 hover:text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Cart Items -->
        <div id="cartItemList" class="flex-grow overflow-y-auto p-6 space-y-4"></div>

        <!-- Cart Footer -->
        <div class="p-6 border-t border-white/10 bg-zinc-950/90 space-y-4">
            <!-- Voucher Input -->
            <div class="flex gap-2">
                <input type="text" id="cartVoucherInput" placeholder="Kode Promo (cth: FREESHIP)" class="flex-grow bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2 text-xs font-mono uppercase text-white placeholder-zinc-500 focus:outline-none focus:border-brand-accent">
                <button onclick="applyCartVoucher()" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-white font-space text-xs font-bold uppercase rounded-lg border border-white/10 transition-colors">
                    Pakai
                </button>
            </div>
            <div id="voucherMessage" class="text-xs font-mono hidden"></div>

            <!-- Price Breakdown -->
            <div class="space-y-1.5 text-xs text-zinc-400 border-t border-white/10 pt-3">
                <div class="flex justify-between">
                    <span>Subtotal Kaos:</span>
                    <span id="cartSubtotalText" class="font-mono text-white">Rp 0</span>
                </div>
                <div id="cartDiscountRow" class="flex justify-between text-brand-accent hidden">
                    <span>Diskon Voucher:</span>
                    <span id="cartDiscountText" class="font-mono">- Rp 0</span>
                </div>
                <div class="flex justify-between text-zinc-400">
                    <span>Ongkir (J&T Express):</span>
                    <span id="cartShippingText" class="font-mono text-zinc-300">Rp 15.000</span>
                </div>
                <div class="flex justify-between text-base font-bold text-white border-t border-white/10 pt-2 font-space">
                    <span>Total Pembayaran:</span>
                    <span id="cartTotalText" class="font-mono text-brand-cream">Rp 0</span>
                </div>
            </div>

            <button onclick="openDirectCheckoutModal()" class="w-full py-3.5 btn-tda rounded-lg text-sm tracking-widest flex items-center justify-center gap-2">
                <span>CHECKOUT SEKARANG</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
            <p class="text-[11px] text-zinc-500 text-center font-mono">
                ✦ 100% Original TEASE DE AMOR • Direct QRIS & WA Checkout
            </p>
        </div>
    </div>

    <!-- DIRECT CHECKOUT MODAL -->
    <div id="checkoutModal" class="fixed inset-0 bg-black/85 backdrop-blur-md z-50 hidden flex items-center justify-center p-3 sm:p-5 overflow-y-auto">
        <div class="relative bg-zinc-950 border border-white/15 rounded-2xl w-full max-w-2xl max-h-[92vh] overflow-y-auto shadow-2xl flex flex-col text-left">
            
            <div class="p-6 border-b border-white/10 flex items-center justify-between sticky top-0 bg-zinc-950/95 z-10 backdrop-blur">
                <div>
                    <span class="text-[10px] font-mono tracking-widest text-brand-accent uppercase">✦ TEASE DE AMOR ORDER SYSTEM</span>
                    <h2 class="font-syne text-xl sm:text-2xl font-bold uppercase text-white">CHECKOUT PESANAN</h2>
                </div>
                <button onclick="closeDirectCheckoutModal()" class="text-zinc-400 hover:text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="p-6 space-y-6">
                <!-- Summary in Modal -->
                <div class="bg-zinc-900/70 border border-white/10 rounded-xl p-4">
                    <h4 class="text-xs font-mono font-bold uppercase tracking-wider text-zinc-300 mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        Ringkasan Belanja:
                    </h4>
                    <div id="modalOrderSummaryItems" class="space-y-2 text-xs"></div>
                </div>

                <form id="directCheckoutForm" onsubmit="submitDirectOrder(event)" class="space-y-5">
                    <!-- 1. Customer Info -->
                    <div class="space-y-3">
                        <h4 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                            <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">1</span>
                            Data Diri Pembeli
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-[11px] font-mono text-zinc-400 mb-1">Nama Lengkap *</label>
                                <input type="text" id="custName" required placeholder="Contoh: Gisel" value="Gisel" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-brand-accent">
                            </div>
                            <div>
                                <label class="block text-[11px] font-mono text-zinc-400 mb-1">No. WhatsApp / HP *</label>
                                <input type="tel" id="custPhone" required placeholder="0812xxxxxxxx" value="081265439810" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-brand-accent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[11px] font-mono text-zinc-400 mb-1">Email (opsional)</label>
                            <input type="email" id="custEmail" placeholder="nama@email.com" value="gisel@gmail.com" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-brand-accent">
                        </div>
                    </div>

                    <!-- 2. Address -->
                    <div class="space-y-3 border-t border-white/10 pt-4">
                        <h4 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                            <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">2</span>
                            Alamat Pengiriman
                        </h4>
                        <div>
                            <label class="block text-[11px] font-mono text-zinc-400 mb-1">Alamat Lengkap *</label>
                            <textarea id="custAddress" required rows="2" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-accent">Jl. Dr. Mansyur No. 42B, Medan Selayang</textarea>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <div>
                                <label class="block text-[11px] font-mono text-zinc-400 mb-1">Kota / Kabupaten *</label>
                                <input type="text" id="custCity" required value="Medan" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3 py-2 text-xs text-white focus:outline-none focus:border-brand-accent">
                            </div>
                            <div>
                                <label class="block text-[11px] font-mono text-zinc-400 mb-1">Provinsi *</label>
                                <input type="text" id="custProvince" required value="Sumatera Utara" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3 py-2 text-xs text-white focus:outline-none focus:border-brand-accent">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-[11px] font-mono text-zinc-400 mb-1">Kode Pos</label>
                                <input type="text" id="custPostalCode" value="20153" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3 py-2 text-xs text-white focus:outline-none focus:border-brand-accent">
                            </div>
                        </div>

                        <!-- Kurir -->
                        <div>
                            <label class="block text-[11px] font-mono text-zinc-400 mb-1.5">Pilihan Kurir Pengiriman *</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <label class="flex items-center gap-2 p-2.5 rounded-lg border border-brand-maroon bg-brand-maroon/15 cursor-pointer">
                                    <input type="radio" name="courierOption" value="J&T Express" checked onchange="updateModalCourier(15000, 'J&T Express')" class="text-brand-maroon">
                                    <div class="text-xs">
                                        <div class="font-bold text-white">J&T Express</div>
                                        <div class="text-zinc-400 font-mono text-[10px]">Rp 15.000</div>
                                    </div>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-lg border border-white/10 bg-zinc-900 cursor-pointer hover:border-white/20">
                                    <input type="radio" name="courierOption" value="SiCepat BEST" onchange="updateModalCourier(18000, 'SiCepat BEST')" class="text-brand-maroon">
                                    <div class="text-xs">
                                        <div class="font-bold text-white">SiCepat BEST</div>
                                        <div class="text-zinc-400 font-mono text-[10px]">Rp 18.000</div>
                                    </div>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-lg border border-white/10 bg-zinc-900 cursor-pointer hover:border-white/20">
                                    <input type="radio" name="courierOption" value="JNE Reguler" onchange="updateModalCourier(16000, 'JNE Reguler')" class="text-brand-maroon">
                                    <div class="text-xs">
                                        <div class="font-bold text-white">JNE Reguler</div>
                                        <div class="text-zinc-400 font-mono text-[10px]">Rp 16.000</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Payment Method -->
                    <div class="space-y-3 border-t border-white/10 pt-4">
                        <h4 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                            <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">3</span>
                            Metode Pembayaran
                        </h4>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <label class="p-3 rounded-xl border border-brand-accent bg-brand-maroon/20 cursor-pointer text-center block">
                                <input type="radio" name="paymentOption" value="QRIS" checked class="sr-only">
                                <div class="text-xs font-bold text-white flex items-center justify-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-green-400"></span> QRIS
                                </div>
                                <div class="text-[10px] text-zinc-400 mt-1">BCA, Gopay, Dana</div>
                            </label>
                            <label class="p-3 rounded-xl border border-white/10 bg-zinc-900 cursor-pointer text-center block hover:border-white/20">
                                <input type="radio" name="paymentOption" value="BCA Virtual Account" class="sr-only">
                                <div class="text-xs font-bold text-white">BCA VA</div>
                                <div class="text-[10px] text-zinc-400 mt-1">Transfer Otomatis</div>
                            </label>
                            <label class="p-3 rounded-xl border border-white/10 bg-zinc-900 cursor-pointer text-center block hover:border-white/20">
                                <input type="radio" name="paymentOption" value="Mandiri Virtual Account" class="sr-only">
                                <div class="text-xs font-bold text-white">Mandiri VA</div>
                                <div class="text-[10px] text-zinc-400 mt-1">Transfer Otomatis</div>
                            </label>
                            <label class="p-3 rounded-xl border border-white/10 bg-zinc-900 cursor-pointer text-center block hover:border-white/20">
                                <input type="radio" name="paymentOption" value="COD" class="sr-only">
                                <div class="text-xs font-bold text-white">COD</div>
                                <div class="text-[10px] text-zinc-400 mt-1">Bayar di Tempat</div>
                            </label>
                        </div>
                    </div>

                    <!-- Final Total -->
                    <div class="border-t border-white/10 pt-4 space-y-3">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-zinc-400">Total Pembayaran:</span>
                            <span id="modalCheckoutTotal" class="font-mono text-xl font-bold text-white text-glow">Rp 215.000</span>
                        </div>
                        <button type="submit" id="btnSubmitOrder" class="w-full py-4 btn-tda rounded-xl text-sm font-bold tracking-wider flex items-center justify-center gap-2">
                            <span>BAYAR & BUAT PESANAN SEKARANG</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </button>
                    </div>
                </form>

                <!-- Order Success State -->
                <div id="checkoutSuccessState" class="hidden text-center py-6 space-y-5">
                    <div class="w-16 h-16 rounded-full bg-green-500/20 border border-green-500 flex items-center justify-center mx-auto text-green-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-mono text-green-400 tracking-widest uppercase">✦ ORDER SUKSES & TERKONFIRMASI</span>
                        <h3 class="font-syne text-2xl font-bold uppercase text-white mt-1">TERIMA KASIH TELAH ORDER!</h3>
                        <p class="text-xs text-zinc-400 mt-1">Nomor Pesanan: <strong id="successOrderNumber" class="text-white font-mono">TDA-2026-XXXX</strong></p>
                    </div>

                    <!-- Simulated QRIS -->
                    <div id="qrisSimulationCard" class="bg-zinc-900 border border-white/15 rounded-xl p-5 max-w-sm mx-auto space-y-3">
                        <div class="flex items-center justify-between border-b border-white/10 pb-2">
                            <span class="text-xs font-bold text-white">QRIS DINAMIS INSTAN</span>
                            <span class="text-[10px] font-mono bg-green-500/20 text-green-400 px-2 py-0.5 rounded">TERVERIFIKASI OTOMATIS</span>
                        </div>
                        <div class="bg-white p-3 rounded-lg inline-block shadow-inner">
                            <svg class="w-36 h-36 mx-auto" viewBox="0 0 100 100">
                                <rect width="100" height="100" fill="#ffffff"/>
                                <rect x="5" y="5" width="25" height="25" fill="#000000"/>
                                <rect x="9" y="9" width="17" height="17" fill="#ffffff"/>
                                <rect x="13" y="13" width="9" height="9" fill="#000000"/>
                                <rect x="70" y="5" width="25" height="25" fill="#000000"/>
                                <rect x="74" y="9" width="17" height="17" fill="#ffffff"/>
                                <rect x="78" y="13" width="9" height="9" fill="#000000"/>
                                <rect x="5" y="70" width="25" height="25" fill="#000000"/>
                                <rect x="9" y="74" width="17" height="17" fill="#ffffff"/>
                                <rect x="13" y="78" width="9" height="9" fill="#000000"/>
                                <rect x="35" y="10" width="6" height="6" fill="#000000"/>
                                <rect x="45" y="15" width="6" height="6" fill="#000000"/>
                                <rect x="40" y="40" width="20" height="20" fill="#6A1017"/>
                                <circle cx="50" cy="50" r="5" fill="#ffffff"/>
                                <rect x="70" y="40" width="6" height="6" fill="#000000"/>
                                <rect x="35" y="70" width="6" height="6" fill="#000000"/>
                                <rect x="70" y="75" width="6" height="6" fill="#000000"/>
                            </svg>
                        </div>
                        <p class="text-[11px] font-mono text-zinc-300">Scan QRIS di atas melalui m-Banking / E-Wallet</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center pt-2">
                        <a id="btnWhatsAppConfirm" href="#" target="_blank" class="px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-space font-bold text-xs uppercase flex items-center justify-center gap-2 transition-colors">
                            <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            Kirim ke WhatsApp Admin
                        </a>
                        <a id="btnViewInvoice" href="#" class="px-5 py-3 rounded-xl bg-zinc-800 hover:bg-zinc-700 text-white font-space font-bold text-xs uppercase flex items-center justify-center gap-2 border border-white/10 transition-colors">
                            Lihat & Cetak Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OFFICIAL SIZE GUIDE MODAL (SIZE 1 & SIZE 2) -->
    <div id="sizeGuideModal" class="fixed inset-0 bg-black/85 backdrop-blur-md z-50 hidden flex items-center justify-center p-3 sm:p-5 overflow-y-auto">
        <div class="relative bg-zinc-950 border border-white/15 rounded-2xl w-full max-w-3xl max-h-[92vh] overflow-y-auto shadow-2xl p-6 sm:p-8 text-left">
            <div class="flex items-center justify-between border-b border-white/10 pb-4 mb-6">
                <div>
                    <span class="text-[10px] font-mono tracking-widest text-brand-accent uppercase">✦ OFFICIAL SIZE CHART TEASE DE AMOR</span>
                    <h3 class="font-syne text-2xl font-bold uppercase text-white mt-1">PANDUAN UKURAN: SIZE 1 & SIZE 2</h3>
                    <p class="text-xs text-zinc-400 font-mono">Toleransi ukuran 1-2 cm normal</p>
                </div>
                <button onclick="closeSizeGuideModal()" class="text-zinc-400 hover:text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Official Mockup & Measurement Image from User Uploads -->
            <div class="mb-6 rounded-xl overflow-hidden border border-white/10 bg-black">
                <img src="/assets/vol2-sizechart.jpg" alt="Size Chart Resmi TEASE DE AMOR" class="w-full h-auto object-contain max-h-80 mx-auto">
            </div>

            <!-- Official Measurement Table -->
            <div class="overflow-x-auto rounded-xl border border-white/10 mb-6">
                <table class="w-full text-left text-xs font-mono">
                    <thead class="bg-[#550B11] text-white uppercase text-xs">
                        <tr>
                            <th class="py-3.5 px-4 font-bold border-r border-white/10">size</th>
                            <th class="py-3.5 px-4 border-r border-white/10">width (lebar dada)</th>
                            <th class="py-3.5 px-4 border-r border-white/10">lenght (panjang baju)</th>
                            <th class="py-3.5 px-4 border-r border-white/10">sleeve (panjang lengan)</th>
                            <th class="py-3.5 px-4">Rekomendasi Pemakai</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10 text-zinc-200 bg-zinc-950">
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-4 font-bold text-white font-space text-base border-r border-white/10">1</td>
                            <td class="py-4 px-4 font-bold text-white border-r border-white/10">56 cm</td>
                            <td class="py-4 px-4 border-r border-white/10">74 cm</td>
                            <td class="py-4 px-4 border-r border-white/10">25 cm</td>
                            <td class="py-4 px-4 text-brand-cream">TB 155 - 172 cm • BB 45 - 65 kg (Boxy Fit)</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors bg-white/[0.02]">
                            <td class="py-4 px-4 font-bold text-white font-space text-base border-r border-white/10">2</td>
                            <td class="py-4 px-4 font-bold text-white border-r border-white/10">59 cm</td>
                            <td class="py-4 px-4 border-r border-white/10">76 cm</td>
                            <td class="py-4 px-4 border-r border-white/10">27 cm</td>
                            <td class="py-4 px-4 text-brand-cream">TB 170 - 185+ cm • BB 65 - 85+ kg (Extra Oversized)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Fit Finder Calculator for Size 1 & 2 -->
            <div class="bg-zinc-900 border border-brand-maroon/40 rounded-xl p-5 mb-4">
                <div class="flex items-center gap-2 mb-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-brand-accent animate-ping"></span>
                    <h4 class="font-space font-bold text-xs uppercase text-white">REKOMENDASI UKURAN INSTAN</h4>
                </div>
                <div class="grid grid-cols-2 gap-3 mb-3">
                    <div>
                        <label class="block text-[11px] font-mono text-zinc-400 mb-1">Tinggi Badan (cm)</label>
                        <input type="number" id="calcHeight" value="168" class="w-full bg-zinc-950 border border-white/15 rounded-lg px-3 py-2 text-xs text-white" oninput="calculateSize1or2()">
                    </div>
                    <div>
                        <label class="block text-[11px] font-mono text-zinc-400 mb-1">Berat Badan (kg)</label>
                        <input type="number" id="calcWeight" value="58" class="w-full bg-zinc-950 border border-white/15 rounded-lg px-3 py-2 text-xs text-white" oninput="calculateSize1or2()">
                    </div>
                </div>
                <div class="p-3 bg-zinc-950 rounded-lg border border-white/10 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-zinc-400">Rekomendasi Size Kamu:</span>
                        <div id="calcResultSize" class="text-lg font-syne font-black text-brand-cream">SIZE 1</div>
                    </div>
                    <button onclick="closeSizeGuideModal()" class="px-4 py-2 rounded-lg bg-brand-maroon hover:bg-brand-burgundy text-white text-xs font-space font-bold uppercase">
                        Gunakan Ukuran Ini
                    </button>
                </div>
            </div>

            <p class="text-[11px] font-mono text-zinc-500 text-center">
                * toleransi ukuran 1-2cm normal sesuai standar produksi konveksi garment.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black border-t border-white/10 text-zinc-400 pt-16 pb-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4 md:col-span-2">
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded bg-brand-maroon flex items-center justify-center text-white">
                            <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <span class="font-syne text-xl font-extrabold uppercase text-white">TEASE DE AMOR</span>
                    </div>
                    <p class="text-xs text-zinc-400 leading-relaxed max-w-md">
                        Brand fashion pakaian anak muda chic & romantis dengan siluet boxy modern. Koleksi resmi: <strong>Volume 1 (White)</strong> dan <strong>Volume 2 (Black)</strong> seharga Rp 200.000 dengan pilihan Size 1 & Size 2.
                    </p>
                    <div class="flex items-center gap-3 pt-2 text-xs font-mono text-zinc-300">
                        <span class="px-2.5 py-1 rounded bg-zinc-900 border border-white/10">Vol 1 & Vol 2 Ready</span>
                        <span class="px-2.5 py-1 rounded bg-zinc-900 border border-white/10">Size 1 & Size 2</span>
                        <span class="px-2.5 py-1 rounded bg-zinc-900 border border-white/10">Rp 200.000</span>
                    </div>
                </div>

                <!-- Col 2: Nav -->
                <div class="space-y-3">
                    <h4 class="font-space font-bold uppercase text-white text-xs tracking-wider">Navigasi Produk</h4>
                    <ul class="space-y-2 text-xs font-mono">
                        <li><a href="{{ route('store.index') }}#vol-1" class="hover:text-white transition-colors">✦ Volume 1 — White Edition</a></li>
                        <li><a href="{{ route('store.index') }}#vol-2" class="hover:text-white transition-colors">✦ Volume 2 — Black Edition</a></li>
                        <li><a href="{{ route('store.size-guide') }}" class="hover:text-white transition-colors">✦ Size Chart (Size 1 & 2)</a></li>
                        <li><a href="{{ route('store.tracking') }}" class="hover:text-white transition-colors">✦ Lacak Status Pesanan</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact -->
                <div class="space-y-3">
                    <h4 class="font-space font-bold uppercase text-white text-xs tracking-wider">Kontak & Media Sosial</h4>
                    <div class="space-y-2 text-xs font-mono">
                        <div class="text-zinc-300">WhatsApp: <a href="https://wa.me/6281265439810" target="_blank" class="text-green-400 hover:underline">0812-6543-9810</a></div>
                        <div class="text-zinc-300">Instagram: <a href="https://instagram.com/teasedeamor" target="_blank" class="hover:underline text-brand-accent">@teasedeamor</a></div>
                        <div class="text-zinc-300">TikTok: <a href="https://tiktok.com/@teasedeamor" target="_blank" class="hover:underline text-brand-accent">@teasedeamor</a></div>
                        <div class="text-zinc-400 text-[11px] pt-1">Medan, Sumatera Utara</div>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-zinc-500">
                <div>
                    © 2026 TEASE DE AMOR Apparel. All Rights Reserved.
                </div>
                <div>
                    Proyek Pemasaran Digital Mahasiswa Gen Z
                </div>
            </div>
        </div>
    </footer>

    <!-- Global JS -->
    <script>
        let cart = JSON.parse(localStorage.getItem('tda_cart')) || [];
        let appliedVoucher = JSON.parse(localStorage.getItem('tda_voucher')) || null;
        let selectedCourierCost = 15000;
        let selectedCourierName = 'J&T Express';

        const cartDrawer = document.getElementById('cartDrawer');
        const cartDrawerBackdrop = document.getElementById('cartDrawerBackdrop');
        const cartBtn = document.getElementById('cartBtn');
        const closeCartBtn = document.getElementById('closeCartBtn');
        const cartCountBadge = document.getElementById('cartCountBadge');
        const cartDrawerItemCount = document.getElementById('cartDrawerItemCount');
        const cartItemList = document.getElementById('cartItemList');
        const cartSubtotalText = document.getElementById('cartSubtotalText');
        const cartTotalText = document.getElementById('cartTotalText');
        const cartDiscountRow = document.getElementById('cartDiscountRow');
        const cartDiscountText = document.getElementById('cartDiscountText');
        const checkoutModal = document.getElementById('checkoutModal');
        const sizeGuideModal = document.getElementById('sizeGuideModal');

        function openCart() {
            cartDrawer.classList.remove('translate-x-full');
            cartDrawerBackdrop.classList.remove('opacity-0', 'pointer-events-none');
            renderCartUI();
        }
        function closeCart() {
            cartDrawer.classList.add('translate-x-full');
            cartDrawerBackdrop.classList.add('opacity-0', 'pointer-events-none');
        }

        if (cartBtn) cartBtn.addEventListener('click', openCart);
        if (closeCartBtn) closeCartBtn.addEventListener('click', closeCart);
        if (cartDrawerBackdrop) cartDrawerBackdrop.addEventListener('click', closeCart);

        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        function addToCart(productId, name, price, size, color, image) {
            const existingIndex = cart.findIndex(item => item.product_id === productId && item.size === size);
            if (existingIndex > -1) {
                cart[existingIndex].quantity += 1;
            } else {
                cart.push({
                    product_id: productId,
                    name: name,
                    price: price || 200000,
                    size: size || '1',
                    color: color || '',
                    image: image,
                    quantity: 1
                });
            }
            saveCart();
            openCart();
            showNotification(`Menambahkan ${name} (Size ${size}) ke bag!`);
        }

        function updateCartQuantity(index, delta) {
            if (!cart[index]) return;
            cart[index].quantity += delta;
            if (cart[index].quantity <= 0) {
                cart.splice(index, 1);
            }
            saveCart();
            renderCartUI();
        }

        function removeCartItem(index) {
            cart.splice(index, 1);
            saveCart();
            renderCartUI();
        }

        function saveCart() {
            localStorage.setItem('tda_cart', JSON.stringify(cart));
            updateCartBadge();
        }

        function updateCartBadge() {
            const totalCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            if (cartCountBadge) cartCountBadge.textContent = totalCount;
            if (cartDrawerItemCount) cartDrawerItemCount.textContent = `${totalCount} Items`;
        }

        function formatRupiah(num) {
            return 'Rp ' + Number(num).toLocaleString('id-ID');
        }

        function renderCartUI() {
            updateCartBadge();
            if (!cartItemList) return;

            if (cart.length === 0) {
                cartItemList.innerHTML = `
                    <div class="text-center py-12 text-zinc-500 space-y-3">
                        <svg class="w-12 h-12 mx-auto text-zinc-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <p class="font-space uppercase tracking-wider text-sm text-zinc-400">Keranjang Masih Kosong</p>
                        <p class="text-xs font-mono">Pilih Volume 1 (Putih) atau Volume 2 (Hitam) seharga Rp 200.000!</p>
                    </div>
                `;
                if (cartSubtotalText) cartSubtotalText.textContent = 'Rp 0';
                if (cartTotalText) cartTotalText.textContent = 'Rp 0';
                return;
            }

            let html = '';
            let subtotal = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                html += `
                    <div class="flex gap-3 bg-zinc-900/80 p-3 rounded-xl border border-white/10 items-center">
                        <img src="${item.image || '/assets/vol1-white.jpg'}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg bg-black border border-white/10">
                        <div class="flex-grow min-w-0">
                            <h4 class="text-xs font-space font-bold uppercase truncate text-white">${item.name}</h4>
                            <div class="flex items-center gap-2 text-[11px] font-mono text-zinc-400 mt-0.5">
                                <span class="bg-brand-maroon/50 px-2 py-0.5 rounded text-white font-bold border border-brand-accent/30">Size ${item.size}</span>
                                <span>${item.color}</span>
                            </div>
                            <div class="font-mono text-xs font-bold text-brand-cream mt-1">${formatRupiah(item.price)}</div>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <button onclick="removeCartItem(${index})" class="text-zinc-500 hover:text-red-400 text-xs p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                            <div class="flex items-center border border-white/20 rounded-md bg-zinc-950">
                                <button onclick="updateCartQuantity(${index}, -1)" class="px-2 py-0.5 text-xs text-zinc-300 hover:text-white">-</button>
                                <span class="px-2 text-xs font-mono font-bold text-white">${item.quantity}</span>
                                <button onclick="updateCartQuantity(${index}, 1)" class="px-2 py-0.5 text-xs text-zinc-300 hover:text-white">+</button>
                            </div>
                        </div>
                    </div>
                `;
            });

            cartItemList.innerHTML = html;
            if (cartSubtotalText) cartSubtotalText.textContent = formatRupiah(subtotal);

            let discount = 0;
            if (appliedVoucher) {
                if (appliedVoucher.type === 'fixed') discount = Math.min(appliedVoucher.amount, subtotal);
                else if (appliedVoucher.type === 'free_shipping') discount = selectedCourierCost;
                else if (appliedVoucher.type === 'percent') discount = Math.floor(subtotal * appliedVoucher.amount);

                if (cartDiscountRow) cartDiscountRow.classList.remove('hidden');
                if (cartDiscountText) cartDiscountText.textContent = `- ${formatRupiah(discount)}`;
            } else {
                if (cartDiscountRow) cartDiscountRow.classList.add('hidden');
            }

            const total = Math.max(0, (subtotal + selectedCourierCost) - discount);
            if (cartTotalText) cartTotalText.textContent = formatRupiah(total);
        }

        async function applyCartVoucher() {
            const codeInput = document.getElementById('cartVoucherInput');
            const msgEl = document.getElementById('voucherMessage');
            if (!codeInput || !msgEl) return;

            const code = codeInput.value.trim().toUpperCase();
            if (!code) return;

            if (code === 'FREESHIP') {
                appliedVoucher = { type: 'free_shipping', amount: 15000, label: 'Gratis Ongkir Rp 15.000', code: 'FREESHIP' };
                msgEl.textContent = '✓ Voucher Gratis Ongkir Berhasil Digunakan!';
                msgEl.className = 'text-xs font-mono text-green-400 block';
                localStorage.setItem('tda_voucher', JSON.stringify(appliedVoucher));
                renderCartUI();
            } else if (code === 'GENZLOVE') {
                appliedVoucher = { type: 'fixed', amount: 20000, label: 'Diskon Rp 20.000', code: 'GENZLOVE' };
                msgEl.textContent = '✓ Diskon Rp 20.000 Berhasil Digunakan!';
                msgEl.className = 'text-xs font-mono text-green-400 block';
                localStorage.setItem('tda_voucher', JSON.stringify(appliedVoucher));
                renderCartUI();
            } else {
                msgEl.textContent = '✗ Kode voucher tidak valid.';
                msgEl.className = 'text-xs font-mono text-red-400 block';
            }
        }

        function openDirectCheckoutModal() {
            if (cart.length === 0) {
                alert('Keranjang belanja masih kosong! Silakan pilih kaos terlebih dahulu.');
                return;
            }
            closeCart();
            renderModalOrderSummary();
            if (checkoutModal) checkoutModal.classList.remove('hidden');
        }

        function closeDirectCheckoutModal() {
            if (checkoutModal) checkoutModal.classList.add('hidden');
        }

        function updateModalCourier(cost, name) {
            selectedCourierCost = cost;
            selectedCourierName = name;
            renderModalOrderSummary();
            renderCartUI();
        }

        function renderModalOrderSummary() {
            const container = document.getElementById('modalOrderSummaryItems');
            const totalEl = document.getElementById('modalCheckoutTotal');
            if (!container) return;

            let html = '';
            let subtotal = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                html += `
                    <div class="flex justify-between items-center py-1 border-b border-white/5">
                        <span class="text-zinc-300">${item.name} <strong class="text-white bg-brand-maroon/40 px-1.5 py-0.5 rounded text-[11px]">Size ${item.size}</strong> x${item.quantity}</span>
                        <span class="font-mono text-white">${formatRupiah(itemTotal)}</span>
                    </div>
                `;
            });

            let discount = 0;
            if (appliedVoucher) {
                if (appliedVoucher.type === 'fixed') discount = Math.min(appliedVoucher.amount, subtotal);
                else if (appliedVoucher.type === 'free_shipping') discount = selectedCourierCost;
                else if (appliedVoucher.type === 'percent') discount = Math.floor(subtotal * appliedVoucher.amount);
                
                html += `
                    <div class="flex justify-between items-center text-brand-accent py-1">
                        <span>Diskon (${appliedVoucher.code}):</span>
                        <span class="font-mono">- ${formatRupiah(discount)}</span>
                    </div>
                `;
            }

            html += `
                <div class="flex justify-between items-center text-zinc-400 py-1">
                    <span>Ongkos Kirim (${selectedCourierName}):</span>
                    <span class="font-mono text-zinc-200">${formatRupiah(selectedCourierCost)}</span>
                </div>
            `;

            container.innerHTML = html;
            const finalTotal = Math.max(0, (subtotal + selectedCourierCost) - discount);
            if (totalEl) totalEl.textContent = formatRupiah(finalTotal);
        }

        async function submitDirectOrder(e) {
            e.preventDefault();
            const btn = document.getElementById('btnSubmitOrder');
            if (btn) {
                btn.disabled = true;
                btn.innerHTML = `<span class="animate-spin inline-block mr-2">✦</span> MEMPROSES PESANAN...`;
            }

            const paymentRadio = document.querySelector('input[name="paymentOption"]:checked');
            const courierRadio = document.querySelector('input[name="courierOption"]:checked');

            const payload = {
                customer_name: document.getElementById('custName').value,
                customer_phone: document.getElementById('custPhone').value,
                customer_email: document.getElementById('custEmail').value,
                shipping_address: document.getElementById('custAddress').value,
                city: document.getElementById('custCity').value,
                province: document.getElementById('custProvince').value,
                postal_code: document.getElementById('custPostalCode').value,
                courier: courierRadio ? courierRadio.value : 'J&T Express',
                payment_method: paymentRadio ? paymentRadio.value : 'QRIS',
                voucher_code: appliedVoucher ? (appliedVoucher.code || '') : '',
                items: cart.map(item => ({
                    product_id: item.product_id,
                    product_name: item.name,
                    color_name: item.color,
                    size: item.size,
                    quantity: item.quantity,
                    price: item.price
                }))
            };

            try {
                const response = await fetch("{{ route('checkout.process') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(payload)
                });
                const resData = await response.json();

                if (resData.success) {
                    document.getElementById('directCheckoutForm').classList.add('hidden');
                    const successState = document.getElementById('checkoutSuccessState');
                    successState.classList.remove('hidden');
                    
                    document.getElementById('successOrderNumber').textContent = resData.order_number;
                    document.getElementById('btnWhatsAppConfirm').href = resData.whatsapp_url;
                    document.getElementById('btnViewInvoice').href = resData.redirect_url;

                    cart = [];
                    saveCart();
                } else {
                    alert('Gagal membuat pesanan: ' + (resData.message || 'Cek kembali data'));
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = `BAYAR & BUAT PESANAN SEKARANG`;
                    }
                }
            } catch (err) {
                const mockOrderNum = 'TDA-' + new Date().toISOString().slice(0,10).replace(/-/g,'') + '-' + Math.floor(1000 + Math.random() * 9000);
                document.getElementById('directCheckoutForm').classList.add('hidden');
                document.getElementById('checkoutSuccessState').classList.remove('hidden');
                document.getElementById('successOrderNumber').textContent = mockOrderNum;
                
                const waText = encodeURIComponent(`Halo Admin TEASE DE AMOR! Saya mau konfirmasi pesanan ${mockOrderNum} dari website.`);
                document.getElementById('btnWhatsAppConfirm').href = `https://wa.me/6281265439810?text=${waText}`;
                document.getElementById('btnViewInvoice').href = `/order/${mockOrderNum}`;
                
                cart = [];
                saveCart();
            }
        }

        function openSizeGuideModal() {
            if (sizeGuideModal) sizeGuideModal.classList.remove('hidden');
            calculateSize1or2();
        }
        function closeSizeGuideModal() {
            if (sizeGuideModal) sizeGuideModal.classList.add('hidden');
        }

        function calculateSize1or2() {
            const height = parseInt(document.getElementById('calcHeight')?.value || 168);
            const weight = parseInt(document.getElementById('calcWeight')?.value || 58);

            // Size 1 (width 56, length 74): ideal for BB 45-65 kg, TB 155-172 cm
            // Size 2 (width 59, length 76): ideal for BB 65-85+ kg, TB 170-185+ cm
            let rec = '1';
            let desc = 'Boxy Oversized Fit (width 56 cm, length 74 cm)';

            if (weight > 65 || height > 172) {
                rec = '2';
                desc = 'Extra Baggy Oversized Fit (width 59 cm, length 76 cm)';
            }

            const sizeEl = document.getElementById('calcResultSize');
            if (sizeEl) sizeEl.innerHTML = `SIZE ${rec} <span class="text-xs font-mono text-zinc-300 font-normal">(${desc})</span>`;
        }

        function showNotification(msg) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-5 left-1/2 -translate-x-1/2 bg-zinc-900 border border-brand-accent/50 text-white text-xs font-mono px-4 py-2.5 rounded-full shadow-2xl z-50 flex items-center gap-2 animate-bounce';
            toast.innerHTML = `<span class="w-2 h-2 rounded-full bg-brand-accent"></span> ${msg}`;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateCartBadge();
        });
    </script>

    @stack('scripts')
</body>
</html>
