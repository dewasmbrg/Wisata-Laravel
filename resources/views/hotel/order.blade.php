@extends('layouts.app')

@section('content')

<form class="row g-3" action="{{route('pemesanan.store', $hotel->id)}}" method="POST">
@csrf
    <div class="col-md-6 mb-4">
        <img src="{{ asset($hotel->gambar) }}" class="img-thumbnail" alt="..." style="height: 270px; width: 100%;">
    </div>

    <div class="col-md-3 btn-secondary mb-4" style="background-color: #3974a8">
        <h5 class="form-label btn-primary text-center" style="border-radius: 5px">{{ $hotel->nama_hotel }}</h5>
        <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$hotel->alamat_hotel}}</p>
        <p class="card-text"><i class="fas fa-phone-alt"></i> {{$hotel->contact}}</p>
        <p class="card-text"><i class="fas fa-tags"></i> Rp.{{$hotel->harga_hotel}} / Malam</p>
        <hr>
        <p>{{$hotel->deskripsi}}</p>
    </div>

    <div class="col-md-5">
        <label for="inputCity" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Nama Lengkap" name="nama_pemesan">
    </div>

    <div class="col-md-2">
        <label for="inputCity" class="form-label">Waktu Inap</label>
        <input type="number" class="form-control" id="inputCity" placeholder="Malam" name="lama_inap">
    </div>

    <div class="col-md-2">
        <label for="inputCity" class="form-label">{{ __('Tanggal Pesanan') }}</label>

        <div>
            <input name="tgl_booking" id="tglBooking" type="date" class="form-control @error('tglBooking') is-invalid @enderror" name="tglBooking" required autocomplete="tglBooking" style="width: 180px;">

            @error('tglBooking')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-12" style="padding-top: 20px">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Saya menyetujui pemesanan kamar hotel, dan semua data yang saya masukkan adalah benar.
            </label>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Booking</button>
    </div>
</form>

@endsection
