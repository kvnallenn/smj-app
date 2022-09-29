<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\AdminAddProdukController;



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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/logout', [LoginController::class, 'redirect']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::resource('/admin', AdminLoginController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/pesanan', PesananController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/adminproduk', AdminProdukController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/adminproduk/tambahproduk', AdminAddProdukController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/adminproduk/detailproduk', DetailProdukController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/adminproduk/kategoriproduk', KategoriController::class)->except('show')->middleware('is_admin');


