<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
//Route::resource('product', ProductController::class);
//Route::post('/products', ProductController::class .'@store')->name('products.index');

Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/edit', [ProductController::class,'edit'])->name('product.edit');
Route::get('/product/show', [ProductController::class,'show'])->name('product.show');
Route::delete('/student/destroy', [ProductController::class,'destroy'])->name('product.destroy');
Route::put('/student/update', [ProductController::class,'update'])->name('product.update');
