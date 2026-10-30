@extends('layouts.app')

@section('title', 'Official Size Chart — TEASE DE AMOR | Size 1 & Size 2')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    
    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3">
        <span class="text-xs font-mono text-brand-accent tracking-widest uppercase font-bold">✦ OFFICIAL SIZE GUIDE & CHART</span>
        <h1 class="font-syne text-4xl sm:text-5xl font-extrabold uppercase text-white">
            PANDUAN UKURAN: SIZE 1 & SIZE 2
        </h1>
        <p class="text-zinc-400 font-space text-sm">
            Koleksi kaos <strong>TEASE DE AMOR</strong> menggunakan 2 ukuran resmi: <strong>Size 1</strong> dan <strong>Size 2</strong>. Potongan boxy drop-shoulder dengan toleransi normal 1–2 cm.
        </p>
    </div>

    <!-- Official Size Chart Graphic from User Uploads -->
    <div class="bg-black border border-white/15 rounded-3xl p-6 sm:p-10 text-center shadow-2xl space-y-4">
        <h3 class="font-space font-bold uppercase text-white text-sm">Diagram & Gambar Size Chart Resmi:</h3>
        <img src="/assets/vol2-sizechart.jpg" alt="Size Chart TEASE DE AMOR" class="w-full max-w-3xl h-auto rounded-2xl mx-auto border border-white/10 shadow-lg">
        <p class="text-xs font-mono text-zinc-400">* toleransi ukuran 1-2cm normal</p>
    </div>

    <!-- Measurement Table -->
    <div class="bg-zinc-950 border border-white/10 rounded-2xl overflow-hidden shadow-2xl">
        <div class="p-6 border-b border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-[#550B11]/30">
            <div>
                <h3 class="font-space font-bold text-sm uppercase text-white">Tabel Spesifikasi Ukuran (Centimeter)</h3>
                <p class="text-xs font-mono text-zinc-400">Semua Kaos (Volume 1 & Volume 2) Berharga Tetap Rp 200.000</p>
            </div>
            <div class="text-xs font-mono text-brand-cream">
                Harga Resmi: <strong>Rp 200.000</strong>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm font-mono">
                <thead class="bg-[#550B11] text-white uppercase text-xs">
                    <tr>
                        <th class="p-4 sm:p-5 font-bold border-r border-white/10">size</th>
                        <th class="p-4 sm:p-5 border-r border-white/10">width (lebar dada)</th>
                        <th class="p-4 sm:p-5 border-r border-white/10">lenght (panjang baju)</th>
                        <th class="p-4 sm:p-5 border-r border-white/10">sleeve (panjang lengan)</th>
                        <th class="p-4 sm:p-5">Rekomendasi Pemakai</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10 text-zinc-200">
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="p-4 sm:p-5 font-space font-bold text-white text-lg border-r border-white/10">1</td>
                        <td class="p-4 sm:p-5 font-bold text-white border-r border-white/10">56 cm</td>
                        <td class="p-4 sm:p-5 border-r border-white/10">74 cm</td>
                        <td class="p-4 sm:p-5 border-r border-white/10">25 cm</td>
                        <td class="p-4 sm:p-5 text-brand-cream font-bold">TB 155 - 172 cm • BB 45 - 65 kg (Boxy Fit Pas)</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition-colors bg-white/[0.02]">
                        <td class="p-4 sm:p-5 font-space font-bold text-white text-lg border-r border-white/10">2</td>
                        <td class="p-4 sm:p-5 font-bold text-white border-r border-white/10">59 cm</td>
                        <td class="p-4 sm:p-5 border-r border-white/10">76 cm</td>
                        <td class="p-4 sm:p-5 border-r border-white/10">27 cm</td>
                        <td class="p-4 sm:p-5 text-brand-cream font-bold">TB 170 - 185+ cm • BB 65 - 85+ kg (Extra Baggy Oversized)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Diagram Explanation -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl bg-zinc-950 border border-white/10 space-y-2">
            <span class="w-7 h-7 rounded-lg bg-brand-maroon flex items-center justify-center font-mono font-bold text-white text-xs">01</span>
            <h4 class="font-space font-bold text-sm uppercase text-white">WIDTH (LEBAR DADA)</h4>
            <p class="text-xs text-zinc-400 font-sans leading-relaxed">
                Diukur melintang dari ujung jahitan bawah ketiak kiri ke ketiak kanan. Size 1 berukuran 56 cm, Size 2 berukuran 59 cm.
            </p>
        </div>

        <div class="p-6 rounded-2xl bg-zinc-950 border border-white/10 space-y-2">
            <span class="w-7 h-7 rounded-lg bg-brand-maroon flex items-center justify-center font-mono font-bold text-white text-xs">02</span>
            <h4 class="font-space font-bold text-sm uppercase text-white">LENGHT (PANJANG BAJU)</h4>
            <p class="text-xs text-zinc-400 font-sans leading-relaxed">
                Diukur dari titik bahu tertinggi di samping kerah leher lurus ke bawah hingga ujung keliman baju. Size 1 = 74 cm, Size 2 = 76 cm.
            </p>
        </div>

        <div class="p-6 rounded-2xl bg-zinc-950 border border-white/10 space-y-2">
            <span class="w-7 h-7 rounded-lg bg-brand-maroon flex items-center justify-center font-mono font-bold text-white text-xs">03</span>
            <h4 class="font-space font-bold text-sm uppercase text-white">SLEEVE (PANJANG LENGAN)</h4>
            <p class="text-xs text-zinc-400 font-sans leading-relaxed">
                Potongan bahu drop-shoulder dengan lengan longgar yang menutup siku saat beraktivitas santai.
            </p>
        </div>
    </div>

    <!-- CTA Back to Shop -->
    <div class="text-center pt-6">
        <a href="{{ route('store.index') }}#drops" class="inline-flex items-center gap-2 px-8 py-4 btn-tda rounded-xl text-sm tracking-wider">
            <span>PILIH VOLUME 1 ATAU VOLUME 2 (RP 200.000)</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>

</div>
@endsection
