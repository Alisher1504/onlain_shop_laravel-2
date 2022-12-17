<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrendController;
use App\Http\Controllers\CategoryCantroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function() {

    Route::get('/dashboard', [AdminController::class, 'index']);

    // category create

    Route::get('/category', [CategoryCantroller::class, 'index']);
    Route::get('/category/create', [CategoryCantroller::class, 'create']);
    Route::post('/category', [CategoryCantroller::class, 'store']);
    Route::get('category/edit/{id}', [CategoryCantroller::class, 'edit']);
    Route::put('category/update/{id}', [CategoryCantroller::class, 'update']);
    Route::get('category/delete/{id}', [CategoryCantroller::class, 'delete']);
    
    // brends create

    Route::get('/brends', [BrendController::class, 'index']);
    Route::get('/brends/create', [BrendController::class, 'create']);
    Route::post('/brends/store', [BrendController::class, 'store']);
    Route::get('/brends/update/{id}', [BrendController::class, 'update']);
    Route::put('/brends/edit/{id}', [BrendController::class, 'edit']);
    Route::get('/brends/delete/{id}', [BrendController::class, 'delete']);
    
    // product create

    Route::controller(ProductController::class)->group(function() {
        Route::get('product', 'index');
        Route::get('product/create', 'create');
        Route::post('/product/store', 'store');
        Route::get('/product/edit/{id}', 'edit');
        Route::put('/product/update/{id}', 'update');
        Route::get('/product/delete/{id}', 'delete');
    });

    // Colors create

    Route::controller(ColorController::class)->group(function() {
       
        Route::get('colors', 'index');
        Route::get('colors/create', 'create');
        Route::post('colors/store', 'store');
        Route::get('colors/edit/{id}', 'edit');
        Route::put('colors/update/{id}', 'update');
        Route::get('colors/delete/{id}', 'delete');
        
    });

});