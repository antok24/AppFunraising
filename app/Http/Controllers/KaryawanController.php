<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function tampildata() {
        $query = DB::SELECT("SELECT * from karyawan");
        //$query = Karyawan::all();
        return view('karyawan.tabel', ['data' => $query]);
    }
}
