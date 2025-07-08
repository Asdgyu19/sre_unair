<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan updateOrCreate untuk menghindari duplikasi data jika seeder dijalankan berkali-kali.
        // Data akan dicari berdasarkan 'email', jika tidak ada maka akan dibuat, jika ada maka akan di-update.

        // --- Akun Administrator ---
        // Dibuat khusus agar mudah diingat dan digunakan untuk development.
        User::updateOrCreate(
            ['email' => 'admin@sreunair.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('adminsreunivnair2025'), // Ganti 'password' dengan password yang aman
                'role' => 'admin',
                'email_verified_at' => now(), // Langsung verifikasi email
            ]
        );

        // --- Akun BOEND (Badan Otonom dan Eksekutif Non-Departemen) ---
        User::updateOrCreate(
            ['email' => 'boend@sreunair.com'],
            [
                'name' => 'Anggota BOEND',
                'password' => Hash::make('sreunivnair2025'),
                'role' => 'boend',
                'email_verified_at' => now(),
            ]
        );

        // // --- Akun User Biasa ---
        // User::updateOrCreate(
        //     ['email' => 'user@sreunair.com'],
        //     [
        //         'name' => 'User Biasa',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'user',
        //         'email_verified_at' => now(),
        //     ]
        // );

    }
}
