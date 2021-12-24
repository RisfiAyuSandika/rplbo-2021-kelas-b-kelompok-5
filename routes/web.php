<?php

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

Route::get('/', [\App\Http\Controllers\UmumController::class,'index']);
Route::get('/ajukansurat', [\App\Http\Controllers\UmumController::class,'surat']);
Route::get('/ajukanlegalisir', [\App\Http\Controllers\UmumController::class,'legalisir']);
Route::get('/lacak', [\App\Http\Controllers\UmumController::class,'lacak']);
Route::post('/lacak', [\App\Http\Controllers\UmumController::class,'lacakKan']);

Route::get('/login', [\App\Http\Controllers\PenggunaController::class,'masuk']);
Route::post('/login', [\App\Http\Controllers\PenggunaController::class,'login']);
Route::get('/keluar', [\App\Http\Controllers\PenggunaController::class,'keluar']);

Route::get('/suratmasuk', [\App\Http\Controllers\SuratMasukController::class,'index']);
Route::post('/suratmasuk', [\App\Http\Controllers\SuratMasukController::class,'tambah']);

Route::get('/suratkeluar', [\App\Http\Controllers\SuratKeluarController::class,'index']);
Route::post('/suratkeluar', [\App\Http\Controllers\SuratKeluarController::class,'simpan']);
Route::post('/suratkeluar/terima', [\App\Http\Controllers\SuratKeluarController::class,'terima']);
Route::post('/suratkeluar/unggah', [\App\Http\Controllers\SuratKeluarController::class,'unggah']);

Route::get('/suratlegalisir', [\App\Http\Controllers\SuratLegalisirController::class,'index']);
Route::post('/suratlegalisir', [\App\Http\Controllers\SuratLegalisirController::class,'simpan']);
Route::post('/suratlegalisir/terima', [\App\Http\Controllers\SuratLegalisirController::class,'terima']);

Route::get('/pengguna', [\App\Http\Controllers\PenggunaController::class,'index']);
Route::post('/pengguna', [\App\Http\Controllers\PenggunaController::class,'tambah']);
Route::post('/pengguna/edit', [\App\Http\Controllers\PenggunaController::class,'edit']);
Route::post('/pengguna/hapus', [\App\Http\Controllers\PenggunaController::class,'hapus']);
