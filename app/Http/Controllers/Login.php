<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class Login extends Controller
{
    public function index()
    {
        $anggota = new Anggota();

        return view('login-page', [
            'title' => 'Pustaka Tujuh',
            'anggotaAll' => $anggota->allAnggota(),
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $user = User::where('username', $credentials['username'])->get();
            $request->session()->regenerate();

            $remember = $request->remember;
            if (isset($remember) && !empty($remember)) {
                setcookie('username', $credentials['username'], time() + 4320);
                setcookie('password', $credentials['password'], time() + 4320);
            } else {
                setcookie('username', '');
                setcookie('password', '');
            }

            return redirect()->intended('/')->with([
                'success' => 'Login berhasil! Selamat datang ' . auth()->user()->nama . '!',
            ]);
            // return dd(auth()->user()->id_user);
        }

        return back()->with([
            'failed' => 'Login gagal! Mohon masukkan username dan password yang benar',
        ]);
        // return dd('Gagal');
    }

    public function cari()
    {
        $title = 'Katalog';
        $katalog = Katalog::filter()->orderBy('id_katalog')->paginate(6);
        return view('components.cari-katalog', compact('title', 'katalog'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
