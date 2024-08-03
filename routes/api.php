<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get("products",[ProductController::class,"index"]);

Route::get('/list-product', [ProductController::class, "list_product"]);

Route::get('/detail-product/{id}', [ProductController::class, 'detail_product']);

Route::post('/create-product', [ProductController::class, 'create_product']);

Route::put('/update-product/{id}', [ProductController::class, 'update_product']);

Route::delete('/delete-product', [ProductController::class, 'delete_product']);

// Route::get('/list-category', [CategoryController::class, "list_category"]);
