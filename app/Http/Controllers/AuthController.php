<?php

namespace App\Http\Controllers;

use App\Models\User; // Tambahkan ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Tambahkan ini
use Illuminate\Support\Facades\Auth; // Tambahkan ini untuk nanti login

class AuthController extends Controller
{
    // Menampilkan halaman register
    public function showRegister() {
        return view('auth.register');
    }

    // Memproses data register
    public function register(Request $request) {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    // Menampilkan halaman login
public function showLogin() {
    return view('auth.login');
}

// Memproses login
public function login(Request $request) {
    // Validasi input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Coba mencocokkan email & password di database
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate(); // Untuk keamanan session

        // Redirect ke dashboard (nanti kita buat dashboard-nya)
        return redirect()->intended('/dashboard');
    }

    // Jika gagal, balikkan ke login dengan pesan error
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
}

// Fitur Logout
public function logout(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
}
}