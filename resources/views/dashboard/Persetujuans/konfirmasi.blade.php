@extends('dashboard.layouts.main2')

@section('container')
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if($mahasiswa->image)
                    <img src="{{ asset('storage/' . $mahasiswa->image) }}" alt="Profile" width="150" height="150" class="rounded-circle">
                    @else
                    <img src="/img/anonim.png" alt="Profile" class="rounded-circle">
                    @endif
                    <h2>{{$mahasiswa->nama}}</h2>
                    <h3>{{$mahasiswa->npm}}</h3>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NPM</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswa->npm }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswa->nama }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Prodi</div>
                                <div class="col-lg-9 col-md-8">{{$mahasiswa->prodi->N_prodi}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Profesi</div>
                                @if($mahasiswa->status_profesi)
                                <div class="col-lg-9 col-md-8">{{$mahasiswa->status_profesi}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Angkatan</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswa->angkatan }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kelas</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswa->kelas }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Aktif</div>
                                <div class="col-lg-9 col-md-8">{{ $mahasiswa->status_aktif }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tahun Lulus</div>
                                @if($mahasiswa->status_aktif === 'Lulus')
                                <div class="col-lg-9 col-md-8">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mahasiswa->updated_at)->year;}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                @if($mahasiswa->tmpt_lahir)
                                <div class="col-lg-9 col-md-8">{{$mahasiswa->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $mahasiswa->ttl)->format('d F Y')}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pendidikan Lanjut</div>
                                @if($mahasiswa->pendidikan_lanjut)
                                <div class="col-lg-9 col-md-8">{{$mahasiswa->pendidikan_lanjut}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>
                            <h5 class="card-title">Hasil Penilaian</h5>
                            @foreach($pengajuans as $P)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kemampuan Kerja</div>
                                <div class="col-lg-9 col-md-8">{!! $P->kemampuan_kerja !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Penguasaan Pengetahuan</div>
                                <div class="col-lg-9 col-md-8">{!! $P->penguasaan !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Sikap Khusus</div>
                                <div class="col-lg-9 col-md-8">{!! $P->sikap_khusus !!}</div>
                            </div>
                            @endforeach

                            <h5 class="card-title">Kegiatan mahasiswa</h5>
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
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#bukti{{$prestasi->id}}">
                                        Bukti Kegiatan
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="bukti{{$prestasi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('storage/' . $prestasi->image) }} " width="600" alt=" {{ $prestasi->nama }}" class="img-fluid mt-2">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <button type="button" class="btn btn-danger d-inline mb-3" data-bs-toggle="modal" data-bs-target="#tertolak">
                                Tolak
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="tertolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach($pengajuans as $pengajuan)
                                            <form method="post" action="/dashboard/tertolak/{{$pengajuan->id}}">
                                                @method('put')
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <form action="/dashboard/persetujuans/{{$mahasiswa->id}}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class=" d-inline btn btn-primary   mb-3">Setujui</button>
                            </form>
                        </div>

                    </div><!-- End Bordered Tabs -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection