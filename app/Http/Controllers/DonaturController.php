<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donatur = DB::table('t_donatur')->get();

        return view('donatur.tabel', ['data_donatur' => $donatur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donatur.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function simpan(Request $request)
    {
        DB::table('t_donatur')->insert([
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_donatur)
    {
        $donatur = DB::table('t_donatur')->where('id_donatur',$id_donatur)->get();
	    return view('donatur.donatur_edit',['donatur'=> $donatur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('t_donatur')->where ('id_donatur',$request->id_donatur)->update([
            'nama_donatur' => $request->nama_donatur,
            'alamat'       => $request->alamat,
            'no_tlp'       => $request->no_tlp,
            'kecamatan'    => $request->kecamatan,
            'kabupaten'    => $request->kabupaten,
            'provinsi'     => $request->provinsi
            ]); 
            Alert::success('Success', 'Data Berhasil diupdate');
            return redirect()->route('donatur.index');
        }

        public function delete($id_donatur)
        {
            DB::table('t_donatur')->where ('id_donatur',$id_donatur)->delete();
            Alert::success('Success', 'Data Berhasil dihapus');
            return redirect()->route('donatur.index');
        }
    public function destroy($id)
    {
        //
    }
}
