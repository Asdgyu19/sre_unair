<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BoendUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create BOEND user for testing role-based access
        User::updateOrCreate(
            ['email' => 'boend@sre.unair.ac.id'],
            [
                'name' => 'BOEND Test User',
                'password' => Hash::make('password123'),
                'role' => 'boend',
            ]
        );

        // Ensure admin user exists with correct role
        User::updateOrCreate(
            ['email' => 'admin@sre.unair.ac.id'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );
    }
}