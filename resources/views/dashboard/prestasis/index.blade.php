@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Data Kegiatan Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Kegiatan Mahasiswa</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Kegiatan Mahasiswa</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger col-lg-15 alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container1">

            <div class="table-responsive col-lg-12">
                @foreach($mahasiswa as $mhs)
                @if($mhs->status_pengajuan === 'ditolak')
                <div class="alert alert-danger" role="alert">
                    <h6>Pengajuanmu ditolak</h6>
                    @foreach($pengajuans as $p)
                    <p>{!! $p->catatan_tolak !!}</p>
                    @endforeach
                </div>
                @endif
                @endforeach
                <a href="/dashboard/prestasis/create" class="btn btn-primary mb-3">Tambah Data</a>
                @foreach($mahasiswa as $mhs)
                @if($mhs->status_aktif === 'Lulus')
                <form action="/dashboard/prestasi" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" onclick="return confirm('Anda hanya bisa mengajukan sekali, apakah Anda yakin ingin mengajukan data?')" class="d-inline btn btn-success mb-3" {{ $mhs->status_pengajuan !== 'ada' && $mhs->status_pengajuan !== 'ditolak' ? 'disabled' : '' }}>Ajukan Data</button>
                </form>
                @endif
                @endforeach

                <table class="table table-bordered table-sm border-dark">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Tingkat</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestasis as $prestasi)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                            <td>{{ $prestasi->nama}}</td>
                            <td style="text-align: center;">{{ $prestasi->tempat}}</td>
                            <td style="text-align: center;">{{Carbon\Carbon::createFromFormat('Y-m-d', $prestasi->waktu)->format('d F Y')}}</td>
                            <td style="text-align: center;">{{ $prestasi->tingkat}}</td>
                            <td style="text-align: center;">{{ $prestasi->kategori }}</td>
                            <td style="text-align: center;">
                                <a href="/dashboard/prestasis/{{$prestasi->id}}" class="badge bg-info"><span data-feather="eye"></span>Detail</a>

                                @if ($prestasi->status === 'ada' || $prestasi->status === 'ditolak')
                                <a href="/dashboard/prestasis/{{$prestasi->id}}/edit" class="badge bg-warning">Edit<span data-feather="edit-2"></span></a>
                                <form action="/dashboard/prestasis/{{ $prestasi->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('are you sure ?')"><span data-feather="x-circle"></span>Hapus</button>
                                </form>
                                @else
                                <a href="#" class="badge bg-secondary">Edit<span data-feather="edit-2"></span></a>
                                <a href="#" class="badge bg-secondary"><span data-feather="x-circle"></span>Hapus</a>
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