<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Search\ShowSearch;
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
Route::prefix('search')->group(function(){
    Route::name('search.')->group(function(){
        Route::get('/search/show',ShowSearch::class)->name('show');
    });
});
Route::prefix('product')->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/product/showproduct',Showproduct::class)->name('showproduct');
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

//vista prototipo para articulos mas vendidos
Route::get('/woman', function () {
    return view('category.woman');
})->name('woman');
