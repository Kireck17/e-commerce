<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
use Illuminate\Support\Facades\Route;


Route::get('/', Showlobby::class)->name('lobby');
Route::prefix('category')->group(function(){
    Route::name('category.')->group(function (){
        Route::get('/{category}/show',ShowCategory::class)
            ->name('show');
    });
});