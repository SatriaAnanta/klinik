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
            'img' => 'default.jpg',
            'slug' => 'dr-placeHolder',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Asep',
            'bio' => 'Dokter Asep merupakan tenaga medis',
            'img' => 'default.jpg',
            'slug' => 'dr-asep',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Lulung',
            'bio' => 'Dokter Asep merupakan tenaga medis',
            'img' => 'default.jpg',
            'slug' => 'dr-lulung',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // DB::table('doctors')->insert([
        //     'name' => 'dr. Ina',
        //     'bio' => 'Dokter ina merupakan tenaga medis junior',
        //     'img' => 'https://image.freepik.com/free-photo/joyful-young-female-doctor-medical-robe-with-stethoscope-puts-hands-together-chin-looks-side-isolated-orange-background-with-copy-space_141793-34476.jpg',
        //     'slug' => 'dr-ina',
        //     'experience' => 1,
        //     'specialty_id' => 1,
        //     'cost' => 1500,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Dimas',
            'bio' => 'Dokter Asep merupakan tenaga medis penanganan covid',
            'img' => 'default.jpg',
            'slug' => 'dr-dimas',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
