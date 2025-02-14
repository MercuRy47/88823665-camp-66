<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello world!</h1>";
});

Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class, 'myfunction']);

Route::get('/mylab', [MyController::class, 'multiply']);
Route::post('/mylab', [MyController::class, 'multiply']);

// 15/01/68
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);


Route::get('/error500', function (){
    abort(500, 'Internal Server Error');
});


// 29/01/68
Route::post('/register', [RegisterController::class, 'create']);


Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'edit_action']);
    // Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);

    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products/insert', [ProductController::class, 'insert'])->name('insert');
});

