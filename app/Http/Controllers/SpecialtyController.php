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

    public function edit($id)
    {
        $specialty = Specialty::findOrFail($id);
        return view('specialty.edit',['specialty' => $specialty]);
    }

    public function update(Request $request,Specialty $model)
    {
        $input = $request->all();
        $request->validate([
            'slug' => 'required|unique:specialties,slug,'.$input["id"].',id',
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
         ]);
        $input = $request->all();
        Specialty::findOrFail($input["id"])->update($input); 

        return redirect('specialty-management')->withStatus(__('Specialty Successfully Updated'));
    }

    public function delete($id)
    {
        $specialty = Specialty::findOrFail($id);
        if ($specialty->doctor()->exists())
        {
            return back()->withStatus(__('Resource cannot be deleted due to existence of related resources.'));
        }
        else{
            $specialty->delete();
        }

        return back()->withStatus(__('Specialty Successfully Deleted'));
    }

    public function insert(SpecialtyRequest $request)
    {
        $specialty = new Specialty;   
        $specialty->create($request->all());

        //return back()->withStatus(__('Specialty Successfully Added'));
        return redirect('specialty-management')->withStatus(__('Specialty Successfully Added'));
    }
}
