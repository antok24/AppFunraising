<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('karyawan', 'KaryawanController');
Route::resource('inventaris', 'BarangController');
Route::post('/inventaris/simpan', 'BarangController@simpan');




