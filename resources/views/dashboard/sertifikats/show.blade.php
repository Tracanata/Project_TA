@extends('dashboard.layouts.main')

@section('container')
<div class="container2">
    <div class="mt-3 mb-3">
        <a href="/dashboard/sertifikats" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
        <a href="/dashboard/sertifikats/{{$sertifikat->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/sertifikats/{{$sertifikat->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('are you sure ?')"><span data-feather="x-circle"></span> Delete</button>
        </form>

        <div class="info mt-3">
            <h6 class="card-title"><b>Bukti Prestasi</b></h6>
            <img src="{{ asset('storage/' . $sertifikat->image) }} " width="250" alt=" {{ $sertifikat->nama }}" class="img-fluid mt-1">
        </div>

        <div class="info border-bottom">
            <h6 class="card-title"><b>Nama Kegiatan</b></h6>
            <p>{{$sertifikat->nama}}</p>
        </div>

        <div class="info border-bottom">
            <h6 class="card-title"><b>Tempat</b></h6>
            <p>{{$sertifikat->tempat}}</p>
        </div>

        <div class="info border-bottom">
            <h6 class="card-title"><b>Waktu Pelaksanaan</b></h6>
            <p>{{$sertifikat->waktu}}</p>
        </div>

        <div class="info border-bottom">
            <h6 class="card-title"><b>Tingkat</b></h6>
            <p>{{$sertifikat->tingkat}}</p>
        </div>

        <div class="info border-bottom">
            <h6 class="card-title"><b>Kategori</b></h6>
            <p>{{$sertifikat->kategori}}</p>
        </div>
    </div>
</div>
@endsection