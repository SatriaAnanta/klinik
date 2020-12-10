@extends('layouts.app', ['activePage' => 'edit-patient', 'titlePage' => __('Edit Patient')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('patient.update') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')
                        <input hidden="true" name="id" id="input-id" type="number"  value="{{ old('id', $patient->id) }}" required="true" aria-required="true"/>
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Patient') }}</h4>
                                <p class="card-category">{{ __('Patient Information') }}</p>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}"  value="{{ old('name', $patient->name) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Gender') }}</label>
                                    <div class="col-sm-7">
                                        <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="input-gender">
                                            <option value="Female" {{ ( 'Male' == $patient->gender ?? '' ?? '') ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ ( 'Female' == $patient->gender ?? '' ?? '') ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span id="gender-error" class="error text-danger" for="input-gender">{{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Date of Birth') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('dob') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" id="input-dob" type="date" value="{{ $patient->dob }}" placeholder="{{ __('Date of Birth') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('dob'))
                                                <span id="dob-error" class="error text-danger" for="input-dob">{{ $errors->first('dob') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Phone Number') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ $patient->phone_number }}" name="phone_number" id="input-phone_number" type="text" placeholder="{{ __('Phone Number') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('phone_number'))
                                                <span id="phone_number-error" class="error text-danger" for="input-phone_number">{{ $errors->first('phone_number') }}</span>
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