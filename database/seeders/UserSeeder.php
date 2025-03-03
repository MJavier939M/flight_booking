<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('testpassword'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Guest User',
                'email' => 'guest@example.com',
                'password' => Hash::make('guestpassword'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
