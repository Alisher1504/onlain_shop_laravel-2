<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCantroller;
use App\Http\Controllers\Admin\AdminController;

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
    Route::get('category/edit/{id}', [CategoryCantroller::class, 'edit']);
    Route::put('category/update/{id}', [CategoryCantroller::class, 'update']);
    
});