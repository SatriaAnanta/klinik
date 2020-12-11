<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'doctor_id',
        'patient_id',
        'appointment_time',
        'status',
    ];

    protected $attributes = [
        'status' => 'Pending',
    ];

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

}
