<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Sertifikat;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSertifikatRequest;
use App\Http\Requests\UpdateSertifikatRequest;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sertifikats.index', [
            'sertifikats' => Sertifikat::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sertifikats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSertifikatRequest $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
            'image' => 'required|image|file|max:5024',
            'kategori' => 'required'
        ]);
        $validateData['image'] = $request->file('image')->store('sertifikat-images');
        $validateData['mahasiswa_id'] = Mahasiswa::where('user_id', auth()->user()->id)->value('id');
        $validateData['user_id'] = auth()->user()->id;
        $validateData['status'] = false;
        Sertifikat::create($validateData);

        return redirect('/dashboard/sertifikats')->with('success', 'Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        return view('dashboard.sertifikats.show', [
            'sertifikat' => $sertifikat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        return view('dashboard.sertifikats.edit', [
            'sertifikat' => $sertifikat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSertifikatRequest $request, Sertifikat $sertifikat)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
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
        Sertifikat::where('id', $sertifikat->id)->update($validateData);

        return redirect('/dashboard/sertifikats')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        if ($sertifikat->image) {
            Storage::delete($sertifikat->image);
        }
        Sertifikat::destroy($sertifikat->id);
        return redirect('/dashboard/sertifikats')->with('success', 'Data Telah dihapus');
    }
}
