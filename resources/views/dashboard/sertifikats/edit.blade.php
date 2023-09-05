@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Prestasi</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/sertifikats/{{$sertifikat->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $sertifikat->nama) }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{ old('tempat', $sertifikat->tempat) }}">
            @error('tempat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu Pelaksanaan</label>
            <input type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu', $sertifikat->waktu) }}" required autocomplete="off">
            @error('waktu')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Bukti Prestasi</label>
            <input type="hidden" name="oldImage" value="{{ $sertifikat->image }}">
            @if($sertifikat->image)
            <img src="{{ asset('storage/' . $sertifikat->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-3">
            @endif
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
                <option value="Magang" {{ old('kategori', $sertifikat->kategori)=='Magang' ? 'selected' : '' }}>Magang</option>
                <option value="Pelatihan" {{ old('kategori', $sertifikat->kategori)=='Pelatihan' ? 'selected' : '' }}>Pelatihan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
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