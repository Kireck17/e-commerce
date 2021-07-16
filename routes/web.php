<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
use Illuminate\Support\Facades\Route;
/*
use App\Http\Livewire\Product\ShowSearch;
*/
use App\Http\Livewire\Main\MensClothing;
use App\Http\Livewire\Product\Showproduct;
use App\Http\Livewire\Tutorials\ViewTutorial;
use App\Http\Livewire\Tutorials\ViewContent;
use App\Http\Livewire\Tutorials\Content;
use App\Http\Livewire\Admin\Prueba;
use App\Http\Livewire\Admin\Create;
//Use de admin apartado de ver
use App\Http\Livewire\Admin\show\WarehouseShow;
use App\Http\Livewire\Admin\show\StockShow;
use App\Http\Livewire\Admin\show\ProviderShow;

use App\Http\Livewire\Admin\show\ShowTrademark;
use App\Http\Livewire\Admin\show\CategoryShow;
use App\Http\Livewire\Admin\show\ShowSubCategory;
use App\Http\Livewire\Admin\show\ShowOrigin;

Route::get('/', Showlobby::class)->name('lobby');


//vista admin
Route::get('/nav',Prueba::class)->name('nav');


Route::prefix('category')->group(function(){
    Route::name('category.')->group(function (){
        Route::get('/{category}/show',ShowCategory::class)
            ->name('show');
    });
});
/*Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::prefix('administration')->group(function(){
        Route::name('administration.')->group(function(){
            Route::get('trademarks/create',Createtrademark::class)->name('trademarks');
        });
    });
});*/
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

            Route::get('/showtrademark',ShowTrademark::class
            )->name('showtrademark');

            Route::get('/showcategory',CategoryShow::class
            )->name('showcategory');

            Route::get('/showsubcategory',ShowSubCategory::class
            )->name('showsubcategory');

            Route::get('/showorigin',ShowOrigin::class
            )->name('showorigin');

            Route::get('/showtrademark',ShowTrademark::class
            )->name('showtrademark');

            Route::get('/showcategory',CategoryShow::class
            )->name('showcategory');

            Route::get('/showarehouse',WarehouseShow::class
            )->name('showwarehouse');

            Route::get('/showprovider',ProviderShow::class
            )->name('showprovider');

            Route::get('/showstock',StockShow::class
            )->name('showstock');
        });
    });
});


/*Route::prefix('search')->group(function(){
    Route::name('search.')->group(function(){
        Route::get('/search/show',ShowSearch::class)->name('show');
    });
});*/



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



//ruta tutoriales
Route::get('/tutorials', ViewTutorial::class)->name('tutorials');
//ruta vista
Route::get('/info', ViewContent::class)->name('info');
//ruta vista
Route::get('/content', Content::class)->name('content');

//vista prototipo para metodo de pago
Route::get('/WayToPay', function () {
    return view('category.way-to-pay');
})->name('WayToPay');
//siguiente vista 2 para pago
Route::get('/pay', function () {
    return view('category.pay');
})->name('pay');