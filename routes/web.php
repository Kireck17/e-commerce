<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
<<<<<<< HEAD
use App\Http\Livewire\Main\MensClothing;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> a6a908970292d1f79faa4535318af81bb5cbbadd



Route::get('/', Showlobby::class)->name('lobby');
Route::prefix('category')->group(function(){
    Route::name('category.')->group(function (){
        Route::get('/{category}/show',ShowCategory::class)
            ->name('show');
    });
});
