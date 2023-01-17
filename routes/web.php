<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrendController;
use App\Http\Controllers\CategoryCantroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::controller(FrontController::class)->group(function() {
    Route::get('/', [FrontController::class, 'index']);
    Route::get('/collections', 'category');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productsview');
    Route::get('/thankYou', 'thankYou');
    Route::get('new-arrivals', 'newArrivals');
    Route::get('featured-product', 'featured');
});


Route::middleware(['auth'])->group(function() {

    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::get('/card', [CardController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('orders/{id}', [OrderController::class, 'show']);
    
});



Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function() {

    Route::get('/dashboard', [AdminController::class, 'index']);

    //settings

    Route::controller(SettingsController::class)->group(function() {

        Route::get('settings', 'index');

    });

    // Category

    Route::get('/category', [CategoryCantroller::class, 'index']);
    Route::get('/category/create', [CategoryCantroller::class, 'create']);
    Route::post('/category', [CategoryCantroller::class, 'store']);
    Route::get('category/edit/{id}', [CategoryCantroller::class, 'edit']);
    Route::put('category/update/{id}', [CategoryCantroller::class, 'update']);
    Route::get('category/delete/{id}', [CategoryCantroller::class, 'delete']);
    
    // Brends

    Route::get('/brends', [BrendController::class, 'index']);
    Route::get('/brends/create', [BrendController::class, 'create']);
    Route::post('/brends/store', [BrendController::class, 'store']);
    Route::get('/brends/update/{id}', [BrendController::class, 'update']);
    Route::put('/brends/edit/{id}', [BrendController::class, 'edit']);
    Route::get('/brends/delete/{id}', [BrendController::class, 'delete']);
    
    // Product

    Route::controller(ProductController::class)->group(function() {
        Route::get('product', 'index');
        Route::get('product/create', 'create');
        Route::post('/product/store', 'store');
        Route::get('/product/edit/{id}', 'edit');
        Route::put('/product/update/{id}', 'update');
        Route::get('/product/delete/{id}', 'delete');
    });

    // Colors

    Route::controller(ColorController::class)->group(function() {
       
        Route::get('colors', 'index');
        Route::get('colors/create', 'create');
        Route::post('colors/store', 'store');
        Route::get('colors/edit/{id}', 'edit');
        Route::put('colors/update/{id}', 'update');
        Route::get('colors/delete/{id}', 'delete');
        
    });

    // Slider

    Route::controller(SliderController::class)->group(function() {

        Route::get('slider', 'index');
        Route::get('slider/create', 'create');
        Route::post('slider/store', 'store');
        Route::get('slider/edit/{id}', 'edit');
        Route::put('slider/update/{id}', 'update');
        Route::get('slider/delete/{id}', 'delete');   
    });

    //Orders

    Route::controller(AdminOrderController::class)->group(function() {
        Route::get('/orders', 'index');
        Route::get('orders/{id}', 'show');
        Route::put('orders/{id}', 'updateOrders');

        Route::get('invoice/{id}', 'viewInvoice');
        Route::get('invoice/{id}/generate', 'generateInvoice');
        
    });

});