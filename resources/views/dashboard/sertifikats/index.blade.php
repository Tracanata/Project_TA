@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Sertifikat Mahasiswa</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container1">

    <div class="table-responsive col-lg-9">
        <a href="/dashboard/sertifikats/create" class="btn btn-primary mb-3">Tambah Data</a>
        <button type="submit" class="btn btn-success d-inline mb-3">Ajukan Data</button>

        <table class="table table-bordered table-sm border-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sertifikats as $sertifikat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sertifikat->nama }}</td>
                    <td>{{ $sertifikat->tempat }}</td>
                    <td>{{ $sertifikat->waktu }}</td>
                    <td>{{ $sertifikat->kategori }}</td>
                    <td>
                        <a href="/dashboard/sertifikats/{{$sertifikat->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/sertifikats/{{$sertifikat->id}}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection