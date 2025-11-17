<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{
    public function index()
    {
        // Ambil semua user kecuali admin yang sedang login, urutkan dari yang terbaru
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)],
            'role' => ['required', Rule::in(['admin', 'user', 'boend'])],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.user.index')->with('success', 'Pengguna baru berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:40', Rule::unique('users')->ignore($user->id)],
            'role' => ['required', Rule::in(['admin', 'user', 'boend'])],
            // Password bersifat opsional, hanya divalidasi jika diisi
            'password' => ['nullable', 'string', 'confirmed', Password::min(8)],
        ]);

        // Update data dasar
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        // Jika ada password baru, hash dan update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        // Tambahan keamanan: pastikan admin tidak bisa menghapus dirinya sendiri
        if ($user->id === Auth::id()) {
            return redirect()->route('admin.user.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}