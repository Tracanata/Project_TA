@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data profil</h1>
</div>
<div class="col-lg-8 mb-5">
    @foreach($profils as $profil)
    <form method="post" action="/dashboard/profils/{{$profil->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <fieldset disabled="disabled">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm', $profil->npm) }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $profil->nama) }}">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ old('prodi', $profil->prodi) }}">
            </div>
        </fieldset>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Foto Profil</label>
            <input type="hidden" name="oldImage" value="{{ $profil->image }}">
            @if($profil->image)
            <img src="{{ asset('storage/' . $profil->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
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
            <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" id="tmpt_lahir" name="tmpt_lahir" value="{{ old('tmpt_lahir', $profil->tmpt_lahir) }}">
            @error('tmpt_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ttl" class="form-label">Tgl Lahir</label>
            <input type="date" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $profil->ttl) }}" required autocomplete="off">
            @error('waktu')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pendidikan_lanjut" class="form-label">Pendidikan Lanjut</label>
            <p>(Isi Bila Ada)</p>
            <input type="text" class="form-control @error('pendidikan_lanjut') is-invalid @enderror" id="pendidikan_lanjut" name="pendidikan_lanjut" value="{{ old('pendidikan_lanjut', $profil->pendidikan_lanjut) }}">
            @error('pendidikan_lanjut')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status_profesi" class="form-label">Status Profesi</label>
            <p>(Isi Bila Ada)</p>
            <input type="text" class="form-control @error('status_profesi') is-invalid @enderror" id="status_profesi" name="status_profesi" value="{{ old('status_profesi', $profil->status_profesi) }}">
            @error('status_profesi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endforeach
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