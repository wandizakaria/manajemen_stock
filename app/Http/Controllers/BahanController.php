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
        return view('pages.bahan_masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validateData= $request->validate([
            'kode_bahan' => 'required|string',
            'nama_bahan' => 'required|string',
            'stok_bahan_id' => 'required|integer',
            'jenis_bahan_id' => 'required|string',
            'supplier_id' => 'required|string',
            'tgl_masuk' => 'required|date',
            'harga_total' => 'required|numeric',
            'harga_per_kg' => 'required|numeric',
            'harga_per_g' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        dd($validateData);

        // Menyimpan supplier baru jika tidak ada
        $supplier = Supplier::firstOrCreate([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->supplier_id,
            'alamat' => $request->alamat, // Menggunakan alamat dari input hidden
            'no_telepon' => $request->no_telepon, // Menggunakan no_telepon dari input hidden
        ]);

        // Menyimpan jenis bahan baru jika tidak ada
        $jenisBahan = JenisBahan::firstOrCreate(['jenis_bahan' => $request->jenis_bahan_id]);

        // Membuat data baru di tabel 'bahan'
        Bahan::create([
            'kode_bahan' => $request->kode_bahan,
            'nama_bahan' => $request->nama_bahan,
            'stok_bahan_id' => $request->stok_bahan_id,
            'jenis_bahan_id' => $jenisBahan->id,
            'supplier_id' => $supplier->id,
            'tgl_masuk' => $request->tgl_masuk,
            'harga_total' => $request->harga_total,
            'harga_per_kg' => $request->harga_per_kg,
            'harga_per_g' => $request->harga_per_g,
            'keterangan' => $request->keterangan,
        ]);

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
