@extends('layouts.app', ['activePage' => 'edit-specialty', 'titlePage' => __('Edit Specialty')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('specialty.update') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input hidden="true" name="id" id="input-id" type="number"  value="{{ old('id', $specialty->id) }}" required="true" aria-required="true"/>
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Specialty') }}</h4>
                                <p class="card-category">{{ __('Specialty Information') }}</p>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Specialty') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('Specialty') }}"  value="{{ old('title', $specialty->title) }}" required="true" aria-required="true"/>
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
                                            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}"  value="{{ old('description', $specialty->description) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Slug') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="input-slug" type="text" placeholder="{{ __('Slug') }}"  value="{{ old('slug', $specialty->slug) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('slug'))
                                                <span id="slug-error" class="error text-danger" for="input-slug">{{ $errors->first('slug') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                                        <img class="card-img-top" src="{{ asset('specialty/' . $specialty->img) }}" style="margin-bottom:20px;">
                                            <input class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" name="img" id="input-img" type="file" placeholder="{{ __('Image') }}" style="position: initial; opacity:1" value="{{ old('img', $specialty->img) }}"/>
                                            @if ($errors->has('img'))
                                                <span id="img-error" class="error text-danger" for="input-img">{{ $errors->first('img') }}</span>
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