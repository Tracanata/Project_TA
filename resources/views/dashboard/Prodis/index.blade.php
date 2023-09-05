@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Data Tables</h1>
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
            <h1 class="h2">Data Nama Program Studi</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="table-responsive col-lg-8">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Program Studi
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data Program Studi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/dashboard/prodis" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Program Studi</label>
                                    <input type="text" class="form-control @error('N_prodi') is-invalid @enderror" id="N_prodi" name="N_prodi" value="{{ old('N_prodi') }}">
                                    @error('N_prodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <table class="table table-bordered table-sm border-dark">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10px; text-align: center;">No</th>
                        <th scope=" col" style="width: 50px; text-align: center;">Nama</th>
                        <th scope="col" style="width: 50px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodis as $prodi)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td style="width: 50px;">{{ $prodi->N_prodi}}</td>
                        <td style="text-align: center;">
                            <a href="#" class="badge bg-warning"><span data-feather="edit-2"></span>Edit</a>
                            <form action="/dashboard/prodis/{{ $prodi->id}}" method="post" class="d-inline">
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


@endsection