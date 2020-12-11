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
                        @if(isset($spesialis))
                            <h2 style="display: inline-block;">Hasil Pencarian "{{  $spesialis->title  }}"</h2>
                            <h5>Menampilkan {{$doctors->count()}} hasil pencarian</h5>
                        @else
                            <h2 style="display: inline-block;">Hasil Pencarian Tidak Ditemukan</h2>
                            <h5>Menampilkan 0 hasil pencarian</h5>
                        @endif
                        </div>
                        
                    </div>
                </div>
                <div class="row mb-md-2">
                @if(isset($doctors))
                    @foreach ($doctors as $doctor)
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-light mb-4">
                                <a href="{{ URL('/dokter/profil/'.$doctor->slug )}}" class="position-relative">
                                    <img src="{{ asset('doctor/' . $doctor->img) }}" class="card-img-top doctor-card" alt="image"> </a>
                                <div class="card-body">
                                    <a href="{{ URL('/dokter/profil/'.$doctor->slug )}}">
                                        <h5 class="font-weight-normal">{{ $doctor->name }}</h5>
                                    </a>
                                    <div class="post-meta"><span class="small lh-120">{{ $doctor->specialty->title }}</span></div>
                                    <div class="d-flex my-4">
                                        <i class="star fas fa-star text-warning"></i>
                                        <i class="star fas fa-star text-warning"></i>
                                        <i class="star fas fa-star text-warning"></i>
                                        <i class="star fas fa-star text-warning"></i>
                                        <i class="star fas fa-star text-warning"></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="col pl-0"><span class="text-muted font-small d-block mb-2">Pengalaman</span> <span class="h5 text-dark font-weight-bold">{{ $doctor->experience }} Tahun</span></div>
                                        <div class="col pr-0"><span class="text-muted font-small d-block mb-2">Biaya</span> <span class="h5 text-dark font-weight-bold">{{ $doctor->cost }}</span></div>
                                    </div>
                                </div>
                            </div>                
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
<html>