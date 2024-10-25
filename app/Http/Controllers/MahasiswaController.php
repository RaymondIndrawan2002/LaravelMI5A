<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // panggil model fakultas
        $result = mahasiswa::all();
        // dd($result);

        // Kirim data $result ke view fakultas/index.blade.php
        return view(view: 'mahasiswa.index')->with(key: 'mahasiswa', value: $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = prodi::all();
        return view(view:'mahasiswa.create')->with('prodi',$prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        //dd($request);
        $input = $request->validate([
            "npm" => "required|unique:mahasiswas",
            "nama" => "required",
            "tanggal_lahir" => "required",
             "tempat_lahir" => "required",
             "email" => "required",
             "hp" => "required",
             "alamat" => "required",
             "prodi_id" => "required",
        ]);

        // simpan
        mahasiswa::create($input);

        // redirect berserta pesan success
        return redirect()->route('mahasiswa.index')->with('success', $request->nama. 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //dd( $mahasiswa);
        return view('mahasiswa.show')->with('mahasiswa',$mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }

    public function getMahasiswa(){
        $response['data'] = Mahasiswa::with('prodi.fakultas')->get();
        $response['message'] = 'List data mahasiswa';
        $response['success'] = true;

        return response()->json($response, 200);
    }
}

