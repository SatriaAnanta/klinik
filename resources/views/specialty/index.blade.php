@extends('layouts.app', ['activePage' => 'specialty-management', 'titlePage' => __('Specialty Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Specialties</h4>
                    <p class="card-category"> Here you can manage specialties</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="{{ route('specialty.add') }}" class="btn btn-sm btn-primary">Add Specialty</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Specialties</th>
                                    <th>Creation Date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($specialties))
                                @foreach ($specialties as $specialty)
                                    <tr>
                                        <td>{{ $specialty->id  }}</td>
                                        <td>{{ $specialty->title }}</td>
                                        <td>{{ $specialty->created_at }}</td>
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