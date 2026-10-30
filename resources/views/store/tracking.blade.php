@extends('layouts.app')

@section('title', 'Lacak Pesanan Pengiriman — TEASE DE AMOR')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-10">
    
    <div class="text-center space-y-3">
        <span class="text-xs font-mono text-brand-accent tracking-widest uppercase font-bold">✦ REAL-TIME ORDER TRACKING</span>
        <h1 class="font-syne text-3xl sm:text-4xl font-extrabold uppercase text-white">
            LACAK STATUS PESANAN KAMU
        </h1>
        <p class="text-zinc-400 font-space text-xs sm:text-sm">
            Masukkan Nomor Pesanan (contoh: <code>TDA-2026-8941</code>) atau nomor WhatsApp yang Anda daftarkan saat checkout di TEASE DE AMOR.
        </p>
    </div>

    <!-- Search Form -->
    <div class="bg-zinc-950 border border-white/15 rounded-2xl p-6 shadow-2xl">
        <form action="{{ route('store.tracking') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
            <input type="text" name="order_number" value="{{ request('order_number') }}" required placeholder="Masukkan Nomor Order (cth: TDA-2026-8941)" class="flex-grow bg-zinc-900 border border-white/15 rounded-xl px-4 py-3 text-xs sm:text-sm font-mono uppercase text-white focus:outline-none focus:border-brand-accent">
            <button type="submit" class="px-6 py-3.5 btn-tda rounded-xl text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <span>Cari Status</span>
            </button>
        </form>
    </div>

    @if($order)
    <!-- Order Result Card -->
    <div class="bg-zinc-950 border border-white/15 rounded-2xl p-6 sm:p-8 space-y-8 shadow-2xl">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-white/10 pb-4">
            <div>
                <span class="text-[10px] font-mono text-zinc-400 uppercase">Nomor Pesanan:</span>
                <div class="font-mono text-lg font-bold text-white">{{ $order->order_number }}</div>
            </div>
            <div class="text-left sm:text-right">
                <span class="text-[10px] font-mono text-zinc-400 uppercase">Ekspedisi:</span>
                <div class="text-xs font-mono font-bold text-brand-cream">{{ $order->courier }} (Resi: {{ $order->tracking_number ?? 'Sedang Diproses' }})</div>
            </div>
        </div>

        <!-- Tracking Timeline Stepper -->
        <div class="space-y-6">
            <h4 class="font-space font-bold text-xs uppercase tracking-wider text-zinc-300">Timeline Pengiriman:</h4>
            
            <div class="relative pl-6 space-y-6 before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-brand-maroon">
                
                <!-- Step 1: Placed -->
                <div class="relative">
                    <span class="absolute -left-6 top-1 w-4 h-4 rounded-full bg-emerald-500 border-2 border-zinc-950"></span>
                    <div class="text-xs font-space font-bold text-white">PESANAN DITERIMA & DIVERIFIKASI</div>
                    <div class="text-[11px] font-mono text-zinc-400">{{ $order->created_at->format('d M Y, H:i') }} WIB • Pembayaran via {{ $order->payment_method }}</div>
                </div>

                <!-- Step 2: Processing & QC -->
                <div class="relative">
                    <span class="absolute -left-6 top-1 w-4 h-4 rounded-full bg-emerald-500 border-2 border-zinc-950"></span>
                    <div class="text-xs font-space font-bold text-white">QUALITY CONTROL & PACKING</div>
                    <div class="text-[11px] font-mono text-zinc-400">Pemeriksaan jahitan kaos boxy, sticker pack, dan kemasan box TEASE DE AMOR.</div>
                </div>

                <!-- Step 3: Shipped -->
                <div class="relative">
                    <span class="absolute -left-6 top-1 w-4 h-4 rounded-full bg-brand-accent border-2 border-zinc-950 animate-pulse"></span>
                    <div class="text-xs font-space font-bold text-brand-accent">DISERAHKAN KE KURIR ({{ $order->courier }})</div>
                    <div class="text-[11px] font-mono text-zinc-300">Resi: <strong class="text-white">{{ $order->tracking_number }}</strong> • Paket dalam perjalanan ke alamat tujuan di {{ $order->city }}.</div>
                </div>

                <!-- Step 4: Delivered -->
                <div class="relative opacity-50">
                    <span class="absolute -left-6 top-1 w-4 h-4 rounded-full bg-zinc-700 border-2 border-zinc-950"></span>
                    <div class="text-xs font-space font-bold text-zinc-400">PAKET SAMPAI DI TUJUAN</div>
                    <div class="text-[11px] font-mono text-zinc-500">Estimasi tiba: 1-2 hari kerja ke {{ $order->city }}.</div>
                </div>

            </div>
        </div>

        <!-- Order Items in Tracking -->
        <div class="border-t border-white/10 pt-4 space-y-2">
            <span class="text-xs font-mono text-zinc-400 uppercase">Barang Dalam Pesanan Ini:</span>
            @foreach($order->items as $item)
            <div class="flex justify-between items-center text-xs font-mono py-1">
                <span class="text-white">{{ $item->product_name }} <strong class="text-brand-cream bg-brand-maroon/40 px-1.5 py-0.5 rounded text-[11px]">Size {{ $item->size }}</strong> x{{ $item->quantity }}</span>
                <span class="text-zinc-300 font-bold">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
            </div>
            @endforeach
        </div>

        <div class="text-center pt-2">
            <a href="{{ route('checkout.confirmation', $order->order_number) }}" class="inline-block text-xs font-mono text-brand-accent hover:underline">
                ✦ Buka Invoice Resmi Pesanan Ini
            </a>
        </div>

    </div>
    @elseif(request('order_number'))
    <div class="text-center py-12 bg-zinc-950 border border-white/10 rounded-2xl p-6 space-y-3">
        <svg class="w-12 h-12 text-zinc-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
        <p class="text-sm font-space text-white uppercase font-bold">Pesanan Tidak Ditemukan</p>
        <p class="text-xs font-mono text-zinc-400">Nomor order "{{ request('order_number') }}" belum terdaftar atau salah ketik. Coba gunakan contoh: <code>TDA-2026-8941</code></p>
    </div>
    @endif

</div>
@endsection
