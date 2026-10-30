@extends('layouts.app')

@section('title', 'TEASE DE AMOR — Official Store | Volume 1 (White) & Volume 2 (Black)')

@section('content')

<!-- HERO SECTION: TEASE DE AMOR OFFICIAL -->
<section class="relative min-h-[85vh] flex items-center justify-center border-b border-white/10 overflow-hidden bg-black">
    <!-- Background Hero with Real Model Photos -->
    <div class="absolute inset-0 z-0 opacity-40">
        <img src="/assets/model-vol2-cafe-back.jpg" alt="Model TEASE DE AMOR Volume 2" class="w-full h-full object-cover filter contrast-125 object-center">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0C] via-[#0A0A0C]/75 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#0A0A0C] via-transparent to-[#0A0A0C]"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center space-y-6">
        
        <!-- Status Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-burgundy/80 border border-brand-accent/50 text-xs font-mono tracking-widest uppercase text-white shadow-lg">
            <span class="w-2 h-2 rounded-full bg-red-500 animate-ping"></span>
            <span>OFFICIAL DROP • VOLUME 1 (WHITE) & VOLUME 2 (BLACK)</span>
        </div>

        <!-- Brand Headline -->
        <h1 class="font-syne text-4xl sm:text-6xl md:text-7xl font-extrabold uppercase tracking-tight text-white leading-none">
            TEASE DE AMOR<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-zinc-200 to-zinc-400">
                OVERSIZED T-SHIRT
            </span>
        </h1>

        <!-- Subtitle & Specs -->
        <p class="max-w-2xl mx-auto text-zinc-300 text-sm sm:text-base font-space font-medium leading-relaxed">
            Koleksi kaos boxy oversized eksklusif <strong>TEASE DE AMOR</strong>. Katun 16s/24s heavyweight 235 GSM berkarakter kokoh dan jatuh sempurna. Tersedia dalam <strong>Size 1</strong> dan <strong>Size 2</strong>.
        </p>

        <!-- Pricing Highlight -->
        <div class="flex items-center justify-center gap-4 py-2">
            <div class="px-5 py-2.5 rounded-xl bg-zinc-900/90 border border-white/15 inline-flex items-center gap-3 shadow-xl">
                <span class="text-xs font-mono text-zinc-400 line-through">Rp 249.000</span>
                <span class="font-mono text-2xl font-bold text-white text-glow">Rp 200.000</span>
                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-brand-maroon text-white font-bold">HEMAT 20%</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="#drops" class="w-full sm:w-auto px-8 py-4 btn-tda rounded-xl text-sm tracking-wider flex items-center justify-center gap-2">
                <span>LIHAT VOLUME 1 & VOLUME 2</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
            <button onclick="openSizeGuideModal()" class="w-full sm:w-auto px-7 py-4 btn-tda-outline rounded-xl text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span>SIZE CHART (SIZE 1 & 2)</span>
            </button>
            <a href="#lookbook-models" class="w-full sm:w-auto px-7 py-4 btn-tda-outline rounded-xl text-sm flex items-center justify-center gap-2">
                <span>FOTO MODEL ON BODY</span>
            </a>
        </div>

        <!-- Tech Specs Micro-bar -->
        <div class="pt-8 border-t border-white/10 max-w-3xl mx-auto grid grid-cols-2 sm:grid-cols-4 gap-4 text-left font-mono text-[11px] text-zinc-400">
            <div>
                <span class="text-zinc-500 block uppercase">Bahan:</span>
                <span class="text-white font-bold">100% Heavy Cotton 235 GSM</span>
            </div>
            <div>
                <span class="text-zinc-500 block uppercase">Pilihan Ukuran:</span>
                <span class="text-brand-cream font-bold">Size 1 & Size 2</span>
            </div>
            <div>
                <span class="text-zinc-500 block uppercase">Harga Resmi:</span>
                <span class="text-white font-bold">Semua Rp 200.000</span>
            </div>
            <div>
                <span class="text-zinc-500 block uppercase">Direct Checkout:</span>
                <span class="text-green-400 font-bold">QRIS • WA Instant</span>
            </div>
        </div>

    </div>
</section>

<!-- MAIN PRODUCT CATALOG: VOLUME 1 (WHITE) & VOLUME 2 (BLACK) -->
<section id="drops" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    
    <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
        <span class="text-xs font-mono text-brand-accent uppercase tracking-widest font-bold">✦ KOLEKSI RESMI TEASE DE AMOR</span>
        <h2 class="font-syne text-3xl sm:text-4xl font-extrabold uppercase text-white">
            VOLUME 1 (PUTIH) & VOLUME 2 (HITAM)
        </h2>
        <p class="text-xs sm:text-sm text-zinc-400 font-space">
            Hanya 2 volume rilisan resmi. Kaos putih Volume 1 dan kaos hitam Volume 2 seharga Rp 200.000 dengan pilihan Size 1 dan Size 2.
        </p>
    </div>

    <!-- 2 Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
        @foreach($products as $product)
        <div id="{{ $product->collection === 'Volume 1' ? 'vol-1' : 'vol-2' }}" class="group bg-zinc-950 border border-white/15 rounded-3xl overflow-hidden hover:border-brand-accent transition-all duration-300 flex flex-col justify-between shadow-2xl">
            
            <!-- Product Image Carousel/Thumbnails with Model Views -->
            <div class="relative aspect-[4/5] bg-zinc-900 overflow-hidden">
                <img id="cardImg-{{ $product->id }}" src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter contrast-105">
                
                <!-- Badge -->
                <div class="absolute top-4 left-4">
                    <span class="px-3.5 py-1.5 rounded-lg bg-black/85 backdrop-blur-md border border-white/20 text-xs font-mono tracking-wider font-bold text-white uppercase">
                        {{ $product->badge }}
                    </span>
                </div>

                <!-- Stock Counter -->
                <div class="absolute top-4 right-4">
                    <span class="px-3 py-1 rounded-lg bg-brand-maroon/90 text-xs font-mono font-bold text-white shadow-md">
                        Rp 200.000
                    </span>
                </div>

                <!-- Secondary Angles Selector Pill at Bottom of Image -->
                @if(!empty($product->gallery_urls))
                <div class="absolute bottom-3 left-3 right-3 flex items-center justify-center gap-2 bg-black/60 backdrop-blur-md p-1.5 rounded-xl border border-white/10">
                    @foreach($product->gallery_urls as $idx => $gUrl)
                    <button type="button" 
                        onclick="document.getElementById('cardImg-{{ $product->id }}').src = '{{ $gUrl }}'" 
                        class="px-2.5 py-1 rounded-lg bg-zinc-900/80 hover:bg-white hover:text-black text-white text-[10px] font-mono font-bold transition-all border border-white/10">
                        Foto {{ $idx + 1 }}
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Info & Size Selection (Size 1 & Size 2) -->
            <div class="p-6 sm:p-8 flex-grow flex flex-col justify-between space-y-5">
                <div>
                    <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-2">
                        <span class="uppercase tracking-wider text-brand-accent font-bold">{{ $product->collection }}</span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-3 h-3 rounded-full border border-white/20 inline-block" style="background-color: {{ $product->color_code }}"></span>
                            {{ $product->color_name }}
                        </span>
                    </div>

                    <h3 class="font-space font-bold text-lg sm:text-xl text-white uppercase group-hover:text-brand-cream transition-colors">
                        <a href="{{ route('store.product', $product->slug) }}">
                            {{ $product->name }}
                        </a>
                    </h3>

                    <p class="text-xs text-zinc-400 font-mono mt-1">
                        {{ $product->tagline }}
                    </p>

                    <div class="flex items-center gap-3 mt-3">
                        <span class="font-mono text-2xl font-bold text-white text-glow">
                            Rp 200.000
                        </span>
                        <span class="font-mono text-xs text-zinc-500 line-through">
                            Rp 249.000
                        </span>
                        <span class="px-2 py-0.5 rounded bg-brand-maroon/60 border border-brand-accent/40 text-[10px] font-mono text-white">
                            Hemat Rp 49.000
                        </span>
                    </div>
                </div>

                <!-- Size Selection (HANYA SIZE 1 DAN SIZE 2) -->
                <div class="space-y-2 pt-3 border-t border-white/10">
                    <div class="flex items-center justify-between text-xs font-mono text-zinc-400">
                        <span class="font-bold text-white">PILIH SIZE:</span>
                        <button onclick="openSizeGuideModal()" class="text-brand-accent hover:underline flex items-center gap-1">
                            Lihat Size Chart (cm)
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3" id="sizeSelector-{{ $product->id }}">
                        <button type="button" 
                            onclick="selectCardSize({{ $product->id }}, '1')"
                            data-size="1"
                            class="size-pill-{{ $product->id }} py-3 text-center rounded-xl border border-brand-accent text-white bg-brand-maroon/40 font-mono font-bold text-sm transition-all shadow-md">
                            SIZE 1 <span class="block text-[10px] font-normal text-zinc-300">LD 56 cm • PB 74 cm</span>
                        </button>

                        <button type="button" 
                            onclick="selectCardSize({{ $product->id }}, '2')"
                            data-size="2"
                            class="size-pill-{{ $product->id }} py-3 text-center rounded-xl border border-white/15 bg-zinc-900 text-zinc-300 hover:border-white hover:text-white font-mono font-bold text-sm transition-all">
                            SIZE 2 <span class="block text-[10px] font-normal text-zinc-400">LD 59 cm • PB 76 cm</span>
                        </button>
                    </div>
                    <input type="hidden" id="selectedSize-{{ $product->id }}" value="1">
                </div>

                <!-- Action Buttons: Add to Bag & Direct Checkout -->
                <div class="grid grid-cols-2 gap-3 pt-2">
                    <button type="button" 
                        onclick="handleCardAddToCart({{ $product->id }}, '{{ addslashes($product->name) }}', 200000, '{{ addslashes($product->color_name) }}', '{{ $product->image_url }}')" 
                        class="py-3.5 px-4 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-white font-space text-xs font-bold uppercase border border-white/15 transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>+ Keranjang</span>
                    </button>

                    <button type="button" 
                        onclick="handleCardInstantCheckout({{ $product->id }}, '{{ addslashes($product->name) }}', 200000, '{{ addslashes($product->color_name) }}', '{{ $product->image_url }}')" 
                        class="py-3.5 px-4 rounded-xl btn-tda text-xs font-bold uppercase transition-all flex items-center justify-center gap-2 shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        <span>Beli Langsung</span>
                    </button>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</section>

<!-- REAL MODEL ON-BODY SHOWCASE SECTION -->
<section id="lookbook-models" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/10">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div>
            <span class="text-xs font-mono text-brand-accent tracking-widest uppercase font-bold">✦ REAL MODEL ON BODY // OOTD TEASE DE AMOR</span>
            <h2 class="font-syne text-3xl sm:text-4xl font-extrabold uppercase text-white mt-1">
                FOTO MODEL VOLUME 1 & VOLUME 2
            </h2>
        </div>
        <p class="text-xs sm:text-sm text-zinc-400 font-space max-w-md">
            Lihat bagaimana kaos oversized TEASE DE AMOR jatuh di badan saat dipakai beraktivitas harian, nongkrong di café, dan santai di luar ruangan.
        </p>
    </div>

    <!-- 4 Real Model Photos Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Model 1: Volume 2 Cafe Back -->
        <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-950 border border-white/10 shadow-xl">
            <img src="/assets/model-vol2-cafe-back.jpg" alt="Model Volume 2 Cafe Back" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent flex flex-col justify-end p-5">
                <span class="text-[10px] font-mono text-brand-accent uppercase font-bold tracking-widest">VOLUME 2 // BLACK</span>
                <h4 class="font-space font-bold text-sm text-white uppercase">CAFE BACK VIEW</h4>
                <p class="text-[11px] text-zinc-300 font-mono mt-0.5">Grafis: "TEASE ME FIRST OR I'LL TEASE U BETTER."</p>
            </div>
        </div>

        <!-- Model 2: Volume 2 Chair Front -->
        <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-950 border border-white/10 shadow-xl">
            <img src="/assets/model-vol2-chair-front.jpg" alt="Model Volume 2 Front View" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent flex flex-col justify-end p-5">
                <span class="text-[10px] font-mono text-brand-accent uppercase font-bold tracking-widest">VOLUME 2 // BLACK</span>
                <h4 class="font-space font-bold text-sm text-white uppercase">FRONT CHEST EMBLEM</h4>
                <p class="text-[11px] text-zinc-300 font-mono mt-0.5">Minimalist TDA Chest Logo & Boxy Drop Shoulder</p>
            </div>
        </div>

        <!-- Model 3: Volume 1 Box Back -->
        <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-950 border border-white/10 shadow-xl">
            <img src="/assets/model-vol1-box-back.jpg" alt="Model Volume 1 Holding Box" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent flex flex-col justify-end p-5">
                <span class="text-[10px] font-mono text-brand-accent uppercase font-bold tracking-widest">VOLUME 1 // WHITE</span>
                <h4 class="font-space font-bold text-sm text-white uppercase">PACKAGING & BACK PRINT</h4>
                <p class="text-[11px] text-zinc-300 font-mono mt-0.5">Fluffy Maroon "LOVE AMOR LOVE" + Box Kemasan</p>
            </div>
        </div>

        <!-- Model 4: Volume 1 Outdoor -->
        <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-950 border border-white/10 shadow-xl">
            <img src="/assets/model-vol1-outdoor.jpg" alt="Model Volume 1 Outdoor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent flex flex-col justify-end p-5">
                <span class="text-[10px] font-mono text-brand-accent uppercase font-bold tracking-widest">VOLUME 1 // WHITE</span>
                <h4 class="font-space font-bold text-sm text-white uppercase">OUTDOOR SUNLIGHT</h4>
                <p class="text-[11px] text-zinc-300 font-mono mt-0.5">Broken White Combed Cotton dengan Jeans Biru</p>
            </div>
        </div>

    </div>
</section>

<!-- OFFICIAL SIZE CHART SECTION (SIZE 1 & SIZE 2) -->
<section id="size-chart-section" class="bg-zinc-950 border-t border-white/10 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
            <span class="text-xs font-mono tracking-widest text-brand-accent uppercase font-bold">✦ SPESIFIKASI UKURAN RESMI</span>
            <h2 class="font-syne text-3xl sm:text-4xl font-extrabold uppercase text-white">
                SIZE CHART: SIZE 1 & SIZE 2
            </h2>
            <p class="text-xs sm:text-sm text-zinc-400 font-space">
                Data ukuran resmi TEASE DE AMOR. Mengikuti ukuran pola boxy drop-shoulder.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center max-w-5xl mx-auto">
            
            <!-- Real Size Chart Image Display -->
            <div class="lg:col-span-6 bg-black border border-white/10 rounded-2xl p-4 shadow-xl text-center">
                <img src="/assets/vol2-sizechart.jpg" alt="Size Chart TEASE DE AMOR" class="w-full h-auto rounded-xl mx-auto">
                <p class="text-[11px] font-mono text-zinc-500 mt-2">* toleransi ukuran 1-2cm normal</p>
            </div>

            <!-- Table & Fit Finder -->
            <div class="lg:col-span-6 space-y-6">
                
                <div class="border border-white/10 rounded-2xl overflow-hidden bg-black">
                    <table class="w-full text-left text-xs font-mono">
                        <thead class="bg-[#550B11] text-white uppercase text-xs">
                            <tr>
                                <th class="p-4 border-r border-white/10">size</th>
                                <th class="p-4 border-r border-white/10">width</th>
                                <th class="p-4 border-r border-white/10">lenght</th>
                                <th class="p-4">sleeve</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10 text-zinc-200">
                            <tr class="hover:bg-white/5 transition-colors">
                                <td class="p-4 font-bold text-white font-space text-base border-r border-white/10">1</td>
                                <td class="p-4 font-bold text-white border-r border-white/10">56 cm</td>
                                <td class="p-4 border-r border-white/10">74 cm</td>
                                <td class="p-4">25 cm</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors bg-white/[0.02]">
                                <td class="p-4 font-bold text-white font-space text-base border-r border-white/10">2</td>
                                <td class="p-4 font-bold text-white border-r border-white/10">59 cm</td>
                                <td class="p-4 border-r border-white/10">76 cm</td>
                                <td class="p-4">27 cm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Info Box -->
                <div class="p-5 rounded-2xl bg-zinc-900 border border-brand-maroon/50 space-y-3 text-xs font-mono">
                    <h4 class="font-space font-bold uppercase text-white flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-brand-accent"></span>
                        Panduan Memilih Size:
                    </h4>
                    <div class="space-y-1.5 text-zinc-300">
                        <div>✦ <strong>Size 1:</strong> Lebar 56 cm | Panjang 74 cm (Rekomendasi TB 155–172 cm / BB 45–65 kg)</div>
                        <div>✦ <strong>Size 2:</strong> Lebar 59 cm | Panjang 76 cm (Rekomendasi TB 170–185+ cm / BB 65–85+ kg)</div>
                    </div>
                    <div class="pt-2">
                        <button onclick="document.getElementById('drops').scrollIntoView({behavior: 'smooth'})" class="w-full py-3 btn-tda rounded-xl text-xs font-bold uppercase">
                            Beli Sekarang (Semua Rp 200.000)
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
    function selectCardSize(productId, size) {
        document.getElementById(`selectedSize-${productId}`).value = size;
        const pills = document.querySelectorAll(`.size-pill-${productId}`);
        pills.forEach(pill => {
            if (pill.getAttribute('data-size') === size) {
                pill.className = `size-pill-${productId} py-3 text-center rounded-xl border border-brand-accent text-white bg-brand-maroon/40 font-mono font-bold text-sm transition-all shadow-md`;
            } else {
                pill.className = `size-pill-${productId} py-3 text-center rounded-xl border border-white/15 bg-zinc-900 text-zinc-300 hover:border-white hover:text-white font-mono font-bold text-sm transition-all`;
            }
        });
    }

    function handleCardAddToCart(productId, name, price, color, image) {
        const size = document.getElementById(`selectedSize-${productId}`)?.value || '1';
        addToCart(productId, name, price, size, color, image);
    }

    function handleCardInstantCheckout(productId, name, price, color, image) {
        const size = document.getElementById(`selectedSize-${productId}`)?.value || '1';
        addToCart(productId, name, price, size, color, image);
        openDirectCheckoutModal();
    }
</script>
@endpush
