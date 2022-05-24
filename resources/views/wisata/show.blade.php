@extends('layouts.app')

@section('content')

@csrf
<div class="showWisata_head">
    <h4 class="judulWisata text-center">{{$wisata->nama_wisata}}</h4>
    <p class="text-center">di {{$wisata->getProvinsi->nama_provinsi}}</p>
    <img src="{{ asset($wisata->gambar) }}" alt="gambar_wisata" class="img-thumbnail mt-3 rounded mx-auto d-block gambarWisata">
</div>

<div class="jumbotron jumbotron mt-5" style="padding: 20px">
    <p style="font-size: 18px">
        {{$wisata->deskripsi}}
    </p>
</div>

<div class="icon-show mt-4 mb-5 text-right">
    @can('wisata-delete')
    <a href="{{ route('wisata.destroy',$wisata->id) }}" class="btn btn-danger btnWisata"><i class="fas fa-trash text-center"></i> Hapus Konten</a>
    @endcan
    @can('wisata-edit')
    <a href="{{ $wisata->id }}/edit" class="btn btn-primary btnWisata"><i class="fas fa-edit text-center"></i> Edit Konten</a>
    @endcan
</div>

@endsection
