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
                                            <form action="{{ route('specialty.edit', [$specialty->id]) }}" method="get" style="display: inline;">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-link">
                                                    <i class="material-icons">edit</i>
                                                </button> 
                                            </form>   
                                            <form action="{{ route('specialty.delete', [$specialty->id]) }}" method="post" style="display: inline;">
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