<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthorizationController;
use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'auth', 'middleware' => 'guest'], function () {
    Route::view('/login', 'auth.login');
    Route::post('/login', [AuthorizationController::class, 'login']);
    Route::view('/register', 'auth.register');
    Route::post('/register', [AuthorizationController::class, 'register']);
});

Route::get('/logout', [AuthorizationController::class, 'logout'])->middleware('auth');

Route::group(['as' => 'panel', 'middleware' => 'auth'], function () {
    Route::get('/', [EmployeeController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/products', [ProductController::class, 'index']);
});