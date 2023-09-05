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

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if($mahasiswas->image)
                    <img src="{{ asset('storage/' . $mahasiswas->image) }}" alt="Profile" class="rounded-circle">
                    @else
                    <img src="/img/anonim.png" alt="Profile" class="rounded-circle">
                    @endif
                    <h2>{{$mahasiswas->nama}}</h2>
                    <h3>{{$mahasiswas->npm}}</h3>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kegiatan">Bukti Kegiatan Mahasiswa</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NPM</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswas->npm }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswas->nama }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Prodi</div>
                                <div class="col-lg-9 col-md-8">{{$mahasiswas->prodi->N_prodi}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Profesi</div>
                                @if($mahasiswas->status_profesi)
                                <div class="col-lg-9 col-md-8">{{$mahasiswas->status_profesi}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Angkatan</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswas->angkatan }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kelas</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswas->kelas }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Aktif</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswas->status_aktif }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tahun Lulus</div>
                                @if($mahasiswas->status_aktif === 'Lulus')
                                <div class="col-lg-9 col-md-8">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mahasiswas->updated_at)->year;}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                @if($mahasiswas->tmpt_lahir)
                                <div class="col-lg-9 col-md-8">{{$mahasiswas->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $mahasiswas->ttl)->format('d F Y')}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pendidikan Lanjut</div>
                                @if($mahasiswas->pendidikan_lanjut)
                                <div class="col-lg-9 col-md-8">{{$mahasiswas->pendidikan_lanjut}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>
                            <h5 class="card-title">Hasil Penilaian</h5>
                            @foreach($pengajuans as $P)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kemampuan Kerja</div>
                                <div class="col-lg-9 col-md-8">{{ $P->kemampuan_kerja }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Penguasaan Pengetahuan</div>
                                <div class="col-lg-9 col-md-8">{{ $P->penguasaan }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Sikap Khusus</div>
                                <div class="col-lg-9 col-md-8">{{ $P->sikap_khusus }}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade kegiatan pt-3" id="kegiatan">
                            <h5 class="card-title">Kegiatan Mahasiswa</h5>
                            @foreach($prestasis as $prestasi)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label mt-4">Nama Kegiatan</div>
                                        <div class="col-lg-9 col-md-8 mt-4">{{$prestasi->nama}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Tempat</div>
                                        <div class="col-lg-9 col-md-8">{{$prestasi->tempat}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Waktu</div>
                                        <div class="col-lg-9 col-md-8">
                                            {{Carbon\Carbon::createFromFormat('Y-m-d', $prestasi->waktu)->format('d F Y')}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Tingkat</div>
                                        <div class="col-lg-9 col-md-8">{{$prestasi->tingkat}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Kategori</div>
                                        <div class="col-lg-9 col-md-8">{{$prestasi->kategori}}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection