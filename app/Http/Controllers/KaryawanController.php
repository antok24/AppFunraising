<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function tampildata() {
        $query = DB::SELECT("select * from karyawan where status='1'");

        return view('karyawan.input', ['data' => $query]);
    }
}
