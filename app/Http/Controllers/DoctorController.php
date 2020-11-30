<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Doctor $model)
    {
        return view('browseDoctor', ['doctors' => $model->paginate(6)]);
    }

    public function specialty($slug)
    {
        $idSpesialis = Specialty::where('slug', $slug)->first();
        if(isset($idSpesialis)){
            $doctors = Doctor::where('specialty_id', $idSpesialis->id)->get();
        }
        else{
            $doctors = Doctor::where('specialty_id', 1)->get();
        }
        //$doctors = Doctor::where('specialty_id', $idSpesialis->id)->get();
        //dd($doctors);
        //$user = Doctor::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        return view('browseDoctor',['doctors' => $doctors, 'spesialis' => $idSpesialis]);

    }

    public function profile($slug)
    {
        $doctors = Doctor::where('slug', $slug)->first();
        return view('profileDoctor',['doctor' => $doctors]);

    }

}
