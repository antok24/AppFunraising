<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = DB::table('karyawan')->where('status', 'karyawan')->get();

        return view('karyawan.tabel', ['data' => $data]);
    }

    public function create()
    {
        return view('karyawan.input');
    }

    public function store(Request $request)
    {
        
    }
    public function simpan(Request $request){
        DB::table('karyawan')->insert([
            'nama_karyawan' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->tlp,
            'email' => $request->email,
            'pendidikan_terakhir' => $request->pendidikan,
            'umur' => $request->umur,
            'status' => "karyawan",
            'nama_pasangan' => $request->pasangan
        ]);
        Alert::success('Success', 'Data Karyawan Berhasil Disimpan!');
        return redirect()->route('karyawan.index');
    }

    public function show($id)
    {
        
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
