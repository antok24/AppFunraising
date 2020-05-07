<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class TransaksiDonasiController extends Controller
{

    public function index()
    {
        date_default_timezone_set("Asia/Bangkok");
        
        $donasi = DB::table('transaksi_donasi')->Where('kategori', 'donasi')->whereDate('tgl_transaksi', '=', Carbon::today()->toDateString())->get();

        return view('donasi.tabelDonasi', ['dataDonasi' => $donasi]);
    }

    public function create()
    {
        $donatur = DB::table('t_donatur')->get();

        return view('donasi.tambahDonasi', ['data_donatur' => $donatur]);
    }

    public function simpan(Request $request)
    {
        DB::table('t_transaksi_donasi')->insert([
            'nama_donatur' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->tlp,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi
        ]);
        Alert::success('Success', 'Data Donatur Berhasil Disimpan!');
        return redirect()->route('donatur.index');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
