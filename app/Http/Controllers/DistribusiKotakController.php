<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DistribusiKotak;
use App\Karyawan;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class DistribusiKotakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kotak =  DistribusiKotak::all();
        return view('distribusi_kotak.distribusi_kotak', ['data_kotak'=> $data_kotak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('distribusi_kotak.create', ['karyawan'=> $karyawan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $formData = new DistribusiKotak;
        // $formData->id_karyawan = $request->id_karyawan;
        // $formData->tanggal_distribusi = Carbon::createFromFormat('m/d/Y', $request->tanggal_distribusi)->format('Y-m-d H:i:s');
        // $formData->tanggal_tarik = Carbon::createFromFormat('m/d/Y', $request->tanggal_tarik)->format('Y-m-d H:i:s');
        // $formData->nama_toko = $request->nama_toko;
        // $formData->alamat = $request->alamat;
        // $formData->hp = $request->hp;
        // $formData->kecamatan = $request->kecamatan;
        // $formData->kabupaten = $request->kabupaten;
        // $formData->provinsi = $request->provinsi;
        // $formData->penanda_lokasi = $request->penanda_lokasi;
        // $formData->kode_kotak = $request->kode_kotak;
        // $formData->status = $request->status;
        // $formData->area = $request->area;
        // $formData->save();

        // DistribusiKotak::create([
        //     'id_karyawan' => $request->id_karyawan,
        //     'tanggal_distribusi' => Carbon::createFromFormat('m/d/Y', $request->tanggal_distribusi)->format('Y-m-d H:i:s'),
        //     'tanggal_tarik' => Carbon::createFromFormat('m/d/Y', $request->tanggal_tarik)->format('Y-m-d H:i:s'),
        //     'nama_toko' => $request->nama_toko,
        //     'alamat' => $request->alamat,
        //     'hp' => $request->hp,
        //     'kecamatan' => $request->kecamatan,
        //     'kabupaten' => $request->kabupaten,
        //     'provinsi' => $request->provinsi,
        //     'penanda_lokasi' => $request->penanda_lokasi,
        //     'kode_kotak' => $request->kode_kotak,
        //     'status' => $request->status,
        //     'area' => $request->area
        // ]);

        $request['tanggal_distribusi'] = Carbon::createFromFormat('m/d/Y', $request->tanggal_distribusi)->format('Y-m-d H:i:s');
        $request['tanggal_tarik'] = Carbon::createFromFormat('m/d/Y', $request->tanggal_tarik)->format('Y-m-d H:i:s');
        DistribusiKotak::create($request->all());
        Alert::success('Success', 'Data Berhasil disimpan');
        return redirect()->route('distribusi-kotak.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
