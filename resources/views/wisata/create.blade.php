@extends('layouts.app')

@section('content')

<h3>Tambah Wisata</h3>
@csrf
{!! Form::open(['action' => 'App\Http\Controllers\WisataController@store', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

<div class="form-group mt-4">
    {{ Form::label('nama', 'Nama Wisata') }}
    {{ Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Wisata']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('provinsi', 'Provinsi') }}
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="provinsi">
        <option selected>Pilih provinsi wisata</option>
        <option value="1">Nanggroe Aceh Darussalam</option>
        <option value="2">Sumatera Utara</option>
        <option value="3">Sumatera Barat</option>
        <option value="4">Riau</option>
        <option value="5">Kepulauan Riau</option>
        <option value="6">Jambi</option>
        <option value="7">Bengkulu</option>
        <option value="8">Sumatera Selatan</option>
        <option value="9">Kepulauan Bangka Belitung</option>
        <option value="10">Lampung</option>
    </select>
</div>

<div class="form-group mt-4">
    {{ Form::label('deskripsi', 'Deskripsi') }}
    {{ Form::textarea('deskripsi', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi Wisata']) }}
</div>

<div class="form-group">
    {{ Form::label('gambar', 'Gambar Wisata') }}
    <br />
    {{ Form::file('gambar') }}
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
