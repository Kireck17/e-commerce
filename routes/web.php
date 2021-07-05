<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
/*
use App\Http\Livewire\Product\ShowSearch;
*/
use App\Http\Livewire\Main\MensClothing;
use App\Http\Livewire\Product\Showproduct;
use App\Http\Livewire\Admin\Prueba;
use App\Http\Livewire\Admin\Create;
use Illuminate\Support\Facades\Route;


Route::get('/', Showlobby::class)->name('lobby');


//vista admin
Route::get('/nav',Prueba::class)->name('nav');


Route::prefix('category')->group(function(){
    Route::name('category.')->group(function (){
        Route::get('/{category}/show',ShowCategory::class)
            ->name('show');
    });
});

Route::prefix('product')->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/{product}/showproduct',Showproduct::class)->name('showproduct');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::name('admin.')->group(function(){
            Route::get('/create',Create::class
            )->name('create');
        });
    });
});


/*
Route::prefix('search')->group(function(){
    Route::name('search.')->group(function(){
        Route::get('/search/show',ShowSearch::class)->name('show');

    });
});
*/



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Ruta para entrar al dashboard
    Route::get('/dashboard',Showlobby::class);
});



//vista prototipo para oferta


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

