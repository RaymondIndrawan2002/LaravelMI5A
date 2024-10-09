<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model fakultas
        $result = Fakultas::all();
        // dd($result);

        // kirim data $result views fakultas/index.blade.php
        return view(view: 'fakultas.index')->with
        (key: 'fakultas', value: $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $input = $request->validate([
            "nama" => "required|unique:fakultas",
            "dekan" => "required",
            "singkatan" => "required"
        ]);

        // simpan
        Fakultas::create($input);

        // redirect berserta pesan success
        return redirect()->route('fakultas.index')->with('success', $request->nama. 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fakultas = Fakultas::find($id);
       // dd($fakultas);

       return view('fakultas.edit')->with('fakultas',$fakultas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fakultas = fakultas::find($id);
        //dd($fakultas);

        $input = $request->validate([
            "nama" => "required|unique:fakultas",
            "dekan" => "required",
            "singkatan" => "required"
        ]);

        Fakultas::updated($input);

         // redirect berserta pesan success
        return redirect()->route('fakultas.index')->with('success', $request->nama. 'berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        //dd(vars: $fakultas);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil dihapus');
    }
}
