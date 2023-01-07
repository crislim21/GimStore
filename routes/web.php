<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/browse', [BrowseController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store');
Route::resource('/cart/product', CartControllers::class);

