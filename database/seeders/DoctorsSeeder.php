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
            'name' => 'dr. Farah',
            'bio' => 'Memberikan layanan di bidang kesehatan umum seperti penanganan demam, gangguan lambung, gangguan saluran cerna, dan lain-lain yang masih belum memerlukan bantuan tenaga dokter spesialis.',
            'img' => 'drfarah.jpg',
            'slug' => 'dr-farah',
            'experience' => 5,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Sylvia',
            'bio' => 'Memberikan layanan di bidang kesehatan umum seperti penanganan demam, gangguan lambung, gangguan saluran cerna, dan lain-lain yang masih belum memerlukan bantuan tenaga dokter spesialis.',
            'img' => 'drsylvia.jpg',
            'slug' => 'dr-sylvia',
            'experience' => 6,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Lulung',
            'bio' => 'Memberikan layanan di bidang kesehatan umum seperti penanganan demam, gangguan lambung, gangguan saluran cerna, dan lain-lain yang masih belum memerlukan bantuan tenaga dokter spesialis.',
            'img' => 'drlulung.jpg',
            'slug' => 'dr-lulung',
            'experience' => 1,
            'specialty_id' => 1,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Rachel Emteta Anastasya',
            'bio' => 'drg. Rachel Emteta Anastasya memberikan layanan di bidang kesehatan gigi dan mulut seperti masalah gigi berlubang, susunan gigi yang tidak beraturan, pertumbuhan gigi bungsu yang bermasalah, gusi bengkak, serta adanya mucocele pada rongga mulut, dan lain-lain.',
            'img' => 'drrachel.jpg',
            'slug' => 'dr-rachel',
            'experience' => 7,
            'specialty_id' => 2,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'drg. Hernari Esterina , Sp.KG',
            'bio' => 'drg. Hernari Esterina , Sp.KG memberikan layanan di bidang kesehatan gigi dan mulut seperti masalah gigi berlubang, susunan gigi yang tidak beraturan, pertumbuhan gigi bungsu yang bermasalah, gusi bengkak, serta adanya mucocele pada rongga mulut, dan lain-lain.',
            'img' => 'drhernari.jpg',
            'slug' => 'dr-hernari',
            'experience' => 7,
            'specialty_id' => 2,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Ayu, Sp.M',
            'bio' => 'Memberikan layanan medis meliputi Konsultasi kesehatan terkait penyakit mata.',
            'img' => 'drayu.jpg',
            'slug' => 'dr-ayu',
            'experience' => 5,
            'specialty_id' => 4,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Andi, Sp.M',
            'bio' => 'Memberikan layanan medis meliputi Konsultasi kesehatan terkait penyakit mata.',
            'img' => 'drandi.jpg',
            'slug' => 'dr-andi',
            'experience' => 22,
            'specialty_id' => 4,
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

    }
}
