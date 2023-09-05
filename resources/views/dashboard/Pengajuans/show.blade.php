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
        @if ($errors->any() || session('error'))
        <div class="alert alert-danger col-lg-15 alert-dismissible fade show" role="alert">
            <ul>
                @if (session('error'))
                <li>{{ session('error') }}</li>
                @endif
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class=" container2">
            <div class="info border-bottom">
                @if($mahasiswa->image)
                <img src="{{ asset('storage/' . $mahasiswa->image) }}" class="profile-pic mx-auto mt-2" alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
                @else
                <img src="/img/anonim.png" class="profile-pic mx-auto mt-2" alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
                @endif
                <div class="grup">
                    <h6 class="card-title d-inline"><b>NPM :</b></h6>
                    <p class="d-inline">{{$mahasiswa->npm}}</p>
                </div>
                <div class="grup">
                    <h6 class="card-title d-inline"><b>Nama :</b></h6>
                    <p class="d-inline">{{$mahasiswa->nama}}</p>
                </div>
                <div class="grup">
                    <h6 class="card-title d-inline"><b>Prodi :</b></h6>
                    <p class="d-inline">{{$mahasiswa->prodi->N_prodi}}</p>
                </div>
                <div class="grup">
                    <h6 class="card-title d-inline"><b>Angkatan :</b></h6>
                    <p class="d-inline">{{$mahasiswa->angkatan}}</p>
                </div>
            </div>

            <form method="post" action="/dashboard/pengajuans/{{$mahasiswa->id}}" enctype="multipart/form-data">
                @csrf
                <div class="card mb-2">
                    <h5 class="text-center mt-2"><b>Bukti Kegiatan Mahasiswa</b></h5>
                    <table class="tabel table-bordered border-dark mb-3">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">Nama Prestasi</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Bukti Kegiatan</th>
                                <th scope="col">Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prestasis as $prestasi)
                            <tr>
                                <td style="text-align: center;">{{$loop->iteration}}</td>
                                <td>{{$prestasi->nama}}</td>
                                <td style="text-align: center;">{{$prestasi->tempat}}</td>
                                <td style="text-align: center;">{{$prestasi->waktu}}</td>
                                <td style="text-align: center;">{{$prestasi->tingkat}}</td>
                                <td style="text-align: center;">{{$prestasi->kategori}}</td>
                                <td style="text-align: center;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Bukti Kegiatan
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Kegiatan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('storage/' . $prestasi->image) }} " width="500" alt=" {{ $prestasi->nama }}" class="img-fluid mb-1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <input type="checkbox" name="selected_data[]" value="{{ $prestasi->id }}" class="ms-auto mt-2">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="kemampuan_kerja" class="form-label">Kemampuan Kerja</label>
                                @error('kemampuan_kerja')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="kemampuan_kerja" type="hidden" name="kemampuan_kerja" value="{{ old('kemampuan_kerja') }}">
                                <trix-editor input="kemampuan_kerja"></trix-editor>
                            </div>

                            <div class="mb-3">
                                <label for="penguasaan" class="form-label">Penguasaan</label>
                                @error('penguasaan')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="penguasaan" type="hidden" name="penguasaan" value="{{ old('penguasaan') }}">
                                <trix-editor input="penguasaan"></trix-editor>
                            </div>

                            <div class="mb-3">
                                <label for="sikap_khusus" class="form-label">Sikap Khusus</label>
                                @error('sikap_khusus')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="sikap_khusus" type="hidden" name="sikap_khusus" value="{{ old('sikap_khusus') }}">
                                <trix-editor input="sikap_khusus"></trix-editor>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3 mt-3">Selesai</button>
            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger d-inline" data-bs-toggle="modal" data-bs-target="#tolak">
                Tolak
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/dashboard/tolak/{{$mahasiswa->id}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="catatan_tolak" class="form-label">Catatan</label>
                                    @error('catatan_tolak')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input id="catatan_tolak" type="hidden" name="catatan_tolak" value="{{ old('catatan_tolak') }}">
                                    <trix-editor input="catatan_tolak"></trix-editor>
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
        </div>
    </div>
</div>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

@endsection