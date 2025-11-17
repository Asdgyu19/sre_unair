<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController
{

    public function show()
    {
        return view('profile.show', [
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'profile_photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'current_password' => ['nullable', 'required_with:password'],
            'password' => ['nullable', 'confirmed', Password::min(8)],
        ]);

        // Update basic info
        $user->name = $request->name;
        $user->email = $request->email;

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            // Store new photo
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->profile_photo = $path;
        }

        // Handle password change
        if ($request->filled('password')) {
            if (!password_verify($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect.']);
            }
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }

    public function deletePhoto()
    {
        $user = Auth::user();
        
        if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
            Storage::disk('public')->delete($user->profile_photo);
        }
        
        $user->profile_photo = null;
        $user->save();

        return back()->with('success', 'Profile photo deleted successfully!');
    }
}
