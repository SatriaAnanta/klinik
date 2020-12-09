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
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="#" class="btn btn-sm btn-primary">Add Doctor</a>
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
                                        <td>{{ $doctor->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                                <i class="material-icons">delete</i>
                                                <div class="ripple-container"></div>
                                            </a>                                        
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