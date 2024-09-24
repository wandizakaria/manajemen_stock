<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\JenisBahan;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BahanController extends Controller
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
        $supplier = Supplier::all();
        $data_bahan = Bahan::with('supplier')->get();
        return view('pages.bahan_masuk.create', compact('data_bahan', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => '',
            'tgl_masuk' => '',
            'harga_total' => '',
            'harga_per_kg' => '',
            'harga_per_g' => '',
            'keterangan' => '',
        ]);

        Bahan::create([
            'supplier_id' => $request->supplier_id,
            'tgl_masuk' => $request->tgl_masuk,
            'harga_total' => $request->harga_total,
            'harga_per_kg' => $request->harga_per_kg,
            'harga_per_g' => $request->harga_per_g,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('bahan_masuk.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bahan $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $bahan)
    {
        $supplier = Supplier::all();
        return view('pages.bahan_masuk.edit', compact('bahan', 'supplier'));
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
