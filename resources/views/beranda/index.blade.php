@extends('layouts.app')

@section('content')

<div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('pict/danau.jpg') }}" class="d-block w-100 img-fluid" alt="First slide">
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('pict/danau1.jpg') }}" class="d-block w-100 img-fluid" alt="Second slide">
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('pict/danau2.jpg') }}" class="d-block w-100 img-fluid" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="carousel-caption">
        <div class="animated fadeInDown">
            <h1 class="h1-responsive">Selamat Datang</h1>
            <p>Di Website Wisata Sumatera</p>
        </div>
    </div>
</div>



<div class="row">
    <h2 id="judulBeranda">
        Wisata Sumatera
    </h2>
</div>

<section class="indexSection">
    <div id="seContainer">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/toba.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Sumatera Utara</h5>
                        <p class="card-text">Sumatera utara adalah suatu tempat Destinasi Wisata yang mempunyai
                            danau terbesar di seluruh indonesia bahkan di dunia yaitu Danau Toba.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/pantai.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Aceh</h5>
                        <p class="card-text">Aceh memiliki tempat wisata pantai-pantai yang terkenal di seluruh
                            indonesia dengan pemandangan yang indah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/jam.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Sumatera Barat</h5>
                        <p class="card-text">Sumatera Barat ada wisata yang terkenal yaitu jam gadang yang
                            sering
                            dikunjungi wisatawan baik lokal maupun luar.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/cc.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Riau</h5>
                        <p class="card-text">Riau memiliki sebuah bangunan candi yang terkenal yang menjadi
                            tempat
                            wisata yaitu yang bernama candi muara takus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/candi.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Jambi</h5>
                        <p class="card-text">Jambi memiliki sebuah bangunan candi yang terkenal yang menjadi
                            tempat
                            wisata yaitu yang bernama candi muaro jambi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/b.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Bengkulu</h5>
                        <p class="card-text">Bengkulu adalah tempat wisata pantai-pantai yang terkenal di
                            seluruh
                            indonesia dengan pemandangan yang indah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/jembatan.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Sumatera Selatan</h5>
                        <p class="card-text">Sumatera selatan memiliki tempat wisata yang sangat menarik dan
                            yang terkenal yaitu jembatan ampera.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/lobang.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Bangka belitung</h5>
                        <p class="card-text">Bangka Belitung memiliki tempat wisata pantai-pantai yang terkenal
                            di seluruh indonesia dengan pemandangan yang indah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{ asset('pict/lampung.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body" style="background-color: white;">
                        <h5 class="card-title">Lampung</h5>
                        <p class="card-text">Lampung memiliki tempat wisata pantai-pantai yang terkenal di
                            seluruh indonesia dengan pemandangan yang indah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection