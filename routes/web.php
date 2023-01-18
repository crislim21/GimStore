<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\LibraryController;


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminGameController;
use App\Http\Controllers\UpdateGameController;
use App\Http\Controllers\DestroyCartController;
use App\Http\Controllers\HistoryDetailController;
use App\Http\Controllers\DeleteGameController;

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

Route::get('/home', [HomeController::class, 'index']);

Route::get('/browse', [BrowseController::class, 'index'])->middleware('isUser');
Route::get('/game/{game:id}', [BrowseController::class, 'detail'])->middleware('isUser');

Route::get('/cart', [CartController::class, 'index'])->middleware('isUser');
Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store')->middleware('isUser');
Route::resource('/cart/remove', DestroyCartController::class)->middleware('isUser');

Route::get('/history', [HistoryDetailController::class, 'index'])->middleware('isUser');
Route::get('/history/make', [HistoryDetailController::class, 'make_history'])->middleware('isUser');

Route::get('/library', [LibraryController::class, 'index'])->middleware('isUser');
Route::get('library/{id}', [LibraryController::class, 'detail'])->middleware('isUser');



Route::get('/admin/home', [AdminController::class, 'index'])->middleware('isAdmin');

Route::get('/admin/add', function(){
    return view('admin.addGame');
});
Route::get('/admin/view/{id}', [AdminController::class, 'view'])->middleware('isAdmin');
Route::get('/admin/add', [AdminController::class, 'add'])->middleware('isAdmin');
Route::get('/admin/game/{id}', [AdminController::class, 'detail'])->middleware('isAdmin');
Route::put('/admin/update/game/{id}', [UpdateGameController::class, 'update'])->middleware('isAdmin');

Route::resource('/admin/delete', DeleteGameController::class)->middleware('isAdmin');
Route::resource('/admin/game', AdminGameController::class)->middleware('isAdmin');

// Route::get('/test', function(){
//     return view('home');
// });
