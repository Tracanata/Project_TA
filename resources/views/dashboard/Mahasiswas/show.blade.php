@extends('dashboard.layouts.main2')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Mahasiswa</h1>
</div>
<div class="card mb-4">
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1">
        <h2 class="card-title">Profile</h2>
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2">
        <img src="/img/anonim.png" class="rounded-circle d-block mt-3" alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2 border-bottom">
        <h6 class="card-title">NPM</h6>
        <p class="card-text">{{$mahasiswa->npm}}</p>
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
        <h6 class="card-title">Nama</h6>
        <p class="card-text">{{$mahasiswa->nama}}</p>
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
        <h6 class="card-title">Jenis Kelamin</h6>
        <p class="card-text">{{$mahasiswa->jk}}</p>
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
        <h6 class="card-title">Program Studi</h6>
        <p class="card-text">{{$mahasiswa->prodi}}</p>
    </div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
        <h6 class="card-title">Angkatan</h6>
        <p class="card-text">{{$mahasiswa->angkatan}}</p>
    </div>
</div>
@endsection