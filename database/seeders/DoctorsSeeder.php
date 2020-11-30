<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name' => 'dr.PlaceHolder',
            'bio' => 'Dokter PlaceHolder merupakan tenaga medis PlaceHolder',
            'img' => 'tes.jpg',
            'slug' => 'dr-placeHolder',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
