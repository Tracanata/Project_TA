@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Profile</li>
        </ol>
    </nav>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-15 alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @foreach($profils as $profil)
                    @if($profil->image)
                    <img src="{{ asset('storage/' . $profil->image) }}" alt="Profile" width="100" height="95" class="rounded-circle">
                    @else
                    <img src="/img/anonim.png" alt="Profile" class="rounded-circle">
                    @endif
                    <h2>{{$profil->nama}}</h2>
                    <h3>{{$profil->npm}}</h3>
                    <h6>{{ auth()->user()->roles }}</h6>
                    @endforeach
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            @foreach($profils as $profil)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NPM</div>
                                <div class="col-lg-9 col-md-8">{{ $profil->npm }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8">{{ $profil->nama }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Prodi</div>
                                <div class="col-lg-9 col-md-8">{{$profil->prodi->N_prodi}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Profesi</div>
                                @if($profil->status_profesi)
                                <div class="col-lg-9 col-md-8">{{$profil->status_profesi}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Angkatan</div>
                                <div class="col-lg-9 col-md-8">{{ $profil->angkatan }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kelas</div>
                                <div class="col-lg-9 col-md-8">{{ $profil->kelas }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Aktif</div>
                                <div class="col-lg-9 col-md-8">{{ $profil->status_aktif }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tahun Lulus</div>
                                @if($profil->status_aktif === 'Lulus')
                                <div class="col-lg-9 col-md-8">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $profil->updated_at)->year;}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                @if($profil->tmpt_lahir)
                                <div class="col-lg-9 col-md-8">{{$profil->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $profil->ttl)->format('d F Y')}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pendidikan Lanjut</div>
                                @if($profil->pendidikan_lanjut)
                                <div class="col-lg-9 col-md-8">{{$profil->pendidikan_lanjut}}</div>
                                @else
                                <div class="col-lg-9 col-md-8"><b>-</b></div>
                                @endif
                            </div>
                            @endforeach
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            @foreach($profils as $profil)
                            <form method="post" action="/dashboard/profils/{{$profil->id}}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
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
                                </div>
                                <!-- <div class="row mb-3">
                                    <label for="image" class="form-label">Upload Foto Profil</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="hidden" name="oldImage" value="{{ $profil->image }}">
                                        @if($profil->image)
                                        <img src="{{ asset('storage/' . $profil->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                                        @else
                                        <img class="img-preview img-fluid mb-3 col-sm-3">
                                        @endif
                                    </div>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div> -->

                                <fieldset disabled="disabled">
                                    <div class="row mb-3">
                                        <label for="npm" class="col-md-4 col-lg-3 col-form-label">NPM</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="npm" type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" value="{{ old('npm', $profil->npm) }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama', $profil->nama) }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="prodi" class="col-md-4 col-lg-3 col-form-label">Prodi</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="prodi_id" type="text" class="form-control @error('prodi_id') is-invalid @enderror" id="prodi_id" value="{{ old('prodi_id', $profil->Prodi->N_prodi) }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="angkatan" class="col-md-4 col-lg-3 col-form-label">Angkatan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="angkatan" type="number" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" value="{{ old('angkatan', $profil->angkatan) }}">
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row mb-3">
                                    <label for="status_profesi" class="col-md-4 col-lg-3 col-form-label">Status Profesi <p>(Isi Bila Ada)</p></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="status_profesi" type="text" class="form-control @error('status_profesi') is-invalid @enderror" id="status_profesi" value="{{ old('status_profesi', $profil->status_profesi) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tmpt_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" id="tmpt_lahir" name="tmpt_lahir" value="{{ old('tmpt_lahir', $profil->tmpt_lahir) }}">
                                        @error('tmpt_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ttl" class="col-md-4 col-lg-3 col-form-label">Tgl Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="date" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $profil->ttl) }}" required autocomplete="off">
                                        @error('waktu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="pendidikan_lanjut" class="col-md-4 col-lg-3 col-form-label">Pendidikan Lanjut <p>(Isi Bila Ada)</p></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control @error('pendidikan_lanjut') is-invalid @enderror" id="pendidikan_lanjut" name="pendidikan_lanjut" value="{{ old('pendidikan_lanjut', $profil->pendidikan_lanjut) }}">
                                        @error('pendidikan_lanjut')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            @endforeach
                            <!-- End Profile Edit Form -->

                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
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