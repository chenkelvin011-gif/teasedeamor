<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes - TEASE DE AMOR Streetwear Store (Calle De Larache Aesthetic)
|--------------------------------------------------------------------------
*/

// Catalog & Storefront
Route::get('/', [StoreController::class, 'index'])->name('store.index');
Route::get('/product/{slug}', [StoreController::class, 'show'])->name('store.product');
Route::get('/size-guide', [StoreController::class, 'sizeGuide'])->name('store.size-guide');
Route::get('/lookbook', [StoreController::class, 'lookbook'])->name('store.lookbook');
Route::post('/vote', [StoreController::class, 'vote'])->name('store.vote');

// Direct Checkout & Order Processing
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/order', [CheckoutController::class, 'processOrder'])->name('checkout.process');
Route::post('/checkout/check-voucher', [CheckoutController::class, 'checkVoucher'])->name('checkout.voucher');
Route::get('/order/{orderNumber}', [CheckoutController::class, 'orderConfirmation'])->name('checkout.confirmation');
Route::get('/tracking', [CheckoutController::class, 'tracking'])->name('store.tracking');
