<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuansController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles === 'KProdiIF') {
            return view('dashboard.pengajuans.index', [
                "mahasiswas" => Mahasiswa::where('prodi_id', '1')
                    ->whereIn('status_pengajuan', ['diproses', 'diajukan', 'ditangguhkan'])
                    ->get()
            ]);
        } else if (auth()->user()->roles === 'KProdiSP') {
            return view('dashboard.pengajuans.index', [
                "mahasiswas" => Mahasiswa::where('prodi_id', '2')
                    ->whereIn('status_pengajuan', ['diproses', 'diajukan', 'ditangguhkan'])
                    ->get()
            ]);
        } else if (auth()->user()->roles === 'KProdiIS') {
            return view('dashboard.pengajuans.index', [
                "mahasiswas" => Mahasiswa::where('prodi_id', '3')
                    ->whereIn('status_pengajuan', ['diproses', 'diajukan', 'ditangguhkan'])
                    ->get()
            ]);
        }
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.pengajuans.show', [
            "mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function store(Request $request, Mahasiswa $mahasiswa)
    {
        $selectedData = $request->input('selected_data');

        if (empty($selectedData)) {
            return redirect()->back()->with('error', 'Pilih setidaknya satu data prestasi.');
        }

        // Loop melalui data yang terpilih
        foreach ($selectedData as $dataId) {
            $data = Prestasi::findOrFail($dataId);

            // Lakukan update pada field yang ingin diubah
            $data->update([
                'status' => 'dipilih', // Ganti 'baru' dengan status yang diinginkan
                // Tambahkan field lain yang ingin diupdate jika diperlukan
            ]);
        }

        $validateData = $request->validate([
            'kemampuan_kerja' => 'required',
            'penguasaan' => 'required',
            'sikap_khusus' => 'required',
        ]);
        $validateData['mahasiswa_id'] = $mahasiswa->id;
        $validateData['user_id'] = $mahasiswa->user_id;
        Pengajuan::create($validateData);

        // Update data mahasiswa berdasarkan data yang diterima dari request
        Mahasiswa::where('id', $mahasiswa->id)
            ->where('status_pengajuan', 'diajukan')
            ->update(['status_pengajuan' => 'diproses']);


        // Redirect ke halaman yang sesuai setelah update selesai
        return redirect('/dashboard/pengajuans')->with('success', 'Data Berhasil diajukan');
    }

    public function detail(Mahasiswa $mahasiswa)
    {
        return view('dashboard.pengajuans.detail', [
            "mahasiswas" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'dipilih')
                ->get(),
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function tolak(Request $request,  Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'catatan_tolak' => 'required',
        ]);
        $validateData['mahasiswa_id'] = $mahasiswa->id;
        $validateData['user_id'] = $mahasiswa->user_id;
        Pengajuan::create($validateData);

        // Update data mahasiswa berdasarkan data yang diterima dari request
        Mahasiswa::where('id', $mahasiswa->id)
            ->where('status_pengajuan', 'diajukan')
            ->update(['status_pengajuan' => 'ditolak']);

        Prestasi::where('id', $mahasiswa->id)
            ->where('status', 'diajukan')
            ->update(['status' => 'ditolak']);

        // Redirect ke halaman yang sesuai setelah update selesai
        return redirect('/dashboard/pengajuans')->with('failed', 'Data Pengajuan ditolak');
    }

    public function cek(Mahasiswa $mahasiswa)
    {
        return view('dashboard.pengajuans.cek', [
            "mahasiswas" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'ditangguhkan')
                ->get(),
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function kembalikan(Request $request, $id)
    {
        $request->validate([
            'catatan_tolak' => 'required',
        ]);
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update([
            'catatan_tolak' => $request->input('catatan_tolak'),
            'kemampuan_kerja' => null,
            'penguasaan' => null,
            'sikap_khusus' => null
        ]);

        Prestasi::where('mahasiswa_id', $pengajuan->mahasiswa->id)
            ->where(function ($query) {
                $query->where('status', 'ditangguhkan')
                    ->orWhere('status', 'diajukan');
            })
            ->update(['status' => 'ditolak']);
        Mahasiswa::where('id', $pengajuan->mahasiswa->id)
            ->where('status_pengajuan', 'ditangguhkan')
            ->update(['status_pengajuan' => 'ditolak']);

        return redirect('/dashboard/pengajuans')->with('error', 'Data Dikembalikan');
    }

    public function ulang(Request $request, $id)
    {
        $request->validate([
            'kemampuan_kerja' => 'required',
            'penguasaan' => 'required',
            'sikap_khusus' => 'required',
        ]);
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update([
            'kemampuan_kerja' => $request->input('kemampuan_kerja'),
            'penguasaan' => $request->input('penguasaan'),
            'sikap_khusus' => $request->input('sikap_khusus'),
            'catatan_tolak' => null
        ]);

        Prestasi::where('mahasiswa_id', $pengajuan->mahasiswa->id)
            ->where('status', 'ditangguhkan')
            ->update(['status' => 'dipilih']);
        Mahasiswa::where('id', $pengajuan->mahasiswa->id)
            ->where('status_pengajuan', 'ditangguhkan')
            ->update(['status_pengajuan' => 'diproses']);

        return redirect('/dashboard/pengajuans')->with('success', 'Data Kembali Diajukan');
    }
}
