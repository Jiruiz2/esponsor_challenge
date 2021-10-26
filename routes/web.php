<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('', [HomeController::class, 'index']);
Route::get('logout', [AuthController::class, 'logOut'])->name('logout');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'createSession'])->name('createSession');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'create'])->name('createUser');
Route::post('product', [ProductController::class, 'create'])->name('createProduct');
Route::get('products', [ProductController::class, 'buyableProducts'])->name('products');
Route::get('myProducts', [ProductController::class, 'myProducts'])->name('myProducts');
Route::get('transactions', [TransactionController::class, 'transactions'])->name('transactions');
Route::post('transaction', [TransactionController::class, 'create'])->name('createTransaction');
