<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bahan;
use App\Models\StokBahan;
use App\Models\Produksi;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menghitung jumlah data dari setiap model
        $user = User::count();
        $bahan = Bahan::count(); // Menggunakan model Bahan, sesuai dengan import
        $stok_bahan = StokBahan::count();
        $produksi = Produksi::count();

        // Mengirim data ke view dashboard
        return view('home.index', compact('user', 'bahan', 'stok_bahan', 'produksi'));
    }


    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
