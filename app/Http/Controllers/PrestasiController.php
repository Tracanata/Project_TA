<?php

namespace App\Http\Controllers;

use App\Http\Requests\AjukanPrestasiRequest;
use App\Models\Prestasi;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePrestasiRequest;
use App\Http\Requests\UpdatePrestasiRequest;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.prestasis.index', [
            'prestasis' => Prestasi::where('user_id', auth()->user()->id)->get(),
            'mahasiswa' => Mahasiswa::where('user_id', auth()->user()->id)->get(),
            'pengajuans' => Pengajuan::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prestasis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrestasiRequest $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
            'tingkat' => 'required',
            'image' => 'required|image|file|max:5024',
            'kategori' => 'required'
        ]);
        $validateData['image'] = $request->file('image')->store('prestasi-images');
        $validateData['mahasiswa_id'] = Mahasiswa::where('user_id', auth()->user()->id)->value('id');
        $validateData['user_id'] = auth()->user()->id;
        $validateData['status'] = 'ada';
        Prestasi::create($validateData);

        return redirect('/dashboard/prestasis')->with('success', 'Data Berhasil Di Input');
    }

    // Ajukan Data
    public function ajukan()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::user()->id;

        // Periksa apakah ada data prestasi yang dimiliki oleh user yang sedang login
        $prestasiUser = Prestasi::where('user_id', $userId)->first();
        $pengajuanUser = Pengajuan::where('user_id', $userId)->first();

        if ($prestasiUser && $pengajuanUser) {
            Pengajuan::where('user_id', auth()->user()->id)->delete();
            Prestasi::where('user_id', auth()->user()->id)
                ->where('status', 'ada')
                ->orWhere('status', 'ditolak')
                ->update(['status' => 'diajukan']);
            Mahasiswa::where('user_id', auth()->user()->id)
                ->where('status_pengajuan', 'ada')
                ->orWhere('status_pengajuan', 'ditolak')
                ->update(['status_pengajuan' => 'diajukan']);
            return redirect('/dashboard/prestasis')->with('success', 'Data Telah diajukan');
        } elseif ($prestasiUser) {
            Prestasi::where('user_id', auth()->user()->user_id)
                ->where('status', 'ada')
                ->orWhere('status', 'ditolak')
                ->update(['status' => 'diajukan']);
            Mahasiswa::where('user_id', auth()->user()->id)
                ->where('status_pengajuan', 'ada')
                ->orWhere('status_pengajuan', 'ditolak')
                ->update(['status_pengajuan' => 'diajukan']);
            return redirect('/dashboard/prestasis')->with('success', 'Data Telah diajukan');
        } else {
            return redirect('/dashboard/prestasis')->with('error', 'Silahkan input data prestasi sebelum mengajukan.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return view('dashboard.prestasis.show', [
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('dashboard.prestasis.edit', [
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrestasiRequest $request, Prestasi $prestasi)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
            'tingkat' => 'required',
            'kategori' => 'required'
        ]);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('prestasi-images');
        }
        $validateData['mahasiswa_id'] = Mahasiswa::where('user_id', auth()->user()->id)->value('id');
        $validateData['user_id'] = auth()->user()->id;
        dd($validateData);
        Prestasi::where('id', $prestasi->id)->update($validateData);

        return redirect('/dashboard/prestasis')->with('success', 'Data Berhasil Di Ubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->image) {
            Storage::delete($prestasi->image);
        }
        Prestasi::destroy($prestasi->id);
        return redirect('/dashboard/prestasis')->with('success', 'Post has been deleted');
    }
}
