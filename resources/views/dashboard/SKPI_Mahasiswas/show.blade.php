@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Data SKPI Mahasiswa, {{$Mahasiswa->nama}}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/SKPIMhs">Data SKPI Mahasiswa</a></li>
            <li class="breadcrumb-item">SKPI Mahasiswa</li>
        </ol>
    </nav>
</div>
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if($Mahasiswa->image)
                    <img src="{{ asset('storage/' . $Mahasiswa->image) }}" alt="Profile" width="100" height="95" class="rounded-circle">
                    @else
                    <img src="/img/anonim.png" alt="Profile" class="rounded-circle">
                    @endif
                    <h2>{{$Mahasiswa->nama}}</h2>
                    <h3>{{$Mahasiswa->npm}}</h3>
                </div>
            </div>

        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <!-- <div class="dropdown d-inline">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Unduh
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/dokumen/{{$Mahasiswa->id}}">Unduh Bahasa Indonesia</a></li>
                                    <li><a class="dropdown-item" href="/dokumen/{{$Mahasiswa->id}}/EN">Unduh Bahasa Inggris</a></li>
                                </ul>
                            </div> -->

                            <div class="dropdown d-inline">
                                <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Unduh PDF
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/PDF/{{$Mahasiswa->id}}" target="_blank">Unduh Bahasa Indonesia</a></li>
                                    <li><a class="dropdown-item" href="/PDF/{{$Mahasiswa->id}}/EN" target="_blank">Unduh Bahasa Inggris</a></li>
                                </ul>
                            </div>

                            <h3 class="mt-3 mb-3"><b>Informasi Tentang Identitas Diri Pemegang SKPI</b></h3>
                            <!-- <h1 class="card-title">Informasi Tentang Identitas Diri Pemegang SKPI</h1> -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NPM</div>
                                <div class="col-lg-9 col-md-8">{{ $Mahasiswa->npm }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8">{{ $Mahasiswa->nama }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">No Ijazah</div>
                                @if($Mahasiswa->no_ijazah)
                                <div class="col-lg-9 col-md-8">{{$Mahasiswa->no_ijazah}}</div>
                                @else
                                <div class="col-lg-3 col-md-5 bg bg-danger"><b>belum disi</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Prodi</div>
                                <div class="col-lg-9 col-md-8">{{$Mahasiswa->prodi->N_prodi}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Profesi</div>
                                @if($Mahasiswa->status_profesi)
                                <div class="col-lg-9 col-md-8">{{$Mahasiswa->status_profesi}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Angkatan</div>
                                <div class="col-lg-9 col-md-8">{{ $Mahasiswa->angkatan }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kelas</div>
                                <div class="col-lg-9 col-md-8">{{ $Mahasiswa->kelas }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Aktif</div>
                                <div class="col-lg-9 col-md-8">{{ $Mahasiswa->status_aktif }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tahun Lulus</div>
                                @if($Mahasiswa->status_aktif === 'Lulus')
                                <div class="col-lg-9 col-md-8">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Mahasiswa->updated_at)->year;}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                @if($Mahasiswa->tmpt_lahir)
                                <div class="col-lg-9 col-md-8">{{$Mahasiswa->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $Mahasiswa->ttl)->format('d F Y')}}</div>
                                @else
                                <div class="col-lg-3 col-md-5 bg bg-danger"><b>belum diisi</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pendidikan Lanjut</div>
                                @if($Mahasiswa->pendidikan_lanjut)
                                <div class="col-lg-9 col-md-8">{{$Mahasiswa->pendidikan_lanjut}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <h3 class="mt-3 mb-2"><b>Informasi Tentang Kualifikasi dan Hasil yang Dicapai</b></h3>
                            <h4 class="card-title">A. Capaian Pembelajaran</h4>
                            @foreach($pengajuans as $p)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kemampuan Kerja</div>
                                <div class="col-lg-9 col-md-8">{!! $p->kemampuan_kerja !!}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Penguasaan Pengetahuan</div>
                                <div class="col-lg-9 col-md-8">{!! $p->penguasaan !!}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Sikap Khusus</div>
                                <div class="col-lg-9 col-md-8">{!! $p->sikap_khusus !!}</div>
                            </div>
                            @endforeach

                            <h4 class="card-title">B. Aktifitas Prestasi dan Penghargaan</h4>
                            <h6 class="label">Pemegang Surat Keterangan Pendamping Ijazah ini memiliki sertifikat profesional: </h6>
                            <ul>
                                @forelse($prestasis as $prestasi)
                                <li>
                                    <p>{{ $prestasi->nama }}</p>
                                </li>
                                @empty
                                <li>
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>
                            <h6 class="label">Mahasiswa Universitas Suryakancana telah mengikuti program atau telah memenuhi tanggung jawab : </h6>
                            <ul>
                                @forelse($kegiatans as $kegiatan)
                                <li>
                                    <p>{{$kegiatan->nama}}</p>
                                </li>
                                @empty
                                <li>
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>

                            <h3 class="mt-3 mb-2"><b>Pengesahan SKPI</b></h3>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Dekan</div>
                                <div class="col-lg-9 col-md-8">H. Widy Setyawan, Ir., M.T.</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NIK</div>
                                <div class="col-lg-9 col-md-8">4103005015</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Tanggal Di setujui</div>
                                <div class="col-lg-9 col-md-8">Cianjur,
                                    @foreach($pengajuans as $p)
                                    {{Carbon\Carbon::createFromFormat('Y-m-d', $p->tgl_setuju)->format('d F Y')}}
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection