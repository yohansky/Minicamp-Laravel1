<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [ProductController::class,"index"])->name('home');

// Route::get('/products', [ProductController::class,"index"]);

// ================= Product routes =================

// Route::get('/list-product', [ProductController::class, "list_product"]);

// Route::get('/products', [ProductController::class,"index"])->name('products.index')->middleware('auth'); ini memakai auth (jadi ahrus login dahulu)

Route::get('/products', [ProductController::class,"index"])->name('products.index');

Route::get('/products/create', [ProductController::class,"create"])->name('products.create');

Route::post('products', [ProductController::class,"store"])->name('products.store');

Route::get('/products/detail/{id}', [ProductController::class,"show"])->name('products.show');

Route::get('/products/{id}/edit', [ProductController::class,"edit"])->name('products.edit');

Route::put('/products/{id}', [ProductController::class,"update"])->name('products.update');

Route::get('/products/search', [ProductController::class,"search"])->name('products.search');

Route::delete('/products/{id}', [ProductController::class,"destroy"])->name('products.destroy');

// =================== Category routes =================

Route::get('/list-category', [CategoryController::class, "list_category"]);

Route::get('/categories', [CategoryController::class,"index"])->name('categories.index');

Route::get('/categories/create', [CategoryController::class,"create"])->name('categories.create');

Route::post('categories', [CategoryController::class,"store"])->name('categories.store');

Route::get('/categories/{id}', [CategoryController::class,"show"])->name('categories.show');

Route::get('/categories/{id}/edit', [CategoryController::class,"edit"])->name('categories.edit');

Route::put('/categories/{id}', [CategoryController::class,"update"])->name('categories.update');

Route::delete('/categories/{id}', [CategoryController::class,"destroy"])->name('categories.destroy');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
