<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    public function index()
    {
        return view('dashboard.persetujuans.index', [
            "Mahasiswas" => Mahasiswa::where('status_pengajuan', 'diproses')
                ->get()
        ]);
    }

    public function konfirmasi(Mahasiswa $mahasiswa)
    {
        return view('dashboard.persetujuans.konfirmasi', [
            "mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'dipilih')
                ->get(),
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function tertolak(Request $request, $id)
    {
        $request->validate([
            'catatan_tolak' => 'required',
        ]);
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update([
            'catatan_tolak' => $request->input('catatan_tolak'),
        ]);

        Prestasi::where('mahasiswa_id', $pengajuan->mahasiswa->id)
            ->where('status', 'dipilih')
            ->update(['status' => 'ditangguhkan']);
        Mahasiswa::where('id', $pengajuan->mahasiswa->id)
            ->where('status_pengajuan', 'diproses')
            ->update(['status_pengajuan' => 'ditangguhkan']);

        return redirect('/dashboard/persetujuans')->with('error', 'Data Ditolak');
    }

    public function setujui(Mahasiswa $mahasiswa)
    {
        Pengajuan::where('mahasiswa_id', $mahasiswa->id)
            ->update(['tgl_setuju' => now()]);
        Prestasi::where('mahasiswa_id', $mahasiswa->id)
            ->where('status', 'dipilih')
            ->update(['status' => 'disetujui']);
        Mahasiswa::where('id', $mahasiswa->id)
            ->where('status_pengajuan', 'diproses')
            ->update(['status_pengajuan' => 'disetujui']);
        return redirect('/dashboard/persetujuans')->with('success', 'Data Disetujui');
    }
}
