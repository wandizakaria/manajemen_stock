<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produksi;
use App\Models\StokBahan;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = Produksi::all();
        return View('pages.produksi.index', ['produksi' => $produksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produksi = Produksi::all();
        return view('pages.produksi.create', compact('produksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_produksi' => 'required|string|max:255',
            'jumlah_produksi' => 'required|numeric',
            'tgl_produksi' => 'required|date',
            'keterangan' => 'required|string|max:500',
        ]);

        $produksi = new Produksi();
        $produksi->jenis_produksi = $request->jenis_produksi;
        $produksi->jumlah_produksi = $request->jumlah_produksi;
        $produksi->tgl_produksi = $request->tgl_produksi;
        $produksi->keterangan = $request->keterangan;

        $produksi->save();

        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produksi = Produksi::findOrFail($id);

        return view('pages.produksi.edit', compact('produksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis_produksi' => 'required|string|max:255',
            'jumlah_produksi' => 'required|numeric',
            'tgl_produksi' => 'required|date',
            'keterangan' => 'required|string|max:500',
        ]);

        $produksi = Produksi::findOrFail($id);

        $produksi->jenis_produksi = $request->jenis_produksi;
        $produksi->jumlah_produksi = $request->jumlah_produksi;
        $produksi->tgl_produksi = $request->tgl_produksi;
        $produksi->keterangan = $request->keterangan;

        $produksi->save();

        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil diupdate.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produksi $produksi)
    {
        $produksi->delete();

        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil dihapus.');
    }
}
