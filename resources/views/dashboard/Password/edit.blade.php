@extends('dashboard.layouts.main2')

@section('container')
<div class="pagetitle">
    <h1>Ubah Password</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Ubah Password</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Password</h1>
        </div>

        @if(session()->has('failed'))
        <div class="alert alert-danger col-lg-10 alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container2">
            <div class="col-lg-8">
                <form action="{{ route('password.update') }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password">
                        @error('current_password')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                        {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection