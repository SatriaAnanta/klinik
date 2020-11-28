<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="spesialisasi pad-tb-100">
            <div class="container">
                <div class="row mb-md-2">
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm border-light mb-4">
                            <a href="#" class="position-relative">
                                <img src="https://via.placeholder.com/500x350/5fa9f8/ffffff" class="card-img-top" alt="image"> </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="font-weight-normal">dr. Placeholder</h5>
                                </a>
                                <div class="post-meta"><span class="small lh-120">Spesialis Akupuntur</span></div>
                                <div class="d-flex my-4">
                                    <i class="star fas fa-star text-warning"></i>
                                    <i class="star fas fa-star text-warning"></i>
                                    <i class="star fas fa-star text-warning"></i>
                                    <i class="star fas fa-star text-warning"></i>
                                    <i class="star fas fa-star text-warning"></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span></div>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0"><span class="text-muted font-small d-block mb-2">Pengalaman</span> <span class="h5 text-dark font-weight-bold">7 Tahun</span></div>
                                    <div class="col pr-0"><span class="text-muted font-small d-block mb-2">Biaya</span> <span class="h5 text-dark font-weight-bold">Rp 1.500</span></div>
                                </div>
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