<?php

use App\Http\Livewire\Category\ShowCategory;
use App\Http\Livewire\Main\Showlobby;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Main\MensClothing;
use App\Http\Livewire\Product\Showproduct;
use App\Http\Livewire\Tutorials\ViewTutorial;
use App\Http\Livewire\Tutorials\ViewContent;
use App\Http\Livewire\Tutorials\Content;
use App\Http\Livewire\Admin\Prueba;
use App\Http\Livewire\Admin\Create;
//use de admin inicio
use App\Http\Livewire\Admin\show\Welcome;
//Use de admin apartado de ver
use App\Http\Livewire\Admin\show\WarehouseShow;
use App\Http\Livewire\Admin\show\StockShow;
use App\Http\Livewire\Admin\show\ProviderShow;
use App\Http\Livewire\Admin\show\ShowProducts;
use App\Http\Livewire\Admin\show\ShowSubCategory;
use App\Http\Livewire\Admin\show\update\UpdateProduct;
use App\Http\Livewire\Admin\show\ShowTrademark;
use App\Http\Livewire\Admin\show\CategoryShow;
use App\Http\Livewire\Admin\show\ShowOrigin;
//user,permis
use App\Http\Livewire\Admin\User\UserCreate;
use App\Http\Livewire\Admin\User\UserShow;

Route::get('/', Showlobby::class)->name('lobby');


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


//ruta tutoriales
Route::get('/tutorials', ViewTutorial::class)->name('tutorials');
//ruta vista
Route::get('/info', ViewContent::class)->name('info');
//ruta vista
Route::get('/content', Content::class)->name('content');

//rutas de administrador
Route::middleware(['auth:sanctum','verified', 'restriction.users'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::name('admin.')->group(function(){
            Route::get('/welcome',Welcome::class
            )->name('welcome');

            Route::get('/create',Create::class
            )->middleware('can:Agregar Inventario')->name('create');

            Route::get('/showtrademark',ShowTrademark::class
            )->middleware('can:Ver Inventario')->name('showtrademark');

            Route::get('/showcategory',CategoryShow::class
            )->middleware('can:Ver Inventario')->name('showcategory');

            Route::get('/showsubcategory',ShowSubCategory::class
            )->middleware('can:Ver Inventario')->name('showsubcategory');

            Route::get('/showorigin',ShowOrigin::class
            )->middleware('can:Ver Inventario')->name('showorigin');

            Route::get('/showtrademark',ShowTrademark::class
            )->middleware('can:Ver Inventario')->name('showtrademark');

            Route::get('/showcategory',CategoryShow::class
            )->middleware('can:Ver Inventario')->name('showcategory');

            Route::get('/showarehouse',WarehouseShow::class
            )->middleware('can:Ver Inventario')->name('showwarehouse');

            Route::get('/showprovider',ProviderShow::class
            )->middleware('can:Ver Inventario')->name('showprovider');

            Route::get('/showstock',StockShow::class
            )->middleware('can:Ver Inventario')->name('showstock');

            Route::get('/showorigin',ShowOrigin::class
            )->middleware('can:Ver Inventario')->name('showorigin');

            Route::get('/showproduct',ShowProducts::class
            )->middleware('can:Ver Inventario')->name('showproduct');

            Route::get('/{product_id}/updateproduct',UpdateProduct::class
            )->middleware('can:Editar Inventario')->name('updateproduct');

            Route::get('/insertuser',UserCreate::class
            )->middleware('can:Crear Usuarios')->name('insertuser');

            Route::get('/showuser',UserShow::class
            )->middleware('can:Ver Usuarios')->name('showuser');
        });
    });
});



