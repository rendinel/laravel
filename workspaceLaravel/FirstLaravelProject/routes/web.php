<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/{name}', [ProductsController::class,'show']);
// Route::get('/products/about', [ProductsController::class, 'about']);

// Verifica che id inserito sia numerico

// Route::get('/products/{id}',
// [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Verifica che endpoint inserito sia string

// Route::get('/products/{name}',
// [ProductsController::class, 'show'])->where('name',
// '[a-zA-z]+');

// Verifica che endpoint inserito sia primo stringa e secondo sia numerico

//  


Route::get('/products', [
    ProductsController::class, 'index'])->name('products');