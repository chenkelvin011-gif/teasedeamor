@extends('layouts.app')

@section('title', $product->name . ' — TEASE DE AMOR | IDR 200.000')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-xs font-mono text-zinc-400 mb-8">
        <a href="{{ route('store.index') }}" class="hover:text-white">STORE</a>
        <span>/</span>
        <span class="text-brand-accent uppercase font-bold">{{ $product->collection }}</span>
        <span>/</span>
        <span class="text-white truncate max-w-xs">{{ $product->name }}</span>
    </div>

    <!-- Product Layout Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Left: Image Gallery with Model Photos -->
        <div class="lg:col-span-7 space-y-4">
            <div class="aspect-[4/5] bg-zinc-950 rounded-3xl overflow-hidden border border-white/10 relative shadow-2xl">
                <img id="mainProductImg" src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                @if($product->badge)
                <div class="absolute top-4 left-4">
                    <span class="px-3.5 py-1.5 rounded-lg bg-black/85 backdrop-blur-md border border-white/20 text-xs font-mono font-bold text-white uppercase tracking-wider">
                        {{ $product->badge }}
                    </span>
                </div>
                @endif
            </div>

            <!-- Thumbnail Selector -->
            @if(!empty($product->gallery_urls) && count($product->gallery_urls) > 1)
            <div class="grid grid-cols-4 gap-3">
                @foreach($product->gallery_urls as $thumb)
                <button onclick="document.getElementById('mainProductImg').src = '{{ $thumb }}'" class="aspect-square rounded-xl overflow-hidden border border-white/10 hover:border-brand-accent transition-all bg-zinc-900">
                    <img src="{{ $thumb }}" alt="Thumbnail" class="w-full h-full object-cover">
                </button>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Right: Details, Size 1 & Size 2, Direct Checkout -->
        <div class="lg:col-span-5 space-y-6">
            
            <div class="border-b border-white/10 pb-6 space-y-3">
                <div class="flex items-center gap-3">
                    <span class="px-2.5 py-1 rounded bg-brand-maroon/30 border border-brand-accent/50 text-[11px] font-mono font-bold text-brand-cream uppercase">
                        {{ $product->collection }}
                    </span>
                    <span class="text-xs font-mono text-zinc-400">
                        Status: <strong class="text-green-400">Ready Stock</strong>
                    </span>
                </div>

                <h1 class="font-syne text-2xl sm:text-3xl font-extrabold uppercase text-white leading-tight">
                    {{ $product->name }}
                </h1>

                <p class="text-xs font-mono text-zinc-400">
                    {{ $product->tagline }}
                </p>

                <!-- Pricing -->
                <div class="flex items-center gap-4 pt-2">
                    <span class="font-mono text-3xl font-bold text-white text-glow">
                        {{ $product->formatted_price }}
                    </span>
                    <span class="font-mono text-sm text-zinc-500 line-through">
                        {{ $product->formatted_original_price }}
                    </span>
                    <span class="px-2.5 py-1 rounded bg-brand-maroon text-white font-mono text-xs font-bold">
                        Hemat Rp 49.000
                    </span>
                </div>
            </div>

            <!-- Color Info -->
            <div class="space-y-1.5">
                <span class="text-xs font-mono text-zinc-400 uppercase">Warna:</span>
                <div class="flex items-center gap-2">
                    <span class="w-4 h-4 rounded-full border border-white/30" style="background-color: {{ $product->color_code }}"></span>
                    <span class="text-sm font-space font-bold text-white">{{ $product->color_name }}</span>
                </div>
            </div>

            <!-- Size Selector (HANYA SIZE 1 DAN SIZE 2) -->
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-mono text-zinc-300 font-bold uppercase">PILIH UKURAN:</span>
                    <button onclick="openSizeGuideModal()" class="text-xs font-mono text-brand-accent hover:underline flex items-center gap-1">
                        Lihat Size Chart (cm)
                    </button>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <button type="button" 
                        onclick="setPdpSize('1')" 
                        id="pdpSizeBtn-1"
                        class="pdp-size-btn py-3.5 text-center rounded-xl border border-brand-accent bg-brand-maroon/40 text-sm font-mono font-bold text-white transition-all shadow-md">
                        SIZE 1 <span class="block text-[10px] font-normal text-zinc-300">LD 56 cm • PB 74 cm</span>
                    </button>
                    <button type="button" 
                        onclick="setPdpSize('2')" 
                        id="pdpSizeBtn-2"
                        class="pdp-size-btn py-3.5 text-center rounded-xl border border-white/15 bg-zinc-900 text-sm font-mono font-bold text-zinc-300 hover:border-white transition-all">
                        SIZE 2 <span class="block text-[10px] font-normal text-zinc-400">LD 59 cm • PB 76 cm</span>
                    </button>
                </div>
                <input type="hidden" id="pdpSelectedSize" value="1">

                <div id="pdpSizeNotice" class="p-3 rounded-xl bg-zinc-900/60 border border-white/10 text-xs font-mono text-zinc-300">
                    Size 1: width (lebar) 56 cm, length (panjang) 74 cm, sleeve 25 cm.
                </div>
            </div>

            <!-- Action Buttons: Direct Checkout & Add to Bag -->
            <div class="space-y-3 pt-2">
                <button type="button" 
                    onclick="handlePdpInstantCheckout()" 
                    class="w-full py-4 btn-tda rounded-xl text-sm font-bold uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    <span>CHECKOUT LANGSUNG (RP 200.000)</span>
                </button>

                <div class="grid grid-cols-2 gap-3">
                    <button type="button" 
                        onclick="handlePdpAddToBag()" 
                        class="py-3.5 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-white font-space text-xs font-bold uppercase border border-white/15 transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>+ Keranjang</span>
                    </button>

                    <a href="https://api.whatsapp.com/send?phone=6281265439810&text={{ urlencode('Halo Admin TEASE DE AMOR, saya ingin pesan ' . $product->name . ' (Rp 200.000)') }}" target="_blank" class="py-3.5 rounded-xl bg-emerald-950/40 hover:bg-emerald-900/40 text-emerald-400 font-space text-xs font-bold uppercase border border-emerald-500/30 transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 fill-emerald-400" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>Chat WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Description -->
            <div class="border-t border-white/10 pt-6 space-y-4">
                <div>
                    <h4 class="text-xs font-space font-bold uppercase text-white mb-2">Deskripsi Produk:</h4>
                    <p class="text-xs text-zinc-300 leading-relaxed font-sans">
                        {{ $product->description }}
                    </p>
                </div>

                <div class="p-4 rounded-xl bg-zinc-950 border border-white/10 space-y-2 text-xs font-mono">
                    <span class="text-brand-accent font-bold block uppercase">✦ Spesifikasi Material:</span>
                    <p class="text-zinc-300">{{ $product->fabric_details }}</p>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection

