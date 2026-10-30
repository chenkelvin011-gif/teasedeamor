@extends('layouts.app')

@section('title', 'Lookbook Model On Body — TEASE DE AMOR')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    
    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3">
        <span class="text-xs font-mono text-brand-accent tracking-widest uppercase font-bold">✦ EDITORIAL LOOKBOOK // 2026</span>
        <h1 class="font-syne text-4xl sm:text-5xl font-extrabold uppercase text-white">
            TEASE DE AMOR ON BODY
        </h1>
        <p class="text-zinc-400 font-space text-sm">
            Eksplorasi gaya outfit harian mahasiswa dan anak muda. Menampilkan koleksi <strong>Volume 1 (White)</strong> dan <strong>Volume 2 (Black)</strong> seharga Rp 200.000 (Size 1 & Size 2).
        </p>
    </div>

    <!-- Editorial Gallery Items with Real Model Images -->
    <div class="space-y-16">
        
        <!-- Look 1: Volume 2 Black (Cafe & Chair) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-zinc-950 p-6 sm:p-10 rounded-3xl border border-white/10 shadow-2xl">
            <div class="lg:col-span-7 grid grid-cols-2 gap-4">
                <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-900 border border-white/10">
                    <img src="/assets/model-vol2-cafe-back.jpg" alt="Model Volume 2 Cafe" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-900 border border-white/10">
                    <img src="/assets/model-vol2-chair-front.jpg" alt="Model Volume 2 Chair" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-5 space-y-4">
                <span class="text-xs font-mono text-brand-accent uppercase tracking-widest font-bold">LOOK 01 // PITCH BLACK</span>
                <h3 class="font-syne text-2xl font-bold uppercase text-white">VOLUME 2 — OVERSIZED TEE (BLACK)</h3>
                <p class="text-xs text-zinc-300 font-mono leading-relaxed">
                    "Tampilan depan minimalis dengan logo dada TDA, dan bagian belakang bernuansa graffiti berani 'TEASE ME FIRST OR I'LL TEASE U BETTER.' Dipadukan celana bahan lurus hitam dan kacamata hitam untuk gaya nongkrong café yang standout."
                </p>
                <div class="pt-2 text-xs font-mono text-zinc-400 space-y-1 border-t border-white/10">
                    <div>Pilihan Ukuran: <strong class="text-white">Size 1 (width 56) & Size 2 (width 59)</strong></div>
                    <div>Harga: <strong class="text-white">Rp 200.000</strong></div>
                </div>
                <a href="{{ route('store.product', 'tease-de-amor-oversized-tee-volume-2') }}" class="inline-block mt-2 px-6 py-3.5 btn-tda rounded-xl text-xs uppercase font-bold">
                    Beli Volume 2 (Rp 200.000)
                </a>
            </div>
        </div>

        <!-- Look 2: Volume 1 White (Box & Outdoor) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-zinc-950 p-6 sm:p-10 rounded-3xl border border-white/10 shadow-2xl">
            <div class="lg:col-span-5 space-y-4 order-2 lg:order-1">
                <span class="text-xs font-mono text-brand-accent uppercase tracking-widest font-bold">LOOK 02 // BROKEN WHITE</span>
                <h3 class="font-syne text-2xl font-bold uppercase text-white">VOLUME 1 — OVERSIZED TEE (WHITE)</h3>
                <p class="text-xs text-zinc-300 font-mono leading-relaxed">
                    "Nuansa broken white dengan tipografi fluffy puff maroon 'LOVE AMOR LOVE'. Sangat cocok dipadukan celana jeans biru muda untuk outfit santai kampus. Dilengkapi box packaging resmi TEASE DE AMOR."
                </p>
                <div class="pt-2 text-xs font-mono text-zinc-400 space-y-1 border-t border-white/10">
                    <div>Pilihan Ukuran: <strong class="text-white">Size 1 (width 56) & Size 2 (width 59)</strong></div>
                    <div>Harga: <strong class="text-white">Rp 200.000</strong></div>
                </div>
                <a href="{{ route('store.product', 'tease-de-amor-oversized-tee-volume-1') }}" class="inline-block mt-2 px-6 py-3.5 btn-tda rounded-xl text-xs uppercase font-bold">
                    Beli Volume 1 (Rp 200.000)
                </a>
            </div>
            <div class="lg:col-span-7 grid grid-cols-2 gap-4 order-1 lg:order-2">
                <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-900 border border-white/10">
                    <img src="/assets/model-vol1-box-back.jpg" alt="Model Volume 1 Box" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-zinc-900 border border-white/10">
                    <img src="/assets/model-vol1-outdoor.jpg" alt="Model Volume 1 Outdoor" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Action -->
    <div class="text-center pt-8">
        <a href="{{ route('store.index') }}#drops" class="inline-flex items-center gap-2 px-8 py-4 btn-tda rounded-xl text-sm tracking-wider">
            <span>KEMBALI KE STORE (SEMUA KAOS RP 200.000)</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>

</div>
@endsection
