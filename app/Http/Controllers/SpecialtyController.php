<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Requests\SpecialtyRequest;

class SpecialtyController extends Controller
{
    public function index(Specialty $model)
    {
        return view('homePage', ['specialties' => $model->paginate(6)]);
    }

    public function specialtyManagement(Specialty $model)
    {
        return view('specialty.index', ['specialties' => $model->paginate(15)]);
    }
    public function add()
    {
        return view('specialty.add');
    }

    public function insert(SpecialtyRequest $request)
    {
        //auth()->specialty()->insert($request->all());
        $specialty = new Specialty;   
        $specialty->create($request->all());


        return back()->withStatus(__('Specialty Successfully Added'));
    }
}
