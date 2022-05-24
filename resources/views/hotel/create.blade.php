@extends('layouts.app')

@section('content')

<h3>Tambah Hotel</h3>
@csrf
{!! Form::open(['action' => 'App\Http\Controllers\HotelController@store', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

<div class="form-group mt-4">
    {{ Form::label('nama', 'Nama Hotel') }}
    {{ Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('alamat', 'Alamat') }}
    {{ Form::textarea('alamat', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Hotel', 'rows' => 3]) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('deskripsi', 'Deskripsi') }}
    {{ Form::textarea('deskripsi', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('contact', 'Contact Hotel') }}
    {{ Form::text('contact', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Contact Hotel']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('harga', 'Harga Hotel') }}
    {{ Form::number('harga', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Harga Hotel']) }}
</div>

<div class="form-group">
    {{ Form::label('gambar', 'Gambar Hotel') }}
    <br />
    {{ Form::file('gambar') }}
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
