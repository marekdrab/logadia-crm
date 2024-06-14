<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('diagnosis')->insert([
            ['name' => 'diagnosis1'],
            ['name' => 'diagnosis2'],
            ['name' => 'diagnosis3'],
        ]);
    }
}
