@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3">
        @can('cs-create')
        <a href="/cs/create" class="btn btn-primary mb-4">Tambah Contact Person</a>
        @endcan
        @can('cs-xls')
        <a href="cs-export" class="btn btn-success mb-4">Export data to Excel</a>
        @endcan
    </div>
</div>

@include('inc.messages')

@csrf
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Whatsapp</th>
            @can('cs-delete')
            <th scope="col" class="text-center">Preferences</th>
            @endcan
        </tr>
    </thead>
    @if(count($cs) > 0)
    <tbody>
        @foreach($cs as $Cs)
        <tr>
            <th scope="row">{{($cs->currentPage() - 1) * $cs->perPage() + $loop->iteration}}</th>
            <td>{{$Cs->nama}}</td>
            <td><a href="mailto:{{$Cs->email}}" class="btn btn-danger" target="_blank"><i class="far fa-envelope" style="font-size: 20px"></i>
                    Send Email</a></td>
            <td><a href="https://api.whatsapp.com/send?phone={{$Cs->no_whatsapp}}" class="btn btn-success" target="_blank"><i class="fab fa-whatsapp" style="font-size: 20px"></i>
                    Send Message</a></td>
            <td>
                <div class="pref-cs text-center" style="display:flex; justify-content: space-evenly">
                    @can('cs-delete')
                    <a href="{{ route('cs.destroy',$Cs->id) }}" class="btn btn-danger btnWisata"><i class="fas fa-trash text-center"></i> Hapus</a>
                    @endcan
                    @can('cs-edit')
                    <a href="cs/{{ $Cs->id }}/edit" class="btn btn-primary btnWisata"><i class="fas fa-edit text-center"></i> Edit</a>
                    @endcan
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $Cs->paginate(5)->links() }}

@else
<div class="row">
    <h5 class="text-center">
        Kontak Tidak Tersedia
    </h5>
</div>
@endif

@endsection
