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
            'slug' => 'dokter-umum',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Gigi',
            'description' => 'Dokter gigi umum merupakan praktisi kesehatan yang memberikan layanan terhadap kondisi gigi dan mulut pasien',
            'img' => 'tes.jpg',
            'slug' => 'dokter-gigi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter SWAB',
            'description' => 'Pemeriksaan Covid-19 dengan metode SWAB',
            'img' => 'tes.jpg',
            'slug' => 'dokter-swab',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
