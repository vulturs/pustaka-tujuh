<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components/users-page', [
            'title' => 'Data Pengguna',
            'users' => User::filter()->orderBy('id_user')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.users.create-users-page',  [
            'title' => "Tambah Pengguna",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        User::create($validated);
        return redirect()->route('users')->with('success', 'Data pengguna berhasil ditambahkan');
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
        $users = User::find($id);


        return view('components.users.edit-users-page', [
            'title' => "Edit Data Pengguna",
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);

        if (is_null($users)) {
            return redirect()->route('user')->with('error', 'Pengguna tidak ditemukan.');
        }

        $valid = $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string',
        ]);

        User::where('id_user', $users->id_user)->update($valid);

        return redirect()->route('users')->with('success', 'Pengguna berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);

        if (is_null($users)) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        }

        $users->delete();
        return redirect()->route('users')->with('success', 'Pengguna berhasil dihapus');
    }
}
