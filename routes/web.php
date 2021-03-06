<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('karyawan', 'KaryawanController');
Route::post('karyawan/simpan', 'KaryawanController@simpan');

Route::resource('mustahiq', 'MustahiqController');
Route::post('mustahiq/simpan', 'MustahiqController@simpan');

Route::resource('donatur', 'DonaturController');
Route::post('donatur/simpan', 'DonaturController@simpan');
Route::get('/donatur/edit/{id_donatur}', 'DonaturController@edit');
Route::post('/donatur/update', 'DonaturController@update');
Route::get('/donatur/delete/{id_donatur}', 'DonaturController@delete');

Route::resource('donasi', 'TransaksiDonasiController');
Route::post('donasi/simpan', 'TransaksiDonasiController@simpan');

Route::resource('donasi_kotak', 'DonasiKotakController');
Route::post('donasi_kotak/simpan', 'DonasiKotakController@simpan');

Route::resource('relawan', 'RelawanController');
Route::post('relawan/simpan', 'RelawanController@simpan');

Route::resource('inventaris', 'BarangController');
Route::post('/inventaris/simpan', 'BarangController@simpan');
Route::get('/inventaris/edit/{kode_barang}', 'BarangController@edit');
Route::post('/inventaris/update', 'BarangController@update');
Route::get('/inventaris/delete/{kode_barang}', 'BarangController@delete');

Route::resource('distribusi-kotak', 'DistribusiKotakController');

/*  laporan */
Route::group(['prefix'=> 'laporan'], function()
	{
		Route::get('/donasi','LaporanDonasi@index')->name('laporan-donasi.index');
		Route::post('/donasi/search','LaporanDonasi@search')->name('laporan-donasi.search');

		Route::get('/edit/{id}','SertifikatAllController@edit')->name('sertifikatall.edit');
	});



