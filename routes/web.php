<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('home');
})->middleware('isUser');

Route::get('/browse', [BrowseController::class, 'index'])->middleware('isUser');
Route::get('/game/{game:id}', [BrowseController::class, 'detail'])->middleware('isUser');

Route::get('/cart', [CartController::class, 'index'])->middleware('isUser');
Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store')->middleware('isUser');
Route::resource('/cart/product', CartControllers::class)->middleware('isUser');

Route::get('/admin/home', [AdminController::class, 'index'])->middleware('isAdmin');

Route::get('/admin/add', function(){
    return view('admin.addGame');
});
