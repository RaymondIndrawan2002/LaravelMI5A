<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // panggil model fakultas
        $result = prodi::all();
        // dd($result);

        // Kirim data $result ke view fakultas/index.blade.php
        return view(view: 'prodi.index')->with(key: 'prodi', value: $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view(view:'prodi.create')->with('fakultas',$fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            "nama" => "required|unique:prodis",
            "kaprodi" => "required",
            "singkatan" => "required",
             "fakultas_id" => "required"
        ]);

        // simpan
        Prodi::create($input);
    }

    /**
     * Display the specified resource.
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = prodi::find($id);
        $fakultas = Fakultas::all();
        return view('prodi.edit')
                    ->with('prodi',$prodi)
                    ->with('fakultas',$fakultas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prodi = prodi::find($id);

        $input = $request->validate([
            "nama" => "required|unique:prodis",
            "kaprodi" => "required",
            "singkatan" => "required",
             "fakultas_id" => "required"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodi $prodi)
    {
        //
    }
}
