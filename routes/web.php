<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProduct;

// GET POST => Method HTTP
// Slug
// http://127.0.0.1:8000/ => Base url

// Route::get('/test', function () {
//     echo '123';
// });

// Route::get('/test');

// Route::get('/list-user' , [UserController::class, 'showUser']);

// //slug

// Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);

// // Params
// Route::get('/update-user', [UserController::class, 'updateUser']);

// Route::get('/thong-tin-sv', [UserController::class, 'thongtinsv']);

// //http://127.0.0.1:8000/users/list-users
// Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
//     Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');

//     Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
//     Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addPostUsers');

//     Route::get('delete-users/{idUser}', [UserController::class, 'deleteUsers'])->name('deleteUsers');

//     Route::get('update-users/{idUser}', [UserController::class, 'updateUsers'])->name('updateUsers');
//     Route::post('update-users', [UserController::class, 'updatePostUsers'])->name('updatePostUsers');
// });

// Route::group(['prefix' => 'product', 'as' => 'product.'] , function(){
//     Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
//     Route::get('timKiem-product', [ProductController::class, 'timKiemProduct'])->name('timKiemProduct');

//     Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
//     Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');

//     Route::get('delete-product/{idProduct}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

//     Route::get('update-product/{idProduct}', [ProductController::class, 'updateProduct'])->name('updateProduct');
//     Route::post('update-product', [ProductController::class, 'updatePostProduct'])->name('updatePostProduct');
// });

// Route::get('test', [UserController::class, 'test']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
        //http://127.0.0.1:8000/admin/product/....
        Route::get('/', [AdminProduct::class, 'listProduct'])->name('listProduct');

        Route::get('add-product', [AdminProduct::class, 'addProduct'])->name('addProduct');

        Route::post('add-product', [AdminProduct::class, 'addPostProduct'])->name('addPostProduct');

        Route::delete('delete-product', [AdminProduct::class, 'deleteProduct'])->name('deleteProduct');

        Route::get('detail-product/{idProduct}', [AdminProduct::class, 'detailProduct'])->name('detailProduct');
        
        Route::get('update-product/{idProduct}', [AdminProduct::class, 'updateProduct'])->name('updateProduct');

        Route::patch('update-product/{idProduct}', [AdminProduct::class, 'updatePatchProduct'])->name('updatePatchProduct');

    });
});

