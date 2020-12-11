<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'title' => 'Tambal Gigi',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'doctor_id' => 1,
            'patient_id' => 1,
            'appointment_time' => now(),
            'status' => 'Confirmed',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

