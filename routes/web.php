<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('karyawan', 'KaryawanController');
Route::resource('karyawan/tambah', 'KaryawanController@store');
Route::resource('mustahiq', 'MustahiqController');
Route::resource('relawan', 'RelawanController');
Route::resource('inventaris', 'BarangController');




