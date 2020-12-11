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
            'description' => 'Dokter umum merupakan istilah yang digunakan untuk dokter yang berfokus pada pengobatan masalah kesehatan dan gejala umum yang dialami pasien. Seorang dokter umum juga dikenal sebagai dokter layanan tingkat pertama, di mana dokter umum berperan dalam memberikan pencegahan, diagnosis, dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan',
            'img' => 'umum.jpg',
            'slug' => 'dokter-umum',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Gigi',
            'description' => 'Dokter gigi adalah dokter yang memiliki keahlian khusus di bidang kesehatan gigi dan mulut. Peran dokter gigi melakukan diagnosis, mengobati, dan mencegah masalah gigi dan mulut. Namun beberapa tindakan hanya bisa dilakukan oleh dokter gigi yang telah menyelesaikan pendidikan spesialis.',
            'img' => 'gigi.jpg',
            'slug' => 'dokter-gigi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter SWAB',
            'description' => 'Dokter SWAB adalah dokter spesialis yang melakukan tes pemeriksaan Covid-19 dengan metode SWAB',
            'img' => 'swab.jpg',
            'slug' => 'dokter-swab',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Mata',
            'description' => 'Dokter spesialis mata adalah dokter yang memiliki keahlian spesifik dalam memberikan pemeriksaan, perawatan, serta diagnosis yang berhubungan dengan penyakit mata dan gangguan penglihatan. Bukan hanya itu, dokter spesialis mata juga memiliki kompetensi dalam menangani operasi mata.',
            'img' => 'mata.jpg',
            'slug' => 'dokter-mata',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter THT',
            'description' => 'Dokter spesialis THT adalah dokter yang memiliki keahlian spesifik dalam mengobati penyakit yang berkaitan dengan telinga, hidung, dan tenggorokan. Selain itu, dokter spesialis THT juga bertugas mengatasi sejumlah penyakit yang terjadi di kepala dan leher.',
            'img' => 'tht.jpg',
            'slug' => 'dokter-tht',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Kulit',
            'description' => 'Dokter kulit adalah seorang dokter yang berperan dalam menangani dan mengobati berbagai kondisi atau penyakit pada kulit, rambut, kuku, dan selaput lendir (lapisan di dalam mulut, hidung, dan kelopak mata), permasalahan pada kelamin, namun dokter kulit juga menangani perawatan kulit sehat untuk menjaga kecantikan. Dokter kulit harus menempuh pendidikan spesialisasi selama setidaknya 3,5 tahun hingga diberi gelar SpKK (Spesialis Kulit dan Kelamin)',
            'img' => 'kulit.jpg',
            'slug' => 'dokter-kulit',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Anak',
            'description' => 'Dokter Spesialis Anak atau ahli pediatri adalah dokter yang memiliki fokus pada kesehatan fisik, mental, emosional, tumbuh kembang, dan sosial anak-anak, sejak mereka dilahirkan hingga menjadi remaja, yakni pada sampai usia 18 tahun.',
            'img' => 'anak.jpg',
            'slug' => 'dokter-anak',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Kandungan',
            'description' => 'Dokter kandungan adalah dokter yang mendalami kesehatan sistem reproduksi wanita. Dokter yang sering juga disebut sebagai dokter spesialis obstetri dan ginekologi atau disingkat ‘obgin’ inilah yang utamanya berperan dalam membantu memeriksa ibu hamil, membantu persalinan, dan perawatan setelah persalinan. Meski sebenarnya beragam kondisi dan penyakit yang memengaruhi sistem reproduksi wanita juga dapat ditangani oleh dokter kandungan.',
            'img' => 'kandungan.jpg',
            'slug' => 'dokter-kandungan',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('specialties')->insert([
            'title' => 'Dokter Penyakit Dalam',
            'description' => 'Dokter penyakit dalam adalah dokter spesialis yang menangani berbagai keluhan, gejala, dan masalah kesehatan terkait hampir seluruh sistem organ dalam tubuh pasien dewasa dan lansia. Dokter penyakit dalam memiliki keahlian dan kompetensi untuk menangani berbagai penyakit yang tidak dapat ditangani oleh dokter umum.',
            'img' => 'dalam.jpg',
            'slug' => 'dokter-penyakit-dalam',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
