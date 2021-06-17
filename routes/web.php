<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Main\Showlobby;
use App\Http\Livewire\Main\MensClothing;

Route::get('/', Showlobby::class)->name('lobby');


/*
Route::prefix('categoria')->group(function (){
	
	Route::name('categoria.')->group(function (){
		
        Route::get('/', MensClothing::class)->name('Mens');
	});

});*/