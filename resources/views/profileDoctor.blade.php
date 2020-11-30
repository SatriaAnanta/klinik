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
                <li class="breadcrumb-item active" aria-current="page">dr.Placeholder</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">dr.Placeholder</h3>
                            <h6>Spesialis Akupuntur</h6>
                        </div>
                        <div class="description text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus rem autem quaerat eaque nemo provident illo facere similique consectetur vel obcaecati ab impedit, cum quae, ea aliquam dignissimos architecto fugit!</p>
                        </div>
                        <button type="button" role="button"  class="btn btn-primary"> BUAT JANJI </button>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
<html>