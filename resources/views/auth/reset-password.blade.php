@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->has('status'))
        <div class="alert alert-success">
            {{ session()->get('status') }}
        </div>
        @endif

        <div class="center-container2">
            <div class="center-content">
                <main class="form-signin w-100 m-auto mt-20">
                    <div class="image d-flex flex-column justify-content-center align-items-center mt-10">
                        <img src="/img/logo.png" height="100" width="100" alt="">
                    </div>
                    <h3 class="h3 mb-3 mt-3 fw-normal text-center">SKPI TEKNIK UNSUR</h3>
                    <h4 class="h4 mb-3 fw-normal text-center">please enter your new password</h4>
                    <form action="{{ route('password.update') }}" method="post" class="d-inline">
                        @csrf
                        <div class="form-floating">
                            <input type="hidden" name="token" value="{{request()->token}}">
                            <input type="hidden" name="email" value="{{request()->email}}">
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password_confirmation" required>
                            <label for="floatingPassword">Password Confirmation</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-2 mb-2" type="submit">Update Password</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection