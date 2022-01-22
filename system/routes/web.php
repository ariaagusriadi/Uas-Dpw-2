<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



// register
Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

// login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'process']);
Route::get('logout', [AuthController::class, 'logout']);


// hak akses penjual
Route::prefix('admin')->middleware(['auth', 'penjual'])->group(function () {
    Route::get('dataproduk',[ ProdukController::class, 'showdata']);
    Route::resource('produk', ProdukController::class);
    Route::get('dashboard/penjual', [AdminController::class, 'dashboard']);
});

// hak akses admin 
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('datauser',[ UserController::class, 'showdata']);
    Route::get('dashboard/admin', [AdminController::class, 'dashboard']);
    Route::resource('user', UserController::class);
});

// home page
Route::get('home', [HomePageController::class, 'index']);
Route::post('home/filter', [HomePageController::class, 'filter']);
Route::post('home/filter2', [HomePageController::class, 'filter2']);
// Route::get('home/tampildata', [HomePageController::class, 'tampildata'])->name('tampildata');

// shop page
Route::get('shop/{produk}', [ShowPageController::class, 'index']);

// CheckOut

Route::get('checkout', [CheckoutController::class, 'index']);