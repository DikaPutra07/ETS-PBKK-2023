<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'nama' => ['required'],
            'jenis_id' => ['required'],
            'kondisi_id' => ['required'],
            'keterangan' => ['required'],
            'jumlah' => ['required', 'integer', 'min:0'],
            'gambar' => ['required'],
        ]);

        //save gambar

        $request->gambar->storeAs('public', $request->gambar->getClientOriginalName());

        barang::create([
            'nama' => $request->nama,
            'jenis_id' => $request->jenis_id,
            'kondisi_id' => $request->kondisi_id,
            'keterangan' => $request->keterangan,
            'kecacatan' => $request->kecacatan,
            'jumlah' => $request->jumlah,
            'gambar' => $request->gambar->getClientOriginalName(),
        ]);

        return redirect('/data-barang')->with(['status' => 'success']);
    }

    public function getAllData(){
        $results = barang::all();

        return view('databarang', [
            'results' => $results
        ]);
    }
}
