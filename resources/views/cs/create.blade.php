@extends('layouts.app')

@section('content')

<h3>Tambah Contact</h3>
@csrf
{!! Form::open(['action' => 'App\Http\Controllers\CsController@store']) !!}

<div class="form-group mt-4">
    {{ Form::label('nama', 'Nama Lengkap') }}
    {{ Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('email', 'Contact Email') }}
    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Email']) }}
</div>

<div class="form-group mt-4">
    {{ Form::label('whatsapp', 'Contact Whatsapp') }}
    {{ Form::text('whatsapp', '', ['class' => 'form-control', 'placeholder' => 'Masukkan No.Whatsapp']) }}
</div>

{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
