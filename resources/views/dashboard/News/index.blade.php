@extends('dashboard.layouts.main2')

@section('container')

<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Berita SKPI</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Berita SKPI</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="container1">

            <div class="table-responsive col-lg-9">
                <a href="/dashboard/news/create" class="btn btn-primary mb-3">Tambah Data </a>

                <table class="table table-bordered table-sm border-dark">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newss as $news)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $news->judul }}</td>
                            <td>
                                <a href="#" class="badge bg-info"><span data-feather="eye"></span>Detail</a>
                                <a href="#" class="badge bg-warning"><span data-feather="edit-2"></span>Edit</a>
                                <form action="#" method="post" class="d-inline">
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