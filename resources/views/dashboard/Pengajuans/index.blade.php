@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Pengajuan SKPI Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Pengajuan SKPI Mahasiswa </li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pengajuan SKPI</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('failed'))
        <div class="alert alert-danger col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="container1">

            <div class="table-responsive col-lg-9">

                <table class="table table-bordered table-sm border-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->npm}}</td>
                            <td>{{ $mahasiswa->nama}}</td>
                            <td>{{ $mahasiswa->prodi->N_prodi}}</td>
                            <td>{{ $mahasiswa->angkatan}}</td>
                            <td>{{ $mahasiswa->status_pengajuan}}</td>
                            <td>
                                @if($mahasiswa->status_pengajuan === 'diproses')
                                <a href="/dashboard/pengajuans/details/{{ $mahasiswa->id }}" class="badge bg-info"><span data-feather="eye"></span>detail</a>
                                @elseif($mahasiswa->status_pengajuan === 'ditangguhkan')
                                <a href="/dashboard/pengajuans/cek/{{ $mahasiswa->id }}" class="badge bg-danger">Revisi</a>
                                @else
                                <a href="/dashboard/pengajuans/{{ $mahasiswa->id }}" class="badge bg-warning"><span data-feather="edit-2"></span>Nilai</a>
                                @endif
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