<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Louis Mario Wijaya',
            'email' => 'louism4rio@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'role_id' => 1,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]); 

        User::create([
            'name' => 'Karyna Budi Sanjaya',
            'email' => 'karyna@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]); 

        User::create([
            'name' => 'Shelfinna',
            'email' => 'shelfinna@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('345'),
            'role_id' => 3,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);
        
    }
}
