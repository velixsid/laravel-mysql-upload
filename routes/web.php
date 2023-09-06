<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UploadController::class, 'index'])->name('halaman.pertama');

Route::post('/', [UploadController::class, 'upload'])->name('upload');

Route::get('/hapus/{id}', [UploadController::class, 'hapus'])->name('hapus');
