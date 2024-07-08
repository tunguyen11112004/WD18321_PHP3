<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// GET POST => Method HTTP
// Slug
// http://127.0.0.1:8000/ => Base url

Route::get('/test', function () {
    echo '123';
});

Route::get('/test');

Route::get('/list-user' , [UserController::class, 'showUser']);

//slug

Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);

// Params
Route::get('/update-user', [UserController::class, 'updateUser']);

Route::get('/thong-tin-sv', [UserController::class, 'thongtinsv']);

//http://127.0.0.1:8000/users/list-users
Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');

    Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
    Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addPostUsers');

    Route::get('delete-users/{idUser}', [UserController::class, 'deleteUsers'])->name('deleteUsers');

    Route::get('update-users/{idUser}', [UserController::class, 'updateUsers'])->name('updateUsers');
    Route::post('update-users', [UserController::class, 'updatePostUsers'])->name('updatePostUsers');
});