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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DaftarTransferController;
use App\Http\Controllers\StatusPesananController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\DeskripsiController;


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

Route::get('/produk/{id}', [ProdukController::class, 'show']);

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::post('/keranjang', [KeranjangController::class, 'store']);

Route::get('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('destroy');

Route::get('/keranjang/tambahq/{id}', [KeranjangController::class, 'tambahq']);

Route::get('/keranjang/kurangq/{id}', [KeranjangController::class, 'kurangq']);

Route::get('/payment', [PaymentController::class, 'index']);

Route::post('/payment', [PaymentController::class, 'store']);

// Route::resource('/keranjang', KeranjangController::class);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::post('/checkout', [CheckoutController::class, 'index']);

Route::get('/status-pesanan', [StatusPesananController::class, 'index']);

Route::post('/status-pesanan', [StatusPesananController::class, 'store']);

Route::post('/status-pesanan/komplain/{id}', [StatusPesananController::class, 'komplain']);

Route::post('/status-pesanan/komplain/status/{id}', [StatusPesananController::class, 'komplainstatus']);

Route::get('/user-settings/', [UserSettingsController::class, 'faker']);

Route::get('/user-settings/{id}', [UserSettingsController::class, 'index']);

Route::post('/user-settings/edit/{id}', [UserSettingsController::class, 'update']);

Route::get('/admin/daftartransfer', [DaftarTransferController::class, 'index'])->middleware('is_admin');

Route::get('/invoices/{id}', [InvoiceController::class, 'index']);

Route::get('/cetak_invoice/{id}', [StatusPesananController::class, 'cetak_invoice']);

Route::post('/admin/daftartransfer/{id}', [DaftarTransferController::class, 'update'])->middleware('is_admin');

Route::post('/admin/daftartransfer/npm/{id}', [DaftarTransferController::class, 'updateproduk'])->middleware('is_admin');

Route::post('/admin/adminproduk/detailproduk/hapus/{id}', [DaftarTransferController::class, 'deleteopname'])->middleware('is_admin');

Route::resource('/admin/adminproduk/detailproduk', DetailProdukController::class)->middleware('is_admin');

Route::resource('/admin', AdminLoginController::class)->except('show')->middleware('is_admin');

Route::get('/admin/pesanan', [PesananController::class, 'index'])->middleware('is_admin');

Route::get('/admin/exportexcel', [PaymentController::class, 'exportexcel'])->middleware('is_admin');

Route::post('/admin/pesanan/importproduk', [PaymentController::class, 'importexcel'])->middleware('is_admin');

Route::post('/admin/deskripsi/{id}', [DeskripsiController::class, 'update'])->middleware('is_admin');

Route::post('/admin/pesanan/status/{id}', [PesananController::class, 'pesanan'])->middleware('is_admin');

Route::post('/admin/pesanan/gagal/{id}', [PesananController::class, 'norating'])->middleware('is_admin');

Route::post('/produk/pertanyaan', [QuestionsController::class, 'store'])->middleware('is_admin');

Route::post('/admin/pesanan/{id}', [PesananController::class, 'update'])->middleware('is_admin');

Route::get('/admin/pesanan/exportproduk', [PesananController::class, 'exportproduk'])->middleware('is_admin');

Route::resource('/admin/adminproduk', AdminProdukController::class)->except('show')->middleware('is_admin');

Route::resource('/admin/kategoriproduk', KategoriController::class)->except('show')->middleware('is_admin');









