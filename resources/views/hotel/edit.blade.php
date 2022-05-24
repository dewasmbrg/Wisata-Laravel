@extends('layouts.app')

@section('content')

<h3>Edit Hotel</h3>

{!! Form::open(['action' => ['App\Http\Controllers\HotelController@update', $hotel->id], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

<div class="form-group mt-4">
    {{ Form::label('nama', 'Nama Hotel') }}
    {{ Form::text('nama', $hotel->nama_hotel, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('alamat', 'Alamat') }}
    {{ Form::textarea('alamat', $hotel->alamat_hotel, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Hotel', 'rows' => 3]) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('deskripsi', 'Deskripsi') }}
    {{ Form::textarea('deskripsi', $hotel->deskripsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('contact', 'Contact Hotel') }}
    {{ Form::text('contact', $hotel->contact, ['class' => 'form-control', 'placeholder' => 'Masukkan Contact Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('harga', 'Harga Hotel') }}
    {{ Form::number('harga', $hotel->harga_hotel, ['class' => 'form-control', 'placeholder' => 'Masukkan Harga Hotel']) }}
</div>

<div class="form-group">
    {{ Form::label('gambar', 'Gambar Hotel') }}
    <br />
    {{ Form::file('gambar') }}
</div>
{{ Form::hidden('_method', 'PUT')}}
{{ Form::submit('Perbarui', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
