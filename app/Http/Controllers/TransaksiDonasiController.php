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
        return view('donasi.tambahDonasi');
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
