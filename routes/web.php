<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Main\Showlobby;

Route::get('/', Showlobby::class)->name('lobby');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Ruta para entrar al dashboard
    Route::get('/dashboard',Showlobby::class);
});