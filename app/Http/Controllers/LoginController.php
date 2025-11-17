<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses autentikasi login
    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cek apakah email ada di database menggunakan Model User
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                
                // View Anda berada di resources/views/admin/dashboard.blade.php
                return view('admin.dashboard', ['user' => $user]);
            } else {
                // Jika password salah
                return back()->withErrors(['password' => 'Password yang kamu masukkan salah!']);
            }
        } else {
            // Jika email tidak ditemukan
            return back()->withErrors(['email' => 'Email tidak terdaftar!']);
        }
    }

    // Menampilkan Dashboard
    public function dashboard()
    {
        // *** PERBAIKAN DI SINI ***
        // Juga perbaiki pemanggilan view di fungsi ini
        return view('admin.dashboard');
    }
}
