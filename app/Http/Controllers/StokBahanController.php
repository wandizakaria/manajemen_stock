<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\JenisBahan;
use Illuminate\Http\Request;
use App\Models\StokBahan;
use App\Models\Supplier;

class StokBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_bahan = JenisBahan::all();
        $bahan_masuk = Bahan::all();
        $stok_bahan = StokBahan::all();
        return view('pages.stok_bahan.index', compact('stok_bahan', 'bahan_masuk', 'jenis_bahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahan_masuk = Bahan::with('supplier')->get();
        $jenis_bahan = JenisBahan::all();
        return view('pages.stok_bahan.create', compact('bahan_masuk', 'jenis_bahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'bahan_id' => 'required|exists:bahan,id',
            'jenis_id' => 'required|exists:jenis_bahan,id',
            'jumlah_keluar' => 'required|integer|min:1',
            'tgl_keluar' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        // Temukan bahan yang akan dikurangi stoknya
        $bahan = Bahan::find($request->bahan_id);
        if (!$bahan) {
            return redirect()->back()->with('error', 'Bahan tidak ditemukan.');
        }

        // Ambil data supplier dari bahan
        $supplier = $bahan->supplier; // Assuming `supplier` is a relationship method

        // Cek stok di supplier dalam satuan gram
        $stok_gram = $supplier->stok;

        // Cek apakah stok mencukupi
        if ($stok_gram < $request->jumlah_keluar) {
            return redirect()->back()->with('error', 'Stok bahan tidak mencukupi.');
        }

        // Kurangi stok bahan di supplier
        $stok_gram -= $request->jumlah_keluar;

        // Simpan stok yang sudah dikurangi ke dalam supplier
        $supplier->stok = $stok_gram;

        // Debug: Check if supplier is saved successfully
        if (!$supplier->save()) {
            return redirect()->back()->with('error', 'Gagal mengurangi stok.');
        }

        // Simpan data transaksi ke stok_bahan
        $stokBahan = StokBahan::create([
            'bahan_id' => $request->bahan_id,
            'jenis_id' => $request->jenis_id,
            'jumlah_gram' => $request->jumlah_keluar,
            'tgl_keluar' => $request->tgl_keluar,
            'keterangan' => $request->keterangan,
        ]);

        // Debug: Check if stokBahan is saved successfully
        if (!$stokBahan) {
            return redirect()->back()->with('error', 'Gagal menyimpan data transaksi.');
        }

        return redirect()->route('stok_bahan.index')->with('success', 'Stok berhasil dikurangi.');
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
        //
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
