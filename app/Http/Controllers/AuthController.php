<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Memproses pendaftaran akun
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|alpha_dash|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.unique' => 'Nama pengguna sudah digunakan.',
            'username.alpha_dash' => 'Nama pengguna hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('petugas.dashboard')
            ->with('success', 'Pendaftaran berhasil.');
    }

    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Memproses login
    
    public function login(Request $request)
    {
    $credentials = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (!Auth::attempt($credentials)) {
        return back()->withErrors([
            'username' => 'Nama pengguna atau kata sandi salah.',
        ])->onlyInput('username');
    }

    $request->session()->regenerate();

    $user = Auth::user();

    if ($user->role === 'pemilik') {
        return redirect()->route('pemilik.dashboard');
    }

    if ($user->role === 'petugas') {
        return redirect()->route('petugas.dashboard');
    }

    Auth::logout();

    return redirect()->route('login')->withErrors([
        'username' => 'Role akun tidak dikenali.',
    ]);
}

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended(route('login'));
    }
}
