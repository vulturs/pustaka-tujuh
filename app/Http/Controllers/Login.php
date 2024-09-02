<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('login-page', ['title' => 'Login']);
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
