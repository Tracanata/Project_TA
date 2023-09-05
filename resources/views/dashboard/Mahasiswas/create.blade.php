@extends('dashboard.layouts.main2')

@section('container')

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data Mahasiswa</h1>
        </div>

        <div class="col-lg-8">
            <form method="post" action="/dashboard/mahasiswas" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm') }}">
                    @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
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
                        <option value="Laki-Laki" {{ old('jk')=='Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ old('jk')=='Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-select" name="prodi_id">
                        <option selected disabled>--Pilih Program Studi--</option>
                        @foreach ($prodis as $prodi)
                        @if(old('prodi_id') == $prodi->id)
                        <option value="{{ $prodi->id }}" selected>{{ $prodi->N_prodi }}</option>
                        @else
                        <option value="{{ $prodi->id }}">{{ $prodi->N_prodi }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="number" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" value="{{ old('angkatan') }}">
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
                        <option value="Reguler" {{ old('kelas')=='Reguler' ? 'selected' : '' }}>Reguler</option>
                        <option value="Non Reguler" {{ old('kelas')=='Non Reguler' ? 'selected' : '' }}>Non Reguler</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection