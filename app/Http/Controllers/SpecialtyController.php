<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function index(Specialty $model)
    {
        return view('homePage', ['specialties' => $model->paginate(6)]);
    }
}
