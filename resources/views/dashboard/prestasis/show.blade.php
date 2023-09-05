@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Bukti Kegiatan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/prestasis">Kegiatan Mahasiswa</a></li>
        </ol>
    </nav>
</div>

<section class="section profile">
    <div class="row">

        <div class="col-xl-10">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Bukti Kegiatan Mahasiswa</h5>

                            <img src="{{ asset('storage/' . $prestasi->image) }} " width="250" alt=" {{ $prestasi->nama }}" class="img-fluid mb-4">

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Kegiatan</div>
                                <div class="col-lg-9 col-md-8">{{$prestasi->nama}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Tempat</div>
                                <div class="col-lg-9 col-md-8">{{$prestasi->tempat}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Tingkat</div>
                                <div class="col-lg-9 col-md-8">{{$prestasi->tingkat}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Kategori</div>
                                <div class="col-lg-9 col-md-8">{{$prestasi->kategori}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Waktu Pelaksanaan</div>
                                <div class="col-lg-9 col-md-8">{{Carbon\Carbon::createFromFormat('Y-m-d', $prestasi->waktu)->format('d F Y')}}</div>
                            </div>

                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection