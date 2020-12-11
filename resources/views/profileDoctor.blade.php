<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
        <style>
            .profile{
                text-align: center;
            }
            .title {
                margin-top: 30px;
                margin-bottom: 25px;
                min-height: 32px;
            }
        </style>
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="profile-doctor">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dokter</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$doctor->name}}</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto mb-4">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{ asset('doctor/' . $doctor->img) }}" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">{{$doctor->name}}</h3>
                            <h6>{{ $doctor->specialty->title }}</h6>
                        </div>
                        <div class="description text-center">
                            <p>{{$doctor->bio}}</p>
                        </div>
                        <a type="button" role="button"  class="btn btn-primary" href="https://api.whatsapp.com/send?phone=6285725656722"> BUAT JANJI </a>
                    </div>
                </div>

                <!-- <div class="col-md-12 ml-auto mr-auto mb-4">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center border-bottom mb-4">
                                <div class="d-flex flex-md-column align-items-center">
                                    Pagi
                                </div>
                                <div class="btn-group-horizontal" data-toggle="buttons" id ="Group">
                                    <label class="btn btn-sm btn-info btnSelect active" **id="Option 1"** style="margin-left: 18px;">
                                        <input type="radio" name="options" id="Option 1" autocomplete="off" checked> 07.30
                                    </label>
                                    <label class="btn btn-sm btn-info btnSelect" **id="Option 2"** style="margin-left: 18px;">
                                        <input type="radio" name="options" id="Option 2" autocomplete="off"> 09.00
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group-horizontal text-center">
                                <button type="button" role="button" class="btn btn-primary" style="margin-left: 18px;"> Batal </button>
                                <button type="button" role="button" class="btn btn-primary" style="margin-left: 18px;"> Lanjutkan </button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
<html>