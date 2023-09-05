@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Data SKPI Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data SKPI Mahasiswa</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data SKPI Mahasiswa</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="container1">

            <div class="table-responsive col-lg-9">

                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="search">
                        <button class="btn btn-primary text-light" type="submit">Search</button>
                    </div>
                </form>

                <table class="table table-bordered table-sm border-dark">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Mahasiswas as $mhs)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mhs->npm}}</td>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->prodi->N_prodi}}</td>
                            <td>{{$mhs->angkatan}}</td>
                            <td>
                                <a href="/dashboard/tampilkan/{{$mhs->id}}" class="badge bg-info"><span data-feather="download"></span>Unduh</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection