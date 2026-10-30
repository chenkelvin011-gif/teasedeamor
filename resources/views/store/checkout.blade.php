@extends('layouts.app')

@section('title', 'Direct Checkout — TEASE DE AMOR')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <div class="mb-8">
        <span class="text-xs font-mono text-brand-accent tracking-widest uppercase font-bold">✦ TEASE DE AMOR ORDER SYSTEM</span>
        <h1 class="font-syne text-3xl sm:text-4xl font-extrabold uppercase text-white mt-1">CHECKOUT PESANAN</h1>
        <p class="text-xs text-zinc-400 font-mono mt-1">Selesaikan pesanan kaos TEASE DE AMOR langsung dari website.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left: Form -->
        <div class="lg:col-span-7 bg-zinc-950 border border-white/10 rounded-2xl p-6 sm:p-8 space-y-6">
            <form onsubmit="submitDirectOrder(event)" class="space-y-6">
                <!-- 1: Customer Contact -->
                <div class="space-y-3">
                    <h3 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">1</span>
                        Data Diri Pembeli
                    </h3>
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
                        <label class="block text-[11px] font-mono text-zinc-400 mb-1">Email</label>
                        <input type="email" id="custEmail" placeholder="nama@email.com" value="gisel@gmail.com" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-brand-accent">
                    </div>
                </div>

                <!-- 2: Address -->
                <div class="space-y-3 border-t border-white/10 pt-5">
                    <h3 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">2</span>
                        Alamat Pengiriman
                    </h3>
                    <div>
                        <label class="block text-[11px] font-mono text-zinc-400 mb-1">Alamat Lengkap *</label>
                        <textarea id="custAddress" required rows="2" class="w-full bg-zinc-900 border border-white/15 rounded-lg px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-accent">Jl. Dr. Mansyur No. 42B, Medan Selayang</textarea>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <div>
                            <label class="block text-[11px] font-mono text-zinc-400 mb-1">Kota / Kab *</label>
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
                        <label class="block text-[11px] font-mono text-zinc-400 mb-1.5">Pilihan Kurir *</label>
                        <div class="space-y-2">
                            <label class="flex items-center justify-between p-3 rounded-lg border border-brand-maroon bg-brand-maroon/20 cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="courierOption" value="J&T Express" checked onchange="updateModalCourier(15000, 'J&T Express')">
                                    <span class="text-xs font-bold text-white">J&T Express</span>
                                </div>
                                <span class="font-mono text-xs text-zinc-300">Rp 15.000</span>
                            </label>
                            <label class="flex items-center justify-between p-3 rounded-lg border border-white/10 bg-zinc-900 cursor-pointer hover:border-white/20">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="courierOption" value="SiCepat BEST" onchange="updateModalCourier(18000, 'SiCepat BEST')">
                                    <span class="text-xs font-bold text-white">SiCepat BEST</span>
                                </div>
                                <span class="font-mono text-xs text-zinc-300">Rp 18.000</span>
                            </label>
                            <label class="flex items-center justify-between p-3 rounded-lg border border-white/10 bg-zinc-900 cursor-pointer hover:border-white/20">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="courierOption" value="JNE Reguler" onchange="updateModalCourier(16000, 'JNE Reguler')">
                                    <span class="text-xs font-bold text-white">JNE Reguler</span>
                                </div>
                                <span class="font-mono text-xs text-zinc-300">Rp 16.000</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- 3: Payment -->
                <div class="space-y-3 border-t border-white/10 pt-5">
                    <h3 class="text-xs font-space font-bold uppercase tracking-wider text-zinc-300 flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-brand-maroon text-white flex items-center justify-center text-[10px]">3</span>
                        Metode Pembayaran
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="p-3.5 rounded-xl border border-brand-accent bg-brand-maroon/20 cursor-pointer block">
                            <input type="radio" name="paymentOption" value="QRIS" checked class="sr-only">
                            <div class="text-xs font-bold text-white flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-green-400"></span> QRIS Dinamis
                            </div>
                            <div class="text-[10px] text-zinc-400 mt-1">BCA, GoPay, OVO, Dana</div>
                        </label>
                        <label class="p-3.5 rounded-xl border border-white/10 bg-zinc-900 cursor-pointer block hover:border-white/20">
                            <input type="radio" name="paymentOption" value="BCA Virtual Account" class="sr-only">
                            <div class="text-xs font-bold text-white">BCA VA</div>
                            <div class="text-[10px] text-zinc-400 mt-1">Transfer Otomatis</div>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="btnSubmitOrderPage" class="w-full py-4 btn-tda rounded-xl text-sm font-bold uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl">
                    <span>KONFIRMASI PESANAN SEKARANG</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </form>
        </div>

        <!-- Right: Summary -->
        <div class="lg:col-span-5 bg-zinc-950 border border-white/10 rounded-2xl p-6 space-y-6 sticky top-28 shadow-xl">
            <h3 class="font-space font-bold text-sm uppercase tracking-wider text-white border-b border-white/10 pb-3 flex items-center justify-between">
                <span>Ringkasan Belanja</span>
                <span class="text-xs font-mono text-zinc-400" id="checkoutPageItemCount">1 Item</span>
            </h3>

            <div id="checkoutPageItemsList" class="space-y-3"></div>

            <div class="pt-4 border-t border-white/10 space-y-2">
                <label class="text-[11px] font-mono text-zinc-400 uppercase">Gunakan Voucher:</label>
                <div class="flex gap-2">
                    <input type="text" id="pageVoucherInput" placeholder="KODE (cth: FREESHIP)" class="flex-grow bg-zinc-900 border border-white/15 rounded-lg px-3 py-2 text-xs font-mono uppercase text-white focus:outline-none focus:border-brand-accent">
                    <button type="button" onclick="applyPageVoucher()" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-white font-space text-xs font-bold rounded-lg border border-white/10">Pakai</button>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="border-t border-white/10 pt-4 space-y-2 text-xs font-mono">
                <div class="flex justify-between text-zinc-400">
                    <span>Subtotal Kaos:</span>
                    <span id="pageSubtotalText" class="text-white">Rp 200.000</span>
                </div>
                <div class="flex justify-between text-zinc-400">
                    <span>Ongkos Kirim:</span>
                    <span id="pageShippingText" class="text-white">Rp 15.000</span>
                </div>
                <div id="pageDiscountRow" class="flex justify-between text-brand-accent hidden">
                    <span>Diskon:</span>
                    <span id="pageDiscountText">- Rp 0</span>
                </div>
                <div class="flex justify-between text-base font-bold text-white border-t border-white/10 pt-3 font-space">
                    <span>Total Bayar:</span>
                    <span id="pageTotalText" class="font-mono text-brand-cream text-lg">Rp 215.000</span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (cart.length === 0) {
            cart.push({
                product_id: 2,
                name: 'TEASE DE AMOR — OVERSIZED TEE VOLUME 2',
                price: 200000,
                size: '1',
                color: 'Pitch Black',
                image: '/assets/model-vol2-cafe-back.jpg',
                quantity: 1
            });
            saveCart();
        }
        renderCheckoutPageSummary();
    });

    function renderCheckoutPageSummary() {
        const container = document.getElementById('checkoutPageItemsList');
        const countEl = document.getElementById('checkoutPageItemCount');
        const subtotalEl = document.getElementById('pageSubtotalText');
        const totalEl = document.getElementById('pageTotalText');
        if (!container) return;

        let html = '';
        let subtotal = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            html += `
                <div class="flex gap-3 items-center bg-zinc-900/60 p-2.5 rounded-xl border border-white/5">
                    <img src="${item.image}" class="w-12 h-12 rounded-lg object-cover bg-black">
                    <div class="flex-grow min-w-0">
                        <div class="text-xs font-space font-bold uppercase truncate text-white">${item.name}</div>
                        <div class="text-[11px] font-mono text-zinc-400"><span class="bg-brand-maroon/50 px-1.5 py-0.5 rounded text-white font-bold">Size ${item.size}</span> • Qty: ${item.quantity}</div>
                    </div>
                    <div class="font-mono text-xs font-bold text-white">${formatRupiah(itemTotal)}</div>
                </div>
            `;
        });

        container.innerHTML = html;
        if (countEl) countEl.textContent = `${cart.length} Item`;
        if (subtotalEl) subtotalEl.textContent = formatRupiah(subtotal);

        let discount = 0;
        if (appliedVoucher) {
            if (appliedVoucher.type === 'fixed') discount = Math.min(appliedVoucher.amount, subtotal);
            else if (appliedVoucher.type === 'free_shipping') discount = selectedCourierCost;
            else if (appliedVoucher.type === 'percent') discount = Math.floor(subtotal * appliedVoucher.amount);
            
            document.getElementById('pageDiscountRow')?.classList.remove('hidden');
            document.getElementById('pageDiscountText').textContent = `- ${formatRupiah(discount)}`;
        }

        const total = Math.max(0, (subtotal + selectedCourierCost) - discount);
        if (totalEl) totalEl.textContent = formatRupiah(total);
    }

    function applyPageVoucher() {
        const input = document.getElementById('pageVoucherInput');
        if (!input) return;
        document.getElementById('cartVoucherInput').value = input.value;
        applyCartVoucher().then(() => {
            renderCheckoutPageSummary();
        });
    }
</script>
@endpush
