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
        Daftar Hotel
    </h2>
</div>

<div class="row">
    <div class="col-md-3">
        @can('hotel-create')
        <a href="/hotel/create" class="btn btn-primary mb-4 w-75">Tambah Hotel</a>
        @endcan
        @can('hotel-chart')
        <a href="chart-penjualan" class="btn btn-success mb-4 w-75">Grafik Penjualan</a>
        @endcan
    </div>
</div>

<div class="row col-md-3 pl-0">
    <form method="POST" action="{{ route('hotel.sort') }}">
        @csrf
        <select class="form-select form-select-sm mb-5" name="urut" onchange='this.form.submit();'>
            <option disabled selected>Urut Berdasarkan</option>
            <option value='0'>Normal</option>
            <option value='1'>Harga Terbesar</option>
            <option value='2'>Harga Terkecil</option>
        </select>
    </form>
</div>

@include('inc.messages')

@csrf

@if(count($hotel) > 0)
<div class="row">
    @foreach($hotel as $hotel)
    <div class="card col-md-4">
        <div class="card-body col-md-10">
            <h5 class="card-title">
                <figure class="figure">
                    <img src="{{ asset($hotel->gambar) }}" class="figure-img img-fluid rounded" alt="..." style="height: 100px; width: 300px;">
                    <figcaption class="figure-caption text-center">{{$hotel->nama_hotel}}</figcaption>
                </figure>
            </h5>
            <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$hotel->alamat_hotel}}</p>
            <p class="card-text"><i class="fas fa-phone-alt"></i> {{$hotel->contact}}</p>
            <p class="card-text"><i class="fas fa-tags"></i> Rp.{{number_format($hotel->harga_hotel)}} / Malam</p>

            <label class="option-hotel" style="display: flex; justify-content: space-between;">
                @can('hotel-delete')
                <a href="{{ route('hotel.destroy',$hotel->id) }}" class="btn btn-danger btnWisata w-40"><i class="fas fa-trash text-center"></i> Hapus Hotel</a>
                @endcan
                @can('hotel-edit')
                <a href="hotel/{{ $hotel->id }}/edit" class="btn btn-primary btnWisata w-40"><i class="fas fa-edit text-center"></i> Edit Hotel</a>
                @endcan
            </label>
            <a href="hotel/{{ $hotel->id }}">
                <button type="button" class="btn btn-outline-primary mt-3" style="width: 100%"><i class="fas fa-shopping-cart" style="font-size: 20px"></i> Checkout</button>
            </a>
        </div>
    </div>
    @endforeach

    {{ $hotel->paginate(6)->links() }}
</div>

@else
<div class="row">
    <h5 class="text-center">
        Hotel Tidak Tersedia
    </h5>
</div>
@endif

@endsection
