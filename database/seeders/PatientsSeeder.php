<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'name' => 'Patient Zero',
            'gender' => 'Male',
            'phone_number' => '+628123456767',
            'dob' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('patients')->insert([
            'name' => 'Patient One',
            'gender' => 'Male',
            'phone_number' => '+628123456767',
            'dob' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('patients')->insert([
            'name' => 'Patient Two',
            'gender' => 'Female',
            'phone_number' => '+628123456767',
            'dob' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
