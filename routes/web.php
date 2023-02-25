<?php

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

Route::group([], function () {
    Route::view('/login', 'auth.login');
    Route::post('/login', [AuthorizationController::class, 'login']);
    Route::view('/register', 'auth.register');
    Route::post('/register', [AuthorizationController::class, 'register']);
})->middleware('guest')->name('auth');

Route::get('/logout', [AuthorizationController::class, 'logout'])->middleware('auth');

Route::group([], function () {
    Route::get('/', function () {
        return view('panel.employees');
    }
    );
    Route::get('/orders', function () {
        return view('panel.orders');
    }
    );
})->middleware('auth')->name('panel');