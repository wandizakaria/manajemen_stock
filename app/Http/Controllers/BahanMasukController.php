<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use App\Models\BahanMasuk;
use Database\Factories\BahanMasukFactory;

class BahanMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan = Bahan::all(); // pastikan nama model dengan PascalCase
        return view('bahan_masuk.index', compact('bahan'));

        // $bahan_masuk = BahanMasuk::all(); 
        // return view('bahan_masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bahan_masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_bahan' => 'required|integer',
            'kode_bahan' => 'required',
            'nama_bahan' => 'required',
            'id_stok_bahan' => 'required|integer',
            'id_jenis_bahan' => 'required|integer',
            'id_supplier' => 'required|integer',
            'harga_total' => 'required|integer',
            'harga_per_kg' => 'required|integer',
            'harga_per_g' => 'required|integer',
            'keterangan' => 'required',
        ]);

        // $bahan = new BahanMasuk;
        // $bahan ->id_bahan =$request->id_bahan;
        // $bahan ->kode_bahan =$request->kode_bahan;
        // $bahan ->nama_bahan =$request->nama_bahan;
        // $bahan ->id_stok_bahan =$request->id_stok_bahan;
        // $bahan ->id_jenis_bahan =$request->id_jenis_bahan;
        // $bahan ->id_supplier =$request->id_supplier;
        // $bahan ->harga_total =$request->harga_total;
        // $bahan ->harga_per_kg =$request->harga_per_kg;
        // $bahan ->harga_per_g =$request->harga_per_g;
        // $bahan ->keterangan =$request->keterangan;
        // $bahan ->save();



        Bahan::create($request->all());
        return redirect()->route('bahan_masuk.index')
                         ->with('success', 'Data berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bahan $id)
    {
        return view('bahan_masuk.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $id)
    {
        return view('bahan_masuk.edit', compact('index'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
