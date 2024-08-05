<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//http://127.0.0.1:8000/api/list-product (danh sách product)
Route::get('list-product', [ProductController::class, 'listProduct']);

//http://127.0.0.1:8000/api/product/{id} (chi tiết 1 product)

Route::get('product/{idProduct}', [ProductController::class, 'getProduct']);

//http://127.0.0.1:8000/api/product (thêm mới 1 product)

Route::post('product', [ProductController::class, 'addProduct']);

//http://127.0.0.1:8000/api/product (Update 1 product)

Route::put('product', [ProductController::class, 'updateProduct']);

//http://127.0.0.1:8000/api/product (delete 1 product)

Route::delete('product', [ProductController::class, 'deleteProduct']);