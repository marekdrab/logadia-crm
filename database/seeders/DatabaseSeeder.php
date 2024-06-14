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
        User::factory()->create([
            'name' => 'marek',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $this->call([
            DiagnosisTableSeeder::class,
            PatientsTableSeeder::class
        ]);
    }
}
