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
            'name' => 'dr. Lulung',
            'bio' => 'Dokter spesialis yang melakukan tes pemeriksaan Covid-19 dengan metode SWAB',
            'img' => 'drlulung.jpg',
            'slug' => 'dr-lulung',
            'experience' => 2,
            'specialty_id' => 3,
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

        DB::table('doctors')->insert([
            'name' => 'dr. Dita Mutia, Sp.THT-KL',
            'bio' => 'Konsultasi mengenai bagian Telinga, Hidung, Tenggorokan.',
            'img' => 'drdita.jpg',
            'slug' => 'dr-dita',
            'experience' => 10,
            'specialty_id' => 5,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Melly Maya Sari, Sp.KK',
            'bio' => 'Memberikan layanan di bidang kesehatan kulit dan kelamin seperti infeksi menular seksual, penyakit atau gangguan pada area kelamin serta masalah pada kulit seperti jerawat, bekas luka hingga kerontokan pada rambut dan penuaan dini atau perawatan kulit lainnya.',
            'img' => 'drmelly.jpg',
            'slug' => 'dr-melly',
            'experience' => 10,
            'specialty_id' => 6,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Dessy Gloria, Sp.A',
            'bio' => 'dr. Dessy Gloria, Sp.A, memberikan layanan di bidang kesehatan anak yang berkaitan dengan tumbuh kembang bayi dan anak, vaksinasi, penyakit infeksi, gangguan pernapasan dan pencernaan pada anak, serta alergi pada anak.',
            'img' => 'drdessy.jpg',
            'slug' => 'dr-dessy',
            'experience' => 10,
            'specialty_id' => 7,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Mairunzi, SpOG',
            'bio' => 'Spesialis Obstetri & Ginekologi memberikan layanan di bidang kesehatan reproduksi wanita seperti menangani masalah kesehatan reproduksi wanita, program kehamilan, perawatan kehamilan dan pasca persalinan, pemasangan kontrasepsi, gangguan menstruasi, dan lain-lain',
            'img' => 'drmairunzi.jpg',
            'slug' => 'dr-mairunzi',
            'experience' => 15,
            'specialty_id' => 8,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Suriana Dwi Sartika, Sp.PD',
            'bio' => 'dr. Suriana Dwi Sartika, Sp.PD memberikan layanan di bidang penyakit dalam seperti pengobatan diabetes, hipertensi, gangguan lambung, ginjal, gangguan saluran cerna serta penyakit kronis lainnya.',
            'img' => 'drsuriana.jpg',
            'slug' => 'dr-suriana',
            'experience' => 7,
            'specialty_id' => 9,
            'cost' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
