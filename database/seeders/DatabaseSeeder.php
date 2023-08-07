<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SupplierSeeder::class,
            DesadvSeeder::class
        ]);

        \App\Models\User::factory()->create([
            'name' => 'adnim',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
