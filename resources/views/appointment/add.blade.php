@extends('layouts.app', ['activePage' => 'add-appointment', 'titlePage' => __('Add Appointment')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('appointment.insert') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Appointment') }}</h4>
                                <p class="card-category">{{ __('Appointment information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Appointment') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('Appointment') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('title'))
                                                <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Patient') }}</label>
                                    <div class="col-sm-7">
                                        <select class="form-control{{ $errors->has('patient_id') ? ' is-invalid' : '' }}" name="patient_id" id="input-patient_id">
                                            @foreach($patients as $patient)
                                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('patient_id'))
                                            <span id="patient_id-error" class="error text-danger" for="input-patient_id">{{ $errors->first('patient_id') }}</span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Doctor') }}</label>
                                    <div class="col-sm-7">
                                        <select class="form-control{{ $errors->has('doctor_id') ? ' is-invalid' : '' }}" name="doctor_id" id="input-doctor_id">
                                            @foreach($doctors as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('doctor_id'))
                                            <span id="doctor_id-error" class="error text-danger" for="input-doctor_id">{{ $errors->first('doctor_id') }}</span>
                                        @endif
                                    </div>
                                </div>                                  
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                            <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="input-status">
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger" for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Appointment Time') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('appointment_time') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('appointment_time') ? ' is-invalid' : '' }}" name="appointment_time" id="input-appointment_time" type="datetime-local" placeholder="{{ __('Appointment Time') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('appointment_time'))
                                                <span id="appointment_time-error" class="error text-danger" for="input-appointment_time">{{ $errors->first('appointment_time') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>                                  
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
@endsection