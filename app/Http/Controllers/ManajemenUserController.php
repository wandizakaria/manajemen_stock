<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ManajemenUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('pages.manajemen_user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::select('level')->distinct()->get();
        return view('pages.manajemen_user.create', compact('user'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => '',
            'username' => '',
            'level' => '',
            'password' => '',
        ]);

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'level' => $request->input('level'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('manajemen_user.index')->with('success', 'User berhasil ditambahkan!');
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
        $user = User::findOrFail($id);

        $levels = User::select('level')->distinct()->pluck('level');

        return view('pages.manajemen_user.edit', compact('user', 'levels'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'level' => 'required|string',
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->level = $request->input('level');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('manajemen_user.index')->with('success', 'Data user berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $manajemen_user)
    {
        $manajemen_user->delete();

        return redirect()->route('manajemen_user.index')->with('success', 'Data user berhasil dihapus.');
    }
}
