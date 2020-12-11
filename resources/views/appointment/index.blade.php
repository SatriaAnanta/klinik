@extends('layouts.app', ['activePage' => 'appointment-management', 'titlePage' => __('Appointment Management')])
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Appointment</h4>
                    <p class="card-category"> Here you can manage appointment</p>
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
                            <a href="{{ route('appointment.add') }}" class="btn btn-sm btn-primary">Add Appointment</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Appointment</th>
                                    <th>Time</th>
                                    <th>Doctor</th>
                                    <th>Patient</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($appointments))
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->id  }}</td>
                                        <td>{{ $appointment->title }}</td>
                                        <td>{{ date('d-m-Y H:m', strtotime($appointment->appointment_time)) }}</td>
                                        <td>{{ $appointment->doctor->name }}</td>
                                        <td>{{ $appointment->patient->name }}</td>
                                        <td>{{ $appointment->status }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('appointment.edit', [$appointment->id]) }}" method="get" style="display: inline;" rel="tooltip" data-original-title="Edit">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link">
                                                    <i class="material-icons">edit</i>
                                                </button> 
                                            </form>   
                                            <form action="{{ route('appointment.delete', [$appointment->id]) }}" method="post" style="display: inline;" rel="tooltip" data-original-title="Delete">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link">
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