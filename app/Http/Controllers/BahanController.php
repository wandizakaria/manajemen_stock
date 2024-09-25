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
    public function edit(Bahan $bahan_masuk)
    {
        $supplier = Supplier::all();
        return view('pages.bahan_masuk.edit', compact('bahan_masuk', 'supplier'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'supplier_id' => 'required',
            'tgl_masuk' => 'required|date',
            'harga_per_kg' => 'required|numeric',
            'harga_per_g' => 'required|numeric',
            'harga_total' => 'required|numeric',
            'keterangan' => 'required|string',
        ]);

        $bahan = Bahan::findOrFail($id);

        $bahan->supplier_id = $request->input('supplier_id');
        $bahan->tgl_masuk = $request->input('tgl_masuk');
        $bahan->harga_per_kg = $request->input('harga_per_kg');
        $bahan->harga_per_g = $request->input('harga_per_g');
        $bahan->harga_total = $request->input('harga_total');
        $bahan->keterangan = $request->input('keterangan');

        $bahan->save();

        return redirect()->route('bahan_masuk.index')->with('success', 'Data bahan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bahan $bahan_masuk)
    {
        $bahan_masuk->delete();
        
        return redirect()->route('bahan_masuk.index')->with('success', 'Data bahan berhasil dihapus!');
    }
}
