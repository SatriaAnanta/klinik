<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'bio',
        'img',
        'slug',
        'experience',
        'cost',
        'specialty_id',
    ];

    protected $attributes = [
        'img' => 'default.jpg',
        'experience' => 1,
        'cost' => 50000,
        
    ];

    // public function specialty()
    // {
    //     return $this->belongsTo('App\Models\Specialty','specialty_id');
    // }

    public function specialty(){
        return $this->belongsTo(Specialty::class,'specialty_id');
    }
}
