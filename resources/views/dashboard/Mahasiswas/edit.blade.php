@extends('dashboard.layouts.main2')

@section('container')

<div class="card">
    <div class="card-body">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data Mahasiswa</h1>
        </div>

        <div class="col-lg-8">
            {{-- <form method="post" action="/dashboard/mahasiswas/{{$mahasiswa->id}}" enctype="multipart/form-data">
                --}}
                <form method="POST" action="/dashboard/mahasiswas/{{$mahasiswa->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm"
                            value="{{ old('npm', $mahasiswa->npm) }}">
                        @error('npm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', $mahasiswa->nama) }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk">
                            <option selected disabled>--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki" {{ old('jk', $mahasiswa->jk)=='Laki-Laki' ? 'selected' : ''
                                }}>Laki-Laki</option>
                            <option value="Perempuan" {{ old('jk', $mahasiswa->jk)=='Perempuan' ? 'selected' : ''
                                }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select class="form-select" name="prodi_id">
                            @foreach ($prodis as $prodi)
                            @if(old('prodi_id', $mahasiswa->prodi_id) == $prodi->id)
                            <option value="{{ $prodi->id }}" selected>{{ $prodi->N_prodi }}</option>
                            @else
                            <option value="{{ $prodi->id }}">{{ $prodi->N_prodi }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan"
                            name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}">
                        @error('angkatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas">
                            <option selected disabled>--Pilih Kelas--</option>
                            <option value="Reguler" {{ old('kelas', $mahasiswa->kelas)=='Reguler' ? 'selected' : ''
                                }}>Reguler</option>
                            <option value="Non Reguler" {{ old('kelas', $mahasiswa->kelas)=='Non Reguler' ? 'selected' :
                                ''
                                }}>Non Reguler</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="no_ijazah" class="form-label">No Ijazah</label>
                        <input type="text" class="form-control @error('no_ijazah') is-invalid @enderror" id="no_ijazah"
                            name="no_ijazah" value="{{ old('no_ijazah', $mahasiswa->no_ijazah) }}">
                        @error('no_ijazah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jmlh_smt" class="form-label">Jumlah Semester</label>
                        <select class="form-select" name="jmlh_smt">
                            <option selected disabled>--Total Semester--</option>
                            <option value="7" {{ old('jmlh_smt', $mahasiswa->jmlh_smt)=='7' ? 'selected' : '' }}>7
                            </option>
                            <option value="8" {{ old('jmlh_smt', $mahasiswa->jmlh_smt)=='8' ? 'selected' : '' }}>8
                            </option>
                            <option value="9" {{ old('jmlh_smt', $mahasiswa->jmlh_smt)=='9' ? 'selected' : '' }}>9
                            </option>
                            <option value="10" {{ old('jmlh_smt', $mahasiswa->jmlh_smt)=='10' ? 'selected' : '' }}>10
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status_aktif" class="form-label">Status Aktif</label>
                        <select class="form-select" name="status_aktif">
                            <option selected disabled>--Status Aktif--</option>
                            <option value="Aktif" {{ old('status_aktif', $mahasiswa->status_aktif)=='Aktif' ? 'selected'
                                :
                                '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ old('status_aktif', $mahasiswa->status_aktif)=='Tidak Aktif'
                                ?
                                'selected' : '' }}>Tidak Aktif</option>
                            <option value="Cuti" {{ old('status_aktif', $mahasiswa->status_aktif)=='Cuti' ? 'selected' :
                                ''
                                }}>Cuti</option>
                            <option value="Lulus" {{ old('status_aktif', $mahasiswa->status_aktif)=='Lulus' ? 'selected'
                                :
                                '' }}>Lulus</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </form>
        </div>
    </div>
</div>
@endsection