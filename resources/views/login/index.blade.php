@extends('layouts.main2')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <div class="image d-flex flex-column justify-content-center align-items-center">
                <img src="/img/logo.png" height="100" width="100" alt="">
            </div>
            <h2 class="h3 mb-3 fw-normal text-center">SKPI TEKNIK UNSUR</h2>
            <h2 class="h3 mb-3 fw-normal text-center">Please Login</h2>
            <form action="/login" method="post" class="d-inline">
                @csrf
                <div class="form-floating">
                    <input type="number" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" autofocus required value="{{ old('username') }}">
                    <label for="floatingInput">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-2 mb-2" type="submit">Login</button>
                <div class="center-container">
                    <div class="center-content">
                        <a href="/" class="btn btn-secondary"><- Back</a>
                                <a href="/forgot-password" class="btn btn-warning"> Foget Password</a>
                    </div>
                </div>

            </form>
        </main>
    </div>
</div>
@endsection