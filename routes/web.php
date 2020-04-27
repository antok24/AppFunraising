<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master');
    // return view('karyawan.input');
});

Route::get('karyawan', 'KaryawanController@tampildata');



