<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\SkpiInfo;
use App\Models\Mahasiswa;
use App\Models\Nilai;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Barryvdh\DomPDF\Facade\Pdf;

class SKPIController extends Controller
{
    public function index()
    {
        return view('dashboard.SKPI_Mahasiswas.index', [
            "Mahasiswas" => Mahasiswa::where('status_pengajuan', 'disetujui')
                ->get()
        ]);
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $lang = new GoogleTranslate();
        $lang->setSource('id'); // Set the source language to Indonesian
        $lang->setSource();
        $lang->setTarget('en'); // Set the target language to English
        return view('dashboard.SKPI_Mahasiswas.show', [
            "Mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Magang')
                        ->orWhere('kategori', 'Pelatihan');
                })
                ->get(),
            "kegiatans" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Lomba')
                        ->orWhere('kategori', 'Seminar');
                })
                ->get(),
            "Infos" => SkpiInfo::all(),
            "lang" => $lang,
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function dokumen(Mahasiswa $mahasiswa)
    {
        return view('dashboard.SKPI_Mahasiswas.dokumen', [
            "Mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Magang')
                        ->orWhere('kategori', 'Pelatihan');
                })
                ->get(),
            "kegiatans" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Lomba')
                        ->orWhere('kategori', 'Seminar');
                })
                ->get(),
            "Infos" => SkpiInfo::all(),
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }
    public function dokumenEN(Mahasiswa $mahasiswa)
    {
        $lang = new GoogleTranslate();
        $lang->setSource('id'); // Set the source language to Indonesian
        $lang->setSource();
        $lang->setTarget('en'); // Set the target language to English
        return view('dashboard.SKPI_Mahasiswas.dokumenEN', [
            "Mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Magang')
                        ->orWhere('kategori', 'Pelatihan');
                })
                ->get(),
            "kegiatans" => Prestasi::where('mahasiswa_id', $mahasiswa->id)
                ->where('status', 'disetujui')
                ->where(function ($query) {
                    $query->where('kategori', 'Lomba')
                        ->orWhere('kategori', 'Seminar');
                })
                ->get(),
            "Infos" => SkpiInfo::all(),
            "lang" => $lang,
            "pengajuans" => Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get()
        ]);
    }

    public function pdf(Mahasiswa $mahasiswa)
    {
        $Mahasiswa = $mahasiswa;
        $prestasis = Prestasi::where('mahasiswa_id', $mahasiswa->id)
            ->where('status', 'disetujui')
            ->where(function ($query) {
                $query->where('kategori', 'Magang')
                    ->orWhere('kategori', 'Pelatihan');
            })
            ->get();
        $kegiatans = Prestasi::where('mahasiswa_id', $mahasiswa->id)
            ->where('status', 'disetujui')
            ->where(function ($query) {
                $query->where('kategori', 'Lomba')
                    ->orWhere('kategori', 'Seminar');
            })
            ->get();
        $Infos = SkpiInfo::all();
        $nilais = Nilai::all();
        $pengajuans = Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get();
        $pdf = Pdf::loadView('dashboard.SKPI_Mahasiswas.pdf', compact('Mahasiswa', 'prestasis', 'kegiatans', 'Infos', 'pengajuans', 'nilais'))->setPaper('A4', 'portrait');
        return $pdf->stream('laporan.pdf');
    }

    public function PDFen(Mahasiswa $mahasiswa)
    {
        $lang = new GoogleTranslate();
        $lang->setSource('id'); // Set the source language to Indonesian
        $lang->setSource();
        $lang->setTarget('en'); // Set the target language to English
        $Mahasiswa = $mahasiswa;
        $prestasis = Prestasi::where('mahasiswa_id', $mahasiswa->id)
            ->where('status', 'disetujui')
            ->where(function ($query) {
                $query->where('kategori', 'Magang')
                    ->orWhere('kategori', 'Pelatihan');
            })
            ->get();
        $kegiatans = Prestasi::where('mahasiswa_id', $mahasiswa->id)
            ->where('status', 'disetujui')
            ->where(function ($query) {
                $query->where('kategori', 'Lomba')
                    ->orWhere('kategori', 'Seminar');
            })
            ->get();
        $Infos = SkpiInfo::all();
        $nilais = Nilai::all();
        $pengajuans = Pengajuan::where('mahasiswa_id', $mahasiswa->id)->get();
        $pdf = Pdf::loadView('dashboard.SKPI_Mahasiswas.pdfEN', compact('Mahasiswa', 'prestasis', 'kegiatans', 'Infos', 'pengajuans', 'lang', 'nilais'))->setPaper('A4', 'portrait');
        return $pdf->stream('laporan.pdf');
    }
}
