<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // \App\Models\User::factory(10)->create(), // Contoh seeder user default
            BalihoSeeder::class, // <-- TAMBAHKAN INI
            InstansiSeeder::class, // <-- TAMBAHKAN INI
            LayananSeeder::class, // <-- TAMBAHKAN INI
            // Seeder lain yang mungkin Anda miliki
        ]);
    }
}
