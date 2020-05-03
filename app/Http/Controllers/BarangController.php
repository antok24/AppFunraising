<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    
    public function index()
    {
        $barang = DB::table('t_barang')->get();
        
        return view('inventaris.barang',['barang'=> $barang]);
    }

    
    public function create()
    {
        return view('inventaris.barang_tambah');
    }


    public function store(Request $request)
    {
        //
    }

    public function simpan(Request $request)
    {
        DB::table('t_barang')->insert([
            'kode_barang'     => $request->kode_barang,
            'nama_barang'     => $request->nama_barang,
            'merk_barang'     => $request->merk_barang,
            'jumlah'          => $request->jumlah,
            'nilai_perolehan' => $request->nilai_perolehan,
            'tahun_perolehan' => $request->tahun_perolehan,
            'user_updated'    => $request->user_updated,
            'user_created'    => $request->user_created
        ]);
        Alert::success('Success', 'Data Berhasil disimpan');
        return redirect()->route('inventaris.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($kode_barang)
    {
       
	    $barang = DB::table('t_barang')->where('kode_barang',$kode_barang)->get();
	    return view('inventaris.barang_edit',['barang'=> $barang]);
    }

    public function update(Request $request)
    {
        DB::table('t_barang')->where ('kode_barang',$request->kode_barang)->update([
            'nama_barang'     => $request->nama_barang,
            'merk_barang'     => $request->merk_barang,
            'jumlah'          => $request->jumlah,
            'nilai_perolehan' => $request->nilai_perolehan,
            'tahun_perolehan' => $request->tahun_perolehan,
            'user_updated'    => $request->user_updated,
            'user_created'    => $request->user_created 
        ]);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect()->route('inventaris.index');
    }

    public function delete($kode_barang)
    {
        DB::table('t_barang')->where ('kode_barang',$kode_barang)->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect()->route('inventaris.index');
    }

    public function destroy($id)
    {
        //
    }
}
