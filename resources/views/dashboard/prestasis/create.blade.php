@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Form Input Kegiatan Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/prestasis">Data Kegiatan Mahasiswa</a></li>
            <li class="breadcrumb-item">Form Input Kegiatan Mahasiswa</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Input Data Kegiatan Mahasiswa</h1>
        </div>

        <div class="col-lg-8">
            <form method="post" action="/dashboard/prestasis" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tempat" class="form-label">Tempat</label>
                    <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{ old('tempat') }}">
                    @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu Pelaksanaan</label>
                    <input type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required autocomplete="off">
                    @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tingkat" class="form-label">Tingkat
                        <p style="font-size: 15px;">(pilih -, bila jenis kegiatan merupakan pelatihan atau magang)</p>
                    </label>
                    <select class="form-select" name="tingkat">
                        <option selected disabled>--Tingkat Kegiatan--</option>
                        <option value="Lokal" {{ old('tingkat')=='Lokal' ? 'selected' : '' }}>Lokal</option>
                        <option value="Nasional" {{ old('tingkat')=='Nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="Internasional" {{ old('tingkat')=='Nasional' ? 'selected' : '' }}>Internasional</option>
                        <option value="-" {{ old('tingkat')=='-' ? 'selected' : '' }}>-</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Bukti Kegiatan (Sertifikat / SK)</label>
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Jenis Kegiatan</label>
                    <select class="form-select" name="kategori">
                        <option selected disabled>--Jenis Kegiatan--</option>
                        <option value="Lomba" {{ old('kategori')=='Lomba' ? 'selected' : '' }}>Lomba</option>
                        <option value="Seminar" {{ old('kategori')=='Seminar' ? 'selected' : '' }}>Seminar</option>
                        <option value="Magang" {{ old('kategori')=='Magang' ? 'selected' : '' }}>Magang</option>
                        <option value="Pelatihan" {{ old('kategori')=='Pelatihan' ? 'selected' : '' }}>Pelatihan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        // mengambil data gambar
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection