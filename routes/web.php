<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

Route::get('/customer', [CustomerController::class, 'index'])->name('admin.customer');
Route::post('/customer', [CustomerController::class, 'store'])->name('admin.customer.store');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('admin.customer.update');
Route::delete('/customer/{id}', [CustomerController::class, 'delete'])->name('admin.customer.delete');
