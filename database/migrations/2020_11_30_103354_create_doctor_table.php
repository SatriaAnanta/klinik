<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->text('bio');
            $table->text('img');
            $table->string('slug')->unique();
            $table->integer('experience');
            $table->integer('specialty_id');
            $table->integer('cost');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}

// php artisan make:migration create_patients_table
// php artisan make:model Patient
// php artisan make:controller PatientController
// php artisan make:seeder PatientsSeeder
