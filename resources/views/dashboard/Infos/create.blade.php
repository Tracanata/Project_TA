@extends('dashboard.layouts.main2')

@section('container')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Info SKPI</h1>
        </div>

        <div class="container2">
            <div class="col-lg-8">
                <form method="post" action="/dashboard/infos" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">
                            <h6> Sistem Pendidikan Tinggi Di Indonesia</h6>
                        </label>
                        @error('pendidikan')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="pendidikan" type="hidden" name="pendidikan" value="{{ old('pendidikan') }}">
                        <trix-editor input="pendidikan"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="pendidikan_en" class="form-label">
                            <h6>Higher Education System in Indonesia</h6>
                        </label>
                        @error('pendidikan_en')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="pendidikan_en" type="hidden" name="pendidikan_en" value="{{ old('pendidikan_en') }}">
                        <trix-editor input="pendidikan_en"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="kkni" class="form-label">
                            <h6> Kerangka Kualifikasi Nasional Indonesia</h6>
                        </label>
                        @error('kkni')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="kkni" type="hidden" name="kkni" value="{{ old('kkni') }}">
                        <trix-editor input="kkni"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="kkni_en" class="form-label">
                            <h6>Indonesian Qualiﬁcation Framework</h6>
                        </label>
                        @error('kkni_en')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="kkni_en" type="hidden" name="kkni_en" value="{{ old('kkni_en') }}">
                        <trix-editor input="kkni_en"></trix-editor>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </form>
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