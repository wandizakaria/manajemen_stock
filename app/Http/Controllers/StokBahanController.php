<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\JenisBahan;
use Illuminate\Http\Request;
use App\Models\StokBahan;
use App\Models\Supplier;
use Illuminate\Support\Facades\Log;

class StokBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan_masuk = Bahan::all();
        $stok_bahan = StokBahan::all();
        return view('pages.stok_bahan.index', compact('stok_bahan', 'bahan_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahan_masuk = Bahan::with('supplier')->get();
        return view('pages.stok_bahan.create', compact('bahan_masuk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bahan_id' => 'required',
            'jenis' => 'required',
            'jumlah_gram' => 'required|numeric',
            'jumlah_keluar' => 'required|numeric',
            'tgl_keluar' => 'required|date',
            'keterangan' => 'required|string',
        ]);

        $bahanMasuk = Bahan::find($request->bahan_id);

        if ($bahanMasuk) {
            $supplier = $bahanMasuk->supplier;

            if ($supplier) {
                $supplier->stok -= $request->jumlah_keluar;

                if ($supplier->stok < 0) {
                    return redirect()->back()->with('error', 'Stok tidak mencukupi untuk pengurangan.');
                }

                $supplier->save();

                $bahanMasuk->harga_per_g -= $request->jumlah_gram;

                if ($bahanMasuk->harga_per_g < 0) {
                    return redirect()->back()->with('error', 'Jumlah gram tidak mencukupi.');
                }

                $bahanMasuk->save();

                $stokBahan = new StokBahan();
                $stokBahan->bahan_id = $request->bahan_id;
                $stokBahan->jenis = $request->jenis;
                $stokBahan->jumlah_gram = $request->jumlah_gram;
                $stokBahan->jumlah_keluar = $request->jumlah_keluar;
                $stokBahan->tgl_keluar = $request->tgl_keluar;
                $stokBahan->keterangan = $request->keterangan;
                $stokBahan->save();

                return redirect()->route('stok_bahan.index')->with('success', 'Data stok bahan dan jumlah gram berhasil dikurangi.');
            } else {
                return redirect()->back()->with('error', 'Supplier tidak ditemukan.');
            }
        }

        return redirect()->back()->with('error', 'Data Bahan Masuk tidak ditemukan.');
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
    public function destroy(StokBahan $stok_bahan)
    {
        $stok_bahan->delete();

        return redirect()->route('stok_bahan.index')->with('success', 'Data stok bahan berhasil dihapus.');
    }
}
