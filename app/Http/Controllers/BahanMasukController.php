<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan;


class BahanMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan = Bahan::all();
        return view('pages.bahan_masuk.index', compact('bahan'));
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

        Bahan::create($request->all());

        return redirect()->route('bahan_masuk.index')->with('success', 'Data berhasil dibuat.');
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
