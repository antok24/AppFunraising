<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    
    public function index()
    {
        $barang = DB::table('t_barang')->get();
        
        return view('inventaris.barang',['barang'=> $barang]);
    }

    
    public function create()
    {
        $barang = DB::table('t_barang')->get();

        return view('inventaris.barang_tambah',['barang_tambah'=> $barang]);
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

    public function destroy($id)
    {
        //
    }
}
