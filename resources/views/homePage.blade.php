<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="hero set-bg pad-tb-100" style="background-image: url(https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80);">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title" style="margin-bottom: 30px;">
                            <h2 style="text-align:center;">Temukan Dokter</h2>
                            <p>Cari dan temukan dokter dengan langkah mudah</p>
                        </div>
                        <div class="hero-form">
                            <form action="#">
                                <input type="text" placeholder="ex: Spesialisasi atau Nama Dokter">
                                <button type="submit" class="site-btn">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="zona pad-tb-100">
            <div class="container">
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Hai, Hardianto</h2>
                            <span class="border">
                                11:11 WIB, Kel. Sardonoharjo, Ngaglik, Yogyakarta
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 20px 10px">
                    <div class="col-lg-12">
                        <h3>Anda berada di zona hijau</h3>
                    </div>
                    <div class="col-lg-6 border" style="padding: 20px">
                        <span>
                            Zona hijau adalah area atau kelurahan yang belum terdata ada orang yang terinfeksi COVID-19
                        </span>
                        <span style="position: absolute; bottom: 10px; left: 20px">
                            <a href="#">Pelajari lebih lanjut</a>
                        </span>
                    </div>
                    <div class="col-lg-6">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1513002433973-e0a181372d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                    </div>
                </div>
            </div>
        </section>
        <section class="spesialisasi pad-tb-100">
            <div class="container">
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 style="display: inline-block;">Telusuri Berdasarkan Spesialisasi</h2>
                            <h2 class="float-right">Lihat Semua</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class=row>
                        @foreach ($specialties as $specialty)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 24px;">
                                <div class="card">
                                    <img class="specialties-card-img-top card-img-top" src="{{ asset('specialty/' . $specialty->img) }}" >
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $specialty->title }}</h5>
                                        <p class="card-text" style="text-align: justify;">{{ $specialty->description }}</p>
                                        
                                    </div>
                                    <div class="card-footer" style="background-color:unset; border-top:unset;">
                                        <a href="{{ URL('dokter/spesialis/'.$specialty->slug )}}" class="btn btn-primary  btn-block btn-rised  btn-round">Lihat Dokter</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
