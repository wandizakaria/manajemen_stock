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
        return view('pages.bahan_masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input sesuai dengan field yang ada di form
        $request->validate([
            'kode_bahan' => '',
            'nama_bahan' => '',
            'stok_bahan_id' => '',
            'jenis_bahan_id' => '', // Mengubah ke string sesuai input form
            'supplier_id' => '', // Mengubah ke string sesuai input form
            'tgl_masuk' => '',
            'harga_total' => '',
            'harga_per_kg' => '',
            'harga_per_g' => '',
            'keterangan' => '',
        ]);

        // Membuat data baru di tabel 'bahan'
        Bahan::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bahan_masuk.index')->with('success', 'Data berhasil dibuat.');
    }




    /**
     * Display the specified resource.
     */
    public function show(Bahan $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $id) {}

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
