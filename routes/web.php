<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/homestay', [PostController::class, 'index']);

Route::get('/homestay/detail/{post:slug}', [PostController::class, 'show']);

Route::get('/homestay/detail/booking/{post:slug}', [PostController::class, 'booking'])->middleware('auth');

Route::get('/homestay/category/{category:slug}', [CategoryController::class, 'index']);

Route::get('/homestay/room/{room:slug}', [RoomController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// diputuskan untuk tidak menggunakan controller, karena code masih terbilang sedikit
Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// CRUD
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
