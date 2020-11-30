<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            'title' => 'Dokter Umum',
            'description' => 'Dokter umum merupakan tenaga medis',
            'img' => 'tes.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
