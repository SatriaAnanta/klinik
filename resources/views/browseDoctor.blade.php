<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="browse-doctor">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Cari Dokter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hasil Pencarian</li>
                </ol>
            </nav>
            <div class="container">
                <div class="row mb-md-2">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 style="display: inline-block;">Hasil Pencarian "Dokter Umum"</h2>
                            <h5>Menampilkan 10 hasil pencarian</h5>
                        </div>
                    </div>
                </div>
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
            </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
<html>