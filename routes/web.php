<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SKPIController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\InfoSkpiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SkpiInfoController;
use App\Http\Controllers\StaffMhsController;
use App\Http\Controllers\PengajuansController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\DashboardProfilController;
use App\Http\Controllers\DashboardMahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home1');
});
// Route Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Kelola Dashboard
route::get('/dashboard', function () {
    $jumlahajukan = Mahasiswa::where('status_pengajuan', 'diajukan')->count();
    $jumlahproses = Mahasiswa::where('status_pengajuan', 'diproses')->count();
    $jumlahsetujui = Mahasiswa::where('status_pengajuan', 'disetujui')->count();
    $jumlahtolak = Mahasiswa::where('status_pengajuan', 'ditolak')->count();
    $tangguhkan = Mahasiswa::where('status_pengajuan', 'ditangguhkan')->count();
    return view('dashboard.index', compact('jumlahajukan', 'jumlahproses', 'jumlahsetujui', 'jumlahtolak', 'tangguhkan'));
})->middleware('auth');

route::resource('/dashboard/mahasiswas', DashboardMahasiswaController::class)->middleware('admin');
route::put('/dashboard/mahasiswas/edit/{mahasiswa:id}', [DashboardMahasiswaController::class, 'ubah'])->middleware('admin');
route::resource('/dashboard/profils', DashboardProfilController::class)->middleware('mahasiswa');
Route::resource('/dashboard/prestasis', PrestasiController::class)->middleware('mahasiswa');
Route::resource('/dashboard/sertifikats', SertifikatController::class)->middleware('mahasiswa');
Route::resource('/dashboard/news', NewsController::class)->middleware('admin');
Route::resource('/dashboard/infos', SkpiInfoController::class)->middleware('admin');
Route::get('/dashboard/infos/edit/{info:id}', [SkpiInfoController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/infos/edit/{info:id}', [SkpiInfoController::class, 'ubah'])->middleware('admin');
Route::resource('/dashboard/prodis', ProdiController::class)->middleware('admin');

Route::get('/dashboard/staffmhs', [StaffMhsController::class, 'index'])->middleware('staff');

// ajukan prestasi
Route::post('/dashboard/prestasi', [PrestasiController::class, 'ajukan'])->name('prestasi.ajukan');

// pengajuan
Route::get('/dashboard/pengajuans', [PengajuansController::class, 'index']);
Route::get('/dashboard/pengajuans/{mahasiswa:id}', [PengajuansController::class, 'show']);
Route::post('/dashboard/pengajuans/{mahasiswa:id}', [PengajuansController::class, 'store']);
Route::post('/dashboard/tolak/{mahasiswa:id}', [PengajuansController::class, 'tolak']);
Route::get('/dashboard/pengajuans/details/{mahasiswa:id}', [PengajuansController::class, 'detail']);
Route::get('/dashboard/pengajuans/cek/{mahasiswa:id}', [PengajuansController::class, 'cek']);
Route::put('/dashboard/kembalikan/{pengajuan:id}', [PengajuansController::class, 'kembalikan']);
Route::put('/dashboard/nilaiulang/{pengajuan:id}', [PengajuansController::class, 'ulang']);

// persetujuan
Route::get('/dashboard/persetujuans', [PersetujuanController::class, 'index']);
Route::get('/dashboard/konfirmasi/{mahasiswa:id}', [PersetujuanController::class, 'konfirmasi']);
// Konfirmasi Setujui atau Tolak
Route::put('/dashboard/tertolak/{mahasiswa:id}', [PersetujuanController::class, 'tertolak'])->name('persetujuans.tolak');
Route::put('/dashboard/persetujuans/{mahasiswa:id}', [PersetujuanController::class, 'setujui'])->name('persetujuans.setujui');

// SKPI Mahasiswa
Route::get('/dashboard/SKPIMhs', [SKPIController::class, 'index']);
Route::get('/dashboard/tampilkan/{mahasiswa:id}', [SKPIController::class, 'show']);
Route::get('/dokumen/{mahasiswa:id}', [SKPIController::class, 'dokumen']);
Route::get('/dokumen/{mahasiswa:id}/EN', [SKPIController::class, 'dokumenEN']);
Route::get('/PDF/{mahasiswa:id}', [SKPIController::class, 'pdf']);
Route::get('/PDF/{mahasiswa:id}/EN', [SKPIController::class, 'pdfEN']);

// Ubah Password
Route::get('/dashboard/password', [UbahPasswordController::class, 'edit'])->name('password.edit')->middleware('auth');
Route::put('/dashboard/password', [UbahPasswordController::class, 'update'])->name('password.update')->middleware('auth');

// reset password
Route::get('/forgot-password', [UbahPasswordController::class, 'reset'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [UbahPasswordController::class, 'store'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('success', 'Password Berhasil Di Ubah')
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