@push('scripts')
<script>
    function setPdpSize(sz) {
        document.getElementById('pdpSelectedSize').value = sz;
        ['1', '2'].forEach(s => {
            const btn = document.getElementById(`pdpSizeBtn-${s}`);
            if (btn) {
                if (s === sz) {
                    btn.className = 'pdp-size-btn py-3.5 text-center rounded-xl border border-brand-accent bg-brand-maroon/40 text-sm font-mono font-bold text-white transition-all shadow-md';
                } else {
                    btn.className = 'pdp-size-btn py-3.5 text-center rounded-xl border border-white/15 bg-zinc-900 text-sm font-mono font-bold text-zinc-300 hover:border-white transition-all';
                }
            }
        });
        const notice = document.getElementById('pdpSizeNotice');
        if (notice) {
            notice.textContent = (sz === '1') 
                ? 'Size 1: width 56 cm, length 74 cm, sleeve 25 cm (BB 45-65 kg)' 
                : 'Size 2: width 59 cm, length 76 cm, sleeve 27 cm (BB 65-85+ kg)';
        }
    }

    function handlePdpAddToBag() {
        const size = document.getElementById('pdpSelectedSize').value;
        addToCart(
            {{ $product->id }}, 
            '{{ addslashes($product->name) }}', 
            200000, 
            size, 
            '{{ addslashes($product->color_name) }}', 
            '{{ $product->image_url }}'
        );
    }

    function handlePdpInstantCheckout() {
        handlePdpAddToBag();
        openDirectCheckoutModal();
    }
</script>
@endpush
