<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
use App\Http\Livewire\Main\MensClothing;
use App\Http\Livewire\Product\Showproduct;
use Illuminate\Support\Facades\Route;


Route::get('/', Showlobby::class)->name('lobby');

Route::prefix('category')->group(function(){
    Route::name('category.')->group(function (){
        Route::get('/{category}/show',ShowCategory::class)
            ->name('show');
    });
});

Route::prefix('product')->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/{product}/showproduct',Showproduct::class
        )->name('showproduct');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Ruta para entrar al dashboard
    Route::get('/dashboard',Showlobby::class);
});

//vista prototipo para oferta
Route::get('/oferts', function () {
    return view('category.oferts');
})->name('oferts');

//vista prototipo para articulos mas vendidos
Route::get('/best', function () {
    return view('category.best-selling');
})->name('best');

//vista prototipo para carrito de compra
Route::get('/ShoppingCart', function () {
    return view('category.shopping-cart');
})->name('ShoppingCart');

//vista prototipo para metodo de pago
Route::get('/WayToPay', function () {
    return view('category.way-to-pay');
})->name('WayToPay');
//siguiente vista 2 para pago
Route::get('/pay', function () {
    return view('category.pay');
})->name('pay');
