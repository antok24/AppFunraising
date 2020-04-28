<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return view('karyawan.input');
});

Route::get('karyawan', 'KaryawanController@tampildata');



