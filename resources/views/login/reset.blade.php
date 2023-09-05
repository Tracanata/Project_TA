@extends('layouts.main')

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

        <main class="form-signin w-100 m-auto mt-20">
            <!-- resources/views/reset_password.blade.php -->
            <form action="/reset-password" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="quest_confirm" class="form-label">Pilih Pertanyaan Pemulihan</label>
                    <select class="form-select" name="quest_confirm">
                        <option selected disabled>--Pilih Pertanyaan Pemulihan--</option>
                        <option value="Makanan Kesukaan?" {{ old('quest_confirm')=='Makanan Kesukaan?' ? 'selected' : '' }}>Makanan Kesukaan?</option>
                        <option value="Hewan Kesukaan Anda?" {{ old('quest_confirm')=='Hewan Kesukaan Anda?' ? 'selected' : '' }}>Hewan Kesukaan Anda?</option>
                        <option value="Nama Pacar?" {{ old('quest_confirm')=='Nama Pacar?' ? 'selected' : '' }}>Nama Pacar?</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="answer_confirm" class="form-label">Jawab Konfirmasi</label>
                    <input type="text" class="form-control" name="answer_confirm" id="answer_confirm" required>
                </div>
                <div class="mb-3">
                    <label for="new_password">Password Baru:</label>
                    <input type="password" class="form-control" name="new_password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password">Konfirmasi Password Baru:</label>
                    <input type="password" class="form-control" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Reset Password</button>
            </form>
        </main>
    </div>
</div>
@endsection