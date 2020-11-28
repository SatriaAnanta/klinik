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
                            <div class="col-lg-4 col-md-6" style="margin-bottom: 24px;">
                                <div class="card">
                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1513002433973-e0a181372d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Rapid Test</h5>
                                        <p class="card-text">Pemeriksaan Covid-19 dengan metode Rapid Test</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" style="margin-bottom: 24px;">
                                <div class="card">
                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1513002433973-e0a181372d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Rapid Test</h5>
                                        <p class="card-text">Pemeriksaan Covid-19 dengan metode Rapid Test</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" style="margin-bottom: 24px;">
                                <div class="card">
                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1513002433973-e0a181372d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Rapid Test</h5>
                                        <p class="card-text">Pemeriksaan Covid-19 dengan metode Rapid Test</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
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