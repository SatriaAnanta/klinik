<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    public function appointmentManagement(Appointment $model)
    {
        return view('appointment.index', ['appointments' => $model->paginate(15)]);
    }

    public function add()
    {
        $doctor = Doctor::all();
        $patient = Patient::all();
        return view('appointment.add',['doctors' => $doctor, 'patients' => $patient]);
    }

    public function insert(AppointmentRequest $request)
    {
        $appointment = new Appointment;
        $input = $request->all();
        $appointment->create($input);

        return redirect('appointment-management')->withStatus(__('Appointment Successfully Added'));
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $doctor = Doctor::all();
        $patient = Patient::all();

        return view('appointment.edit',['appointment' => $appointment, 'doctors' => $doctor , 'patients' => $patient]);
    }

    public function update(AppointmentRequest $request)
    {
        $input = $request->all();
        Appointment::findOrFail($input["id"])->update($input); 

        return redirect('appointment-management')->withStatus(__('Appointment Successfully Updated'));
    }

    public function delete($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        
        return back()->withStatus(__('Appointment Successfully Deleted'));
    }
}
