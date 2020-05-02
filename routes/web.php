<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('karyawan', 'KaryawanController');
Route::post('karyawan/simpan', 'KaryawanController@simpan');
//Route::resource('mustahiq', 'MustahiqController');
//Route::resource('relawan', 'RelawanController');
Route::resource('inventaris', 'BarangController');
Route::post('/inventaris/simpan', 'BarangController@simpan');




