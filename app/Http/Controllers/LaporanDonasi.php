<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\TransaksiDonasi;

class LaporanDonasi extends Controller
{
    public function index()
    {
        return view('laporan.laporan-donasi.index');
    }

    public function search(Request $request)
    {
        $start = value('start');
        $end = value('end');

        $lapdonasi = DB::table('transaksi_donasi')->whereBetween('created_at',[$start, $end])->get();
       dd($lapdonasi);
        return view('laporan.laporan-donasi.index', compact('lapdonasi'));
    }
}
