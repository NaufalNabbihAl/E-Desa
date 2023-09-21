<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login',  ['title' => 'Login | E-Desa']);
    }

    public function loginPost(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'warga') {
                return redirect('/')->with('success', 'Login Berhasil');
            } else {
                return redirect('/main/jadwalkegiatan')->with('success', 'Login Berhasil');
            }
        } else {
            return back()->with('error', 'Username atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
