<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Main\Showlobby;

Route::get('/', Showlobby::class)->name('lobby');

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