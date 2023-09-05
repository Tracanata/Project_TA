@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Info SKPI</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Info SKPI</li>
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Bahasa Inggris</button>
                        </li>
                    </ul>
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            @if($infoCount > 0)
                            @foreach($infos as $infoSkpi)
                            <a href="/dashboard/infos/edit/{{ $infoSkpi->id}}" class="btn btn-warning mb-2 mt-3">Edit Data </a>
                            @endforeach
                            @else
                            <a href="/dashboard/infos/create" class="btn btn-primary mb-2 mt-3">Tambah Data </a>
                            @endif
                            <h5 class="card-title">SISTEM PENDIDIKAN TINGGI DI INDONESIA</h5>
                            <div class="scroll-bg mb-2">
                                <div class="scroll-div">
                                    @foreach($infos as $info)
                                    <div class="scroll-object">
                                        {!! $info->pendidikan !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <h5 class="card-title mt-5">Kerangka Kualifikasi Nasional Indonesia</h5>
                            <div class="scroll-bg mb-2">
                                <div class="scroll-div">
                                    @foreach($infos as $info)
                                    <div class="scroll-object">
                                        {!! $info->kkni !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit" id="profile-edit">
                            <h5 class="card-title">Higher Education System in Indonesia</h5>
                            <div class="scroll-bg mb-2">
                                <div class="scroll-div">
                                    @foreach($infos as $info)
                                    <div class="scroll-object">
                                        {!! $info->pendidikan_en !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <h5 class="card-title mt-5">Indonesian Qualiﬁcation Framework</h5>
                            <div class="scroll-bg mb-2">
                                <div class="scroll-div">
                                    @foreach($infos as $info)
                                    <div class="scroll-object">
                                        {!! $info->kkni_en !!}
                                    </div>
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