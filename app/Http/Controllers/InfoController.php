<?php

namespace App\Http\Controllers;

use App\Models\InfoSkpi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInfoSkpiRequest;
use App\Http\Requests\UpdateInfoSkpiRequest;

class InfoController extends Controller
{
    public function index()
    {
        $InfoCount = InfoSkpi::count();

        return view('dashboard.infos.index', [
            'infos' => InfoSkpi::all(),
            'infoCount' => $InfoCount
        ]);
    }

    public function create()
    {
        return view('dashboard.infos.create');
    }

    public function store(StoreInfoSkpiRequest $request)
    {
        $validateData = $request->validate([
            'pendidikan' => 'required|string',
            'pendidikan_en' => 'required|string',
            'kkni' => 'required|string',
            'kkni_en' => 'required|string'
        ]);
        InfoSkpi::create($validateData);

        return redirect('/dashboard/infos')->with('success', 'Data Berhasil Di Input');
    }

    public function edit(InfoSkpi $infoSkpi)
    {
        return view('dashboard.infos.edit', [
            'infoSkpi' => $infoSkpi
        ]);
    }
    public function update(UpdateInfoSkpiRequest $request, InfoSkpi $infoSkpi)
    {
        $validateData = $request->validate([
            'pendidikan' => 'required|string',
            'kkni' => 'required|string'
        ]);
        $infoSkpi->update($validateData);

        return redirect('/dashboard/infos')->with('success', 'Data Berhasil Di Edit');
    }
}
