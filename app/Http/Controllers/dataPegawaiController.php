<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class dataPegawaiController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'name' => ['required'],
            'age' => ['required'],
            'address' => ['required'],
            'birthdate' => ['required'],
            'birthplace' => ['required']
        ]);

        pegawai::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace
        ]);

        return redirect('/data-pegawai')->with(['status' => 'success']);
    }

    public function getAllData(){
        $results = pegawai::all();

        return view('databarang', [
            'results' => $results
        ]);
    }
}
