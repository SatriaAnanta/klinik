<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    public function patientManagement(Patient $model)
    {
        return view('patient.index', ['patients' => $model->paginate(15)]);
    }

    public function add()
    {
        return view('patient.add');
    }

    public function insert(PatientRequest $request)
    {
        $patient = new Patient;   
        $patient->create($request->all());

        return redirect('patient-management')->withStatus(__('Patient Successfully Added'));
    }

    public function delete($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        // if ($patient->appointment()->exists())
        // {
        //     return back()->withStatus(__('Resource cannot be deleted due to existence of related resources.'));
        // }
        // else{
        //     $patient->delete();
        // }

        return back()->withStatus(__('Patient Successfully Deleted'));
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patient.edit',['patient' => $patient]);
    }

    public function update(Request $request,Patient $model)
    {
        $request->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'dob' => ['required'],
         ]);

        $input = $request->all();
        Patient::findOrFail($input["id"])->update($input); 

        return redirect('patient-management')->withStatus(__('Patient Successfully Updated'));
    }
}
