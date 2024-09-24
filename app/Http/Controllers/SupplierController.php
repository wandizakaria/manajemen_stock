<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('pages.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kode_supplier' => 'required|string|max:255',
            'nama_supplier' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15', 
            'nama_bahan' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
        ]);

        // Simpan data
        Supplier::create([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'nama_bahan' => $request->nama_bahan,
            'stok' => $request->stok,
        ]);

        // Redirect setelah menyimpan
        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil ditambahkan.');
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
        // Ambil data supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Kirim data ke view untuk diedit
        return view('pages.supplier.edit', compact('supplier'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'kode_supplier' => 'required|string|max:255',
            'nama_supplier' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'nama_bahan' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
        ]);

        // Temukan supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Perbarui data supplier
        $supplier->update([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'nama_bahan' => $request->nama_bahan,
            'stok' => $request->stok,
        ]);

        // Redirect setelah memperbarui
        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil diperbarui.');
    }
}
