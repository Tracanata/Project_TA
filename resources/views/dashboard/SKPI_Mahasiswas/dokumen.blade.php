<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom styles for this template -->
    <link href="/css/dokumen.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
</head>

<body>
    <div class="atasan">
        <img src="/img/unsur.png" alt="Profile Mahasiswa" height="100" width="100">
    </div>
    <div class="atasan-1">
        <h2>UNIVERSITAS SURYAKANCANA</h2>
    </div>

    <div class="tabel">
        <table class="my-table">
            <tr>
                <td>
                    <p class="p1">SURAT KETERANGAN PENDAMPING IJAZAH</p>
                </td>
            </tr>
            <tr>
                <td>No: SKPI</td>
            </tr>
            <tr>
                <td>
                    Surat Keterangan Pendamping Ijazah (SKPI) ini mengacu pada Kerangka Kualiﬁkasi Nasional Indonesia (KKNI) dan Konvensi Unesco tentang pengakuan studi, ijazah dan gelar pendidikan tinggi. Tujuan dari SKPI ini adalah menjadi dokumen yang menyatakan kemampuan kerja, penguasaan pengetahuan, dan sikap/moral pemegangnya.
                </td>
            </tr>
        </table>
    </div>
    <!-- Identitas Pemilik SKPI -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p class="p2" style="font-size: 18px;">01. Informasi tentang identitas diri pemegang SKPI</p>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td></td>
                <td></td>
                <td>Tahun Lulus</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">{{ $Mahasiswa->nama }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">2023</p>
                </td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td></td>
                <td></td>
                <td>No Ijazah</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">{{ $Mahasiswa->tmpt_lahir }}, {{$Mahasiswa->ttl}}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">12345</p>
                </td>
            </tr>
            <tr>
                <td>Nomor Pokok Mahasiswa</td>
                <td></td>
                <td></td>
                <td>Gelar</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">{{ $Mahasiswa->npm }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Sarjana Teknik</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- Penyelenggara Program -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td colspan="4">
                    <p class="p2" style="font-size: 18px;">02. Informasi tentang identitas Penyelenggara Program</p>
                </td>
            </tr>
            <tr>
                <td>SK Perguruan Tinggi</td>
                <td></td>
                <td></td>
                <td> Persyaratan penerimaan</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">No: 100/D/0/2001 Tanggal 02 Agustus 2001</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Lulus pendidikan menengah atas/sederajat</p>
                </td>
            </tr>
            <tr>
                <td>Nama Perguruan Tinggi</td>
                <td></td>
                <td></td>
                <td>Bahasa pengantar kuliah</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Universitas Suryakancana</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Indonesia</p>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td></td>
                <td></td>
                <td>Sistem Penilaian</td>
            </tr>
            <tr>
                <td>
                    <p class="p4">{{$Mahasiswa->prodi->N_prodi}}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Skala 1-4; A=4, B=3, C=2, D=1</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">Kelas: {{ $Mahasiswa->kelas }}</p>
                </td>
                <td></td>
                <td></td>
                <td>Lama Studi Reguler</td>
            </tr>
            <tr>
                <td>Jenis dan Jenjang Pendidikan</td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">8 Semester</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Sarjana (Strata 1)</p>
                </td>
                <td></td>
                <td></td>
                <td>Jenis dan jenjang pendidikan lanjutan</td>
            </tr>
            <tr>
                <td>Jenjang kualifikasi sesuai KKNI</td>
                <td></td>
                <td></td>
                <td>
                    @if($Mahasiswa->pendidikan_lanjut)
                    <p class="p3">{{$Mahasiswa->pendidikan_lanjut}}</p>
                    @else
                    <p class="p3">-</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Level 6</p>
                </td>
                <td></td>
                <td></td>
                <td>Status Profesi (Bila Ada)</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    @if($Mahasiswa->status_profesi)
                    <p class="p3">{{$Mahasiswa->status_profesi}}</p>
                    @else
                    <p class="p3">-</p>
                    @endif
                </td>
            </tr>

        </table>
    </div>
    <!-- Hasil Yang Dicapai -->
    <div class="tabel1">
        <table class="my-table1" style="margin-top: 20px;">
            <tr>
                <td>
                    <p class="p2" style="font-size: 18px;">03. Informasi tentang kualifikasi dan hasil yang dicapai</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">A. Capaian Pembelajaran</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">Sarjana Teknik : {{ $Mahasiswa->prodi->N_prodi }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">(KKNI Level 6)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p6"><b>Kemampuan Kerja</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $p->kemampuan_kerja!!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 33px;"><b>Penguasaan Pengetahuan</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $p->penguasaan !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 33px;"><b>Sikap Khusus</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $p->sikap_khusus !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0px; margin-left: 15px;">B. Aktivitas Prestasi dan Penghargaan</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">Pemegang Surat Keterangan Pendamping Ijazah ini memiliki sertifikat profesional:</p>
            <tr>
                <td>
                    @forelse($prestasis as $prestasi)
                    <p class="p5">{{ $loop->iteration }}. {{ $prestasi->nama }} </p>
                    @empty
                    <p class="p5">-</p>
                    @endforelse
                </td>
            </tr>
            </td>
            <td>
                <p class="p7">Mahasiswa Universitas Suryakancana telah mengikuti program atau telah memenuhi tanggung jawab:</p>
                <tr>
                    <td>
                        @forelse($kegiatans as $kegiatan)
                        <p class="p5" style="margin-top: 7px;">{{ $loop->iteration }}. {{$kegiatan->nama}}</p>
                        @empty
                        <p class="p5" style="margin-top: 7px;">-</p>
                        @endforelse
                    </td>
                </tr>
            </td>
            </tr>
            <tr>
                <td>
                    <p class="p6">Catatan:</p>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 35px;">Program-program tersebut di atas terdiri atas kegiatan untuk mengembangkan soft skills mahasiswa. Daftar kegiatan ko-kurikuler dan ekstra-kurikuler yang diikuti oleh pemegang SKPI ini terlampir.</p>
                </td>
            </tr>
            </td>
            </tr>
        </table>
    </div>
    <!-- Sistem Pendidikan -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td>
                    <p class="p2" style="font-size: 18px;">04. Informasi tentang Sistem Pendidikan Tinggi di Indonesia</p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 30px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($Infos as $info)
                                    {!! $info->pendidikan !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <!-- KKNI -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td>
                    <p class="p2" style="font-size: 18px;">05. Kerangka Kualifikasi Nasional Indonesia</p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 30px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($Infos as $info)
                                    {!! $info->kkni !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class="atasan">
        <img src="/img/template SKPI.png" alt="Profile Mahasiswa" height="400" width="470">
    </div>
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td>
                    <p class="p2" style="font-size: 20px;">06. Pengesahan SKPI</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Cianjur, {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Mahasiswa->updated_at)->format('d F Y') }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p10">
                        .
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p9">H. Widy Setyawan, Ir., M.T.</p>
            <tr>
                <td>
                    <p class="p8">
                        Dekan Fakultas Teknik
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Nomor Induk Karyawan : 4103005015</p>
                </td>
            </tr>
            </td>
            </tr>
        </table>
    </div>

    <div class="tabel2">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p style="margin: 0; padding: 0;">Catatan Resmi</p>
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            SKPI dikeluarkan oleh institusi pendidikan tinggi yang berwenang mengeluarkan ijazah sesuai dengan paraturan perundang-undangan yang berlaku.
                        </li>
                        <li>
                            SKPI hanya diterbitkan setelah mahasiswa dinyatakan lulus dari suatu program studi secara resmi oleh Perguruan Tinggi.
                        </li>
                        <li>
                            SKPI diterbitkan dalam Bahasa Indonesia dan Bahasa Inggris.
                        </li>
                        <li>
                            SKPI yang asli diterbitkan mengunakan kertas khusus (barcode/halogram security paper) berlogo Perguruan Tinggi, yang diterbitkan secara khusus oleh Perguruan Tinggi.
                        </li>
                        <li>
                            Penerima SKPI dicantumkan dalam situs resmi Perguruan Tinggi.
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <div class="tabel2">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p class="p8"><b>Alamat</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">FAKULTAS TEKNIK</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">UNIVERSITAS SURYAKANCANA</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Jl. Pasir Gede Raya Kec. Cianjur Kel. Bojongherang, Cianjur 43216</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Tel: (+62 263) 283578</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Fax: (+62 263) 283578</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Website: ft.unsur.ac.id</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Email: ftunsur@yahoo.com</p>
                </td>
            </tr>

        </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>

</html>