<?php

use App\Http\Controllers\KeperluanController;
use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keuangan/tambah',[KeuanganController::class,'tambahKeuangan']);
Route::get('/dashboard',[KeuanganController::class,'dashboard']);

Route::get('/keperluan/tambah',[KeperluanController::class,'tambahKeperluan']);
Route::post('postKeperluan',[KeperluanController::class,'postKeperluan']);
Route::post('postKeuangan',[KeuanganController::class,'postKeuangan']);
Route::get('/delete/{id}',[KeuanganController::class,'delete']);
Route::get('/cetak',[KeuanganController::class,'cetak']);





