@extends('layouts.app', ['activePage' => 'patient-management', 'titlePage' => __('Patient Management')])
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Patients</h4>
                    <p class="card-category"> Here you can manage patients</p>
                </div>
                <div class="card-body">
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
                        <div class="col-12 text-right">
                            <a href="{{ route('patient.add') }}" class="btn btn-sm btn-primary">Add Patient</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Phone Number</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($patients))
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->id  }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->gender }}</td>
                                        <td>{{ date('d-m-Y', strtotime($patient->dob)) }}</td>
                                        <td>{{ $patient->phone_number }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('patient.edit', [$patient->id]) }}" method="get" style="display: inline;">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link" rel="tooltip" data-original-title="Edit">
                                                    <i class="material-icons">edit</i>
                                                </button> 
                                            </form>   
                                            <form action="{{ route('patient.delete', [$patient->id]) }}" method="post" style="display: inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link" rel="tooltip" data-original-title="Delete">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </form>                                 
                                        </td>
                                    </tr>
                                @endforeach
                            @endif    
                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection