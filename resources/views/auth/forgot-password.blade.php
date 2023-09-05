@extends('layouts.main2')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif


        <main class="form-signin w-100 m-auto mt-20">
            <div class="image d-flex flex-column justify-content-center align-items-center mt-10">
                <img src="/img/logo.png" height="100" width="100" alt="">
            </div>
            <h3 class="h3 mb-3 mt-3 fw-normal text-center">SKPI TEKNIK UNSUR</h3>
            <h4 class="h4 mb-3 fw-normal text-center">Forget Your Password ?</h4>
            <p class="mb-3 fw-normal text-center">please enter your mail to password reset request</p>
            <form action="{{ route('password.email') }}" method="post" class="d-inline">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-2 mb-2" type="submit">Reset Password</button>
            </form>
        </main>
    </div>
</div>
@endsection