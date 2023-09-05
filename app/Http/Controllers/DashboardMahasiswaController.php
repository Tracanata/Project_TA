<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.mahasiswas.index', [
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.mahasiswas.create', [
            'prodis' => Prodi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        // try {
        //     $validateData = $request->all();
        //     $validateData['status_aktif'] = 'aktif';
        //     $validateData['status_pengajuan'] = 'ada';

        //     User::create([
        //         'name' => $request->nama,
        //         'username' => $request->npm,
        //         'roles' => 'mahasiswa',
        //         'password' => bcrypt('12345')
        //     ]);

        //     $validateData['user_id'] = User::where('username', $request->npm)->value('id');
        //     Mahasiswa::create($validateData);
        //     // dd($validateData);
        // } catch (Exception $e) {
        //     return redirect('/dashboard/mahasiswas')->with('Failed', $e->getMessage());
        // }
        $validateData = $request->all();
        $validateData['status_aktif'] = 'Aktif';
        $validateData['status_pengajuan'] = 'ada';

        User::create([
            'name' => $request->nama,
            'username' => $request->npm,
            'roles' => 'mahasiswa',
            'password' => bcrypt('12345')
        ]);

        $validateData['user_id'] = User::where('username', $request->npm)->value('id');
        Mahasiswa::create($validateData);
        return redirect('/dashboard/mahasiswas')->with('success', 'Data Mahasiswa dan Akun Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswas.show', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodis = Prodi::all();

        return view('dashboard.mahasiswas.edit', [
            'mahasiswa' => $mahasiswa,
            'prodis' => $prodis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        dd($request);
        $rules = [
            'npm' => 'required',
            'nama' => 'required|max:255',
            'jk' => 'required',
            'angkatan' => 'required',
            'prodi_id' => 'required',
            'kelas' => 'required',
            'status_aktif' => 'required'
        ];
        $validateData = $request->validate($rules);

        $validate = Validator::make($validateData, $rules);

        if (!$validate->fails()) {
            User::where('id', $mahasiswa->user_id)->update([
                'name' => $request->nama,
                'username' => $request->npm,
            ]);
        }
        $validateData['user_id'] = User::where('username', $request->npm)->value('id');
        Mahasiswa::where('id', $mahasiswa->id)->update($validateData);

        return redirect('/dashboard/mahasiswas')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        if ($mahasiswa->image) {
            Storage::delete($mahasiswa->image);
        }
        User::destroy(User::where('id', Mahasiswa::where('id', $mahasiswa->id)->value('user_id'))->value('id'));
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/dashboard/mahasiswas')->with('success', 'Data has been deleted!');
    }
}
