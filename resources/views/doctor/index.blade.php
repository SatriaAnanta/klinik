@extends('layouts.app', ['activePage' => 'doctor-management', 'titlePage' => __('Doctor Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Doctors</h4>
                    <p class="card-category"> Here you can manage doctors</p>
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
                            <a href="{{ route('doctor.add') }}" class="btn btn-sm btn-primary">Add Doctor</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Specialty</th>
                                    <th>Creation Date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($doctors))
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id  }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->specialty->title }}</td>
                                        <td>{{ date('d-m-Y', strtotime($doctor->created_at)) }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('doctor.edit', [$doctor->id]) }}" method="get" style="display: inline;" rel="tooltip" data-original-title="Edit">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link">
                                                    <i class="material-icons">edit</i>
                                                </button> 
                                            </form> 
                                            <form action="{{ route('doctor.delete', [$doctor->id]) }}" method="post" style="display: inline;" rel="tooltip" data-original-title="Delete">
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