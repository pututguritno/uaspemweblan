<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

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
Route::get('/aboutus', function () {
    return view('pages.aboutUs');
});
// ->middleware('checkRole:admin');
Auth::routes();
//memeriksa role
Route::get('/buku', function () { return view('pages/buku'); })->middleware('checkRole:admin');
Route::get('/home', function () { return view('users/userr'); })->middleware('checkRole:user');
//logout
Route::post('/logout', [HomeController::class, 'logout']);
// halaman data buku
Route::get('/buku', [HomeController::class, 'index'])->middleware('checkRole:admin');
// Route::get('/buku/tambah', [HomeController::class, 'create'])->middleware('checkRole:admin');
// // Route::post('/buku/store', [HomeController::class, 'store'])->middleware('checkRole:admin');
// Route::get('/buku/edit/{id}', [HomeController::class, 'edit'])->middleware('checkRole:admin');
// // Route::post('/buku/update', [HomeController::class, 'update'])->middleware('checkRole:admin');
// Route::get('/buku/hapus/{id}', [HomeController::class, 'hapus'])->middleware('checkRole:admin');
// //halaman peminjaman
// Route::get('/peminjaman', [DataController::class, 'index'])->middleware('checkRole:admin');
// Route::get('/peminjaman/tambah', [DataController::class, 'create'])->middleware('checkRole:admin');
// // Route::post('/peminjaman/store', [DataController::class, 'store'])->middleware('checkRole:admin');
// Route::get('/peminjaman/detail/{id_peminjam}', [DataController::class, 'show'])->middleware('checkRole:admin');
// Route::get('/peminjaman/edit/{id_peminjam}', [DataController::class, 'edit'])->middleware('checkRole:admin');
// // Route::post('/peminjaman/update', [DataController::class, 'update'])->middleware('checkRole:admin');
// Route::get('/peminjaman/hapus/{id_peminjaman}', [DataController::class, 'hapus'])->middleware('checkRole:admin');
// //halaman Riwayat
// Route::get('/riwayat', [DataController::class, 'riwayat'])->middleware('checkRole:admin');
// //halaman user
// // Route::get('/userr', [UserController::class, 'create'])->middleware('checkRole:user');
// // Route::post('/userr/store', [UserController::class, 'store'])->middleware('checkRole:user');
