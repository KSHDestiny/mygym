<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Aung Aung",
            'email' => "aungaung@gmail.com"
        ]);

        User::factory()->create([
            'name' => "Hla Hla",
            'email' => "hlahla@gmail.com"
        ]);

        User::factory()->create([
            'name' => "Kaung Sat",
            'email' => "kaungsat@gmail.com",
            'role' => 'instructor'
        ]);

        User::factory()->create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'role' => 'admin'
        ]);

        User::factory()->count(10)->create();

        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
