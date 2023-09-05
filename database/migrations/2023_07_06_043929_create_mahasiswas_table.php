<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id');
            $table->foreignId('user_id');
            $table->string('npm');
            $table->string('nama');
            $table->string('angkatan');
            $table->string('kelas');
            $table->string('jk');
            $table->string('status_aktif');
            $table->string('status_pengajuan');
            $table->string('tmpt_lahir')->nullable();
            $table->string('email')->nullable();
            $table->date('ttl')->nullable();
            $table->string('no_ijazah')->unique()->nullable();
            $table->string('jmlh_smt')->nullable();
            $table->date('thn_lulus')->nullable();
            $table->string('image')->nullable();
            $table->string('pendidikan_lanjut')->nullable();
            $table->string('status_profesi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
