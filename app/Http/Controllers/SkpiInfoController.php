<?php

namespace App\Http\Controllers;

use App\Models\SkpiInfo;
use App\Http\Requests\StoreSkpiInfoRequest;
use App\Http\Requests\UpdateSkpiInfoRequest;

class SkpiInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $InfoCount = SkpiInfo::count();

        return view('dashboard.infos.index', [
            'infos' => SkpiInfo::all(),
            'infoCount' => $InfoCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.infos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkpiInfoRequest $request)
    {
        $validateData = $request->validate([
            'pendidikan' => 'required|string',
            'pendidikan_en' => 'required|string',
            'kkni' => 'required|string',
            'kkni_en' => 'required|string'
        ]);
        SkpiInfo::create($validateData);

        return redirect('/dashboard/infos')->with('success', 'Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkpiInfo $skpiInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkpiInfo $skpiInfo)
    {
        return view('dashboard.infos.edit', [
            'infos' => SkpiInfo::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkpiInfoRequest $request, SkpiInfo $skpiInfo)
    {
        $validateData = $request->validate([
            'pendidikan' => 'required|string',
            'pendidikan_en' => 'required|string',
            'kkni' => 'required|string',
            'kkni_en' => 'required|string'
        ]);
        $skpiInfo->update($validateData);

        return redirect('/dashboard/infos')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkpiInfo $skpiInfo)
    {
        //
    }
}
