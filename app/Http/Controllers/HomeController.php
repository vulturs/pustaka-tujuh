<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        return view('home', [
            'title' => 'Dashboard',
            'users' => User::count(),
            'anggota' => Anggota::count()
        ]);
    }
}
