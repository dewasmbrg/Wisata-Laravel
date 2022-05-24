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
        Daftar Wisata Sumatera
    </h2>
</div>

@can('wisata-create')
<div class="row">
    <div class="col-md-3">
        <a href="/wisata/create" class="btn btn-primary mb-4 w-75">Tambah Wisata</a>
    </div>
</div>
@endcan

<div class="row">
    <form method="POST" action="{{ route('wisata.filter') }}">
        @csrf
        <select class="form-select form-select-sm mb-5" name="provinsi" onchange='this.form.submit();'>
            <option disabled selected>Pilih Provinsi</option>
            <option value='0'>Tampilkan Semuanya</option>
            <option value='1'>Nanggroe Aceh Darussalam</option>
            <option value='2'>Sumatera Utara</option>
            <option value='3'>Sumatera Barat</option>
            <option value='4'>Riau</option>
            <option value='5'>Kepulauan Riau</option>
            <option value='6'>Jambi</option>
            <option value='7'>Bengkulu</option>
            <option value='8'>Sumatera Selatan</option>
            <option value='9'>Kepulauan Bangka Belitung</option>
            <option value='10'>Lampung</option>
        </select>
    </form>
</div>

@include('inc.messages')

@csrf

@if(count($wisata) > 0)
<div class="row">
    @foreach($wisata as $Wisata)
    <div class="col-md-4">
        <div class="card mb-2">
            <img src="{{ asset($Wisata->gambar) }}" class="card-img-top" alt="..." style="height: 200px;">
            <div class="card-body" style="background-color: white;">
                <h4 class="card-title">{{ $Wisata->nama_wisata }}</h4>
                <p class="card-text">
                    <a href="wisata/{{ $Wisata->id }}">
                        <button type="button" class="btn btn-outline-primary mt-5" style="width: 100%">Lihat
                            Disini
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
    {{ $Wisata->paginate(9)->links() }}
</div>

@else
<div class="row">
    <h5 class="text-center">
        Wisata Tidak Tersedia
    </h5>
</div>
@endif

@endsection
