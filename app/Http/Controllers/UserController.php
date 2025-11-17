<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input awal (struktur data sudah benar)
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari user berdasarkan email
        $user = \App\Models\User::where('email', $request->email)->first();

        // Kalau user tidak ditemukan → salah di email
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email tidak ditemukan.',
            ])->onlyInput('email');
        }

        // Kalau user ditemukan tapi password salah
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Password yang Anda masukkan salah.',
            ])->onlyInput('email');
        }

        // Login berhasil
        Auth::login($user, $request->filled('remember'));
        $request->session()->regenerate();

        // Redirect sesuai role
        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil! Selamat datang, Admin.');
            case 'boend':
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil! Selamat datang, BOEND.');
            case 'bod_boe':
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil! Selamat datang.');
            case 'user':
            default:
                return redirect()->route('home')->with('success', 'Login berhasil!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('info', 'Anda telah berhasil logout.');
    }
}
