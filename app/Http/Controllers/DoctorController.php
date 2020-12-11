<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Http\Requests\DoctorRequest;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Doctor $model)
    {
        return view('browseAllDoctor', ['doctors' => $model->paginate(9)]);
    }

    public function specialty($slug)
    {
        $idSpesialis = Specialty::where('slug', $slug)->first();
        if(isset($idSpesialis)){
            $doctors = Doctor::where('specialty_id', $idSpesialis->id)->paginate(9);
        }
        else{
            $doctors = Doctor::where('specialty_id', 2)->paginate(9);
        }

        return view('browseDoctor',['doctors' => $doctors, 'spesialis' => $idSpesialis]);

    }

    public function profile($slug)
    {
        $doctors = Doctor::where('slug', $slug)->first();
        return view('profileDoctor',['doctor' => $doctors]);

    }

    public function doctorManagement(Doctor $model)
    {
        return view('doctor.index', ['doctors' => $model->paginate(15)]);
    }

    public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        if ($doctor->appointment()->exists())
        {
            return back()->withStatus(__('Resource cannot be deleted due to existence of related resources.'));
        }
        else{
            $doctor->delete();
        }
        
        return back()->withStatus(__('Doctor Successfully Deleted'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $specialty = Specialty::all();
        return view('doctor.edit',['doctor' => $doctor,'specialties' => $specialty]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'slug' => 'required|unique:specialties,slug,'.$input["id"].',id',
            'name' => ['required', 'min:3'],
            'bio' => ['required', 'min:3'],
            'img' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
         ]);
        $input = $request->all();
        if (isset($request->img)) {
            $imageName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('doctor'), $imageName);
            $input["img"] = $imageName;
        }
        Doctor::findOrFail($input["id"])->update($input); 

        return redirect('doctor-management')->withStatus(__('Doctor Successfully Updated'));
    }

    public function add()
    {
        $specialty = Specialty::all();
        return view('doctor.add',['specialties' => $specialty]);
    }

    public function insert(DoctorRequest $request)
    {
        $specialty = new Doctor;
        $input = $request->all();
        if (isset($request->img)) {
            $imageName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('doctor'), $imageName);
            $input["img"] = $imageName;
        }   
        $specialty->create($input);

        return redirect('doctor-management')->withStatus(__('Doctor Successfully Added'));
    }

}
