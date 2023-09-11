@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Data Tables Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Mahasiswa</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Mahasiswa</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="container1">
            <div class="table-responsive col-lg-9">
                <a href="/dashboard/mahasiswas/create" class="btn btn-primary mb-3 mt-3">Tambah Data Mahasiswa</a>

                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="search">
                        <button class="btn btn-primary text-light" type="submit">Search</button>
                    </div>
                </form>

                <table class="table table-bordered table-sm border-dark">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">No</th>
                            <th scope="col" style="text-align: center;">NPM</th>
                            <th scope="col" style="text-align: center;">Nama</th>
                            <th scope="col" style="text-align: center;">Prodi</th>
                            <th scope="col" style="text-align: center;">Angkatan</th>
                            <th scope="col" style="text-align: center;">Status</th>
                            <th scope="col" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                            <td style="text-align: center;">{{ $mahasiswa->npm }}</td>
                            <td>{{ $mahasiswa->nama}}</td>
                            <td>{{ $mahasiswa->prodi->N_prodi}}</td>
                            <td style="text-align: center;">{{ $mahasiswa->angkatan}}</td>
                            <td style="text-align: center;">{{ $mahasiswa->status_aktif}}</td>
                            <td style="text-align: center;">
                                <a href="/dashboard/mahasiswas/{{ $mahasiswa->id }}" class="badge bg-info"><span data-feather="eye"></span>Detail</a>
                                <a href="/dashboard/mahasiswas/{{ $mahasiswa->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span>Edit</a>
                                <form action="/dashboard/mahasiswas/{{ $mahasiswa->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('are you sure ?')"><span data-feather="x-circle"></span>Hapus</button>
                                </form>
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