<?php

namespace App\Models;

use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function akun()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }

    // public function sertifikat()
    // {
    //     return $this->hasMany(Sertifikat::class);
    // }


    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
