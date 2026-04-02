<?php

use App\Http\Controllers\admin\BahanController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JabatanController;
use App\Http\Controllers\admin\JasaDesainController;
use App\Http\Controllers\admin\JenisBahanController;
use App\Http\Controllers\admin\KurirController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PegawaiController;
use App\Models\Kurir;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

Route::get('/customer', [CustomerController::class, 'index'])->name('admin.customer');
Route::post('/customer', [CustomerController::class, 'store'])->name('admin.customer.store');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('admin.customer.update');
Route::delete('/customer/{id}', [CustomerController::class, 'delete'])->name('admin.customer.delete');

Route::get('/jasadesain', [JasaDesainController::class, 'index'])->name('admin.jasadesain');
Route::post('/jasadesain', [JasaDesainController::class, 'store'])->name('admin.jasadesain.store');
Route::put('/jasadesain/{id}', [JasaDesainController::class, 'update'])->name('admin.jasadesain.update');
Route::delete('/jasadesain/{id}', [JasaDesainController::class, 'delete'])->name('admin.jasadesain.delete');

Route::get('/jabatan', [JabatanController::class, 'index'])->name('admin.jabatan');
Route::post('/jabatan', [JabatanController::class, 'store'])->name('admin.jabatan.store');
Route::put('/jabatan/{id}', [JabatanController::class, 'update'])->name('admin.jabatan.update');
Route::delete('/jabatan/{id}', [JabatanController::class, 'delete'])->name('admin.jabatan.delete');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('admin.pegawai.store');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('admin.pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'delete'])->name('admin.pegawai.delete');

Route::get('/bahan', [BahanController::class, 'index'])->name('admin.bahan');
Route::post('/bahan', [BahanController::class, 'store'])->name('admin.bahan.store');
Route::put('/bahan/{id}', [BahanController::class, 'update'])->name('admin.bahan.update');
Route::delete('/bahan/{id}', [BahanController::class, 'delete'])->name('admin.bahan.delete');

Route::get('/jenisbahan', [JenisBahanController::class, 'index'])->name('admin.jenisbahan');
Route::post('/jenisbahan', [JenisBahanController::class, 'store'])->name('admin.jenisbahan.store');
Route::put('/jenisbahan/{id}', [JenisBahanController::class, 'update'])->name('admin.jenisbahan.update');
Route::delete('/jenisbahan/{id}', [JenisBahanController::class, 'delete'])->name('admin.jenisbahan.delete');

Route::get('/kurir', [KurirController::class, 'index'])->name('admin.kurir');
Route::post('/kurir', [KurirController::class, 'store'])->name('admin.kurir.store');
Route::put('/kurir/{id}', [KurirController::class, 'update'])->name('admin.kurir.update');
Route::delete('/kurir/{id}', [KurirController::class, 'delete'])->name('admin.kurir.delete');

Route::get('/order', [OrderController::class, 'index'])->name('admin.order');
Route::post('/order', [OrderController::class, 'store'])->name('admin.order.store');
Route::put('/order/{id}', [OrderController::class, 'update'])->name('admin.order.update');
Route::delete('/order/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');
