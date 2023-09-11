<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom styles for this template -->
    <link href="/css/dokumen.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <style>
        @page {
            margin: 10px;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 2cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 1cm;
            font-family: 'Times New Roman', Times, serif;
        }

        .p1 {
            margin: 0;
            padding: 0;
        }

        .long-text {
            word-wrap: break-word;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 2cm;
            right: 1cm;
            height: 3cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 1cm;
            right: 1cm;
            height: 2cm;
        }

        .page-number:after {
            content: counter(page);
        }
    </style>
</head>

<body>
    <header>
        <p style="text-align: right;">[{{$Mahasiswa->nama}}] | [{{ $Mahasiswa->no_ijazah }}] </p>
    </header>

    <footer>
        <p style="text-align: right;">Page <span class="page-number"></span>
        </p>
    </footer>

    <main>
        <div align="center">
            <img src="{{ public_path('img/unsur.png') }}" alt="Profile" width="100" height="100" class="rounded-circle">
            <h3>UNIVERSITAS SURYAKANCANA</h3>

            <!-- Awalan -->
            <div style="margin-left: 10%; margin-right: 10%;">
                <table>
                    <tr>
                        <td>
                            <p class="p1">SURAT KETERANGAN PENDAMPING IJAZAH</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">No: {{$Mahasiswa->no_ijazah}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0; padding: 0; text-align: justify;">Surat Keterangan Pendamping Ijazah (SKPI) ini mengacu pada Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Konvensi Unesco tentang pengakuan studi, ijazah dan gelar pendidikan tinggi. Tujuan dari SKPI ini adalah menjadi dokumen yang menyatakan kemampuan kerja, penguasaan pengetahuan, dan sikap/moral pemegangnya.</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- end Awalan -->

            <!-- Informasi Pemilik SKPI -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
                <table width="100%">
                    <tr>
                        <td colspan="3">01. Informasi tentang identitas diri pemegang SKPI</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ storage_path('app/public/'. $Mahasiswa->image) }}" alt="{{$Mahasiswa->nama}}" width="110" height="115" class="p1" style="margin: 15%;">
                        </td>
                        <td>
                            <p class="p1">Nama </p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->nama}}</p>
                            <p class="p1" style="margin-top: 10px;">Tempat dan Tanggal Lahir</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $Mahasiswa->ttl)->format('d F Y')}}</p>
                            <p class="p1" style="margin-top: 10px;">Nomor Pokok Mahasiswa</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->npm}}</p>
                        </td>
                        <td>
                            <p class="p1">Tahun Lulus</p>
                            <p class="p1" style="margin-left: 10px;">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Mahasiswa->updated_at)->year;}}</p>
                            <p class="p1" style="margin-top: 10px;">No Ijazah</p>
                            <p class="p1" style="margin-left: 10px;">{{ $Mahasiswa->no_ijazah }}</p>
                            <p class="p1" style="margin-top: 10px;">Gelar</p>
                            <p class="p1" style="margin-left: 10px;">Sarjana Teknik (ST)</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi Pemilik SKPI -->

            <!-- Informasi Kampus -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
                <table width="100%">
                    <tr>
                        <td colspan="2">
                            <p class="p1">02. Informasi tentang identitas Penyelenggara Program</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">SK Perguruan Tinggi </p>
                            <p class="p1" style="margin-left: 10px;">No: 100/D/0/2001 Tanggal 02 Agustus 2001</p>
                            <p class="p1" style="margin-top: 10px;">Nama Perguruan Tinggi</p>
                            <p class="p1" style="margin-left: 10px;">Universitas Suryakancana</p>
                            <p class="p1" style="margin-top: 10px;">Program Studi</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->prodi->N_prodi}}</p>
                            <p class="p1" style="margin-left: 10px;">Kelas: {{$Mahasiswa->kelas}}</p>
                            <p class="p1" style="margin-top: 10px;">Jenis dan Jenjang Pendidikan </p>
                            <p class="p1" style="margin-left: 10px;">Sarjana (Strata 1)</p>
                            <p class="p1" style="margin-top: 10px;">Jenjang kualifikasi sesuai KKNI</p>
                            <p class="p1" style="margin-left: 10px;">Level 6</p>
                        </td>
                        <td width="50%">
                            <p class="p1">Persyaratan penerimaan </p>
                            <p class="p1" style="margin-left: 10px;">Lulus pendidikan menengah atas/sederajat</p>
                            <p class="p1" style="margin-top: 10px;">Bahasa Pengantar Kuliah</p>
                            <p class="p1" style="margin-left: 10px;">Indonesia</p>
                            <p class="p1" style="margin-top: 10px;">Sistem penilaian</p>
                            <table>
                                <tr>
                                    <p class="p1" style="margin-left: 10px; display: inline">Skala 80-60; </p>
                                    @foreach($nilais as $nilai)
                                    <p class="p1" style="margin-left: 10px; display: inline">{{$nilai->nilai}}={{$nilai->skala}}</p>
                                    @endforeach
                                </tr>
                            </table>
                            <p class="p1" style="margin-top: 10px;">Lama Studi Reguler</p>
                            <p class="p1" style="margin-left: 10px;">8 Semester</p>
                            <p class="p1" style="margin-top: 10px;">Jenis dan jenjang pendidikan lanjutan</p>
                            <p class="p1" style="margin-left: 10px;">-</p>
                            <p class="p1" style="margin-top: 10px;">Status profesi (bila ada)</p>
                            <p class="p1" style="margin-left: 10px;">-</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi Kampus -->

            <!-- Informasi Hasil Capaian -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 12%;">
                <table width="100%">
                    <tr>
                        <td>
                            <p class="p1">03. Informasi tentang kualifikasi dan hasil yang dicapai</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">A. Capaian Pembelajaran </p>
                            <p class="p1" style="margin-left: 18px;">Sarjana Teknik: {{ $Mahasiswa->prodi->N_prodi }}</p>
                            <p class="p1" style="margin-left: 18px">(KKNI Level 6)</p>
                            <br>

                            @foreach($pengajuans as $p)
                            <p class="p1" style="margin-left: 18px;"><b>Kemampuan Kerja </b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $p->kemampuan_kerja !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p class="p1" style="margin-left: 18px;"><b>Penguasaan Pengetahuan</b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $p->penguasaan !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p class="p1" style="margin-left: 18px;"><b>Sikap Khusus </b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $p->sikap_khusus !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach

                            <br>
                            <p class="p1">B. Aktivitas Prestasi dan Penghargaan</p>
                            <p class="p1" style="margin-left: 18px; margin-top: 5px;">Pemegang Surat Keterangan Pendamping Ijazah ini memiliki sertifikat profesional:</p>
                            <ul style="margin: 0; margin-left: 3%;">
                                @forelse($prestasis as $prestasi)
                                <li class="p1">
                                    <p>{{ $prestasi->nama }}</p>
                                </li>
                                @empty
                                <li class="p1">
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>
                            <p class="p1" style="margin-left: 18px;">Mahasiswa Universitas Suryakancana telah mengikuti program atau telah memenuhi tanggung jawab:</p>
                            <ul style="margin: 0; margin-left: 3%;">
                                @forelse($kegiatans as $kegiatan)
                                <li class="p1">
                                    <p>{{$kegiatan->nama}}</p>
                                </li>
                                @empty
                                <li class="p1">
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>
                            <p class="p1">Catatan: </p>
                            <p class="p1" style="text-align: justify;">Program-program tersebut di atas terdiri atas kegiatan untuk mengembangkan soft skills mahasiswa. Daftar kegiatan ko-kurikuler dan ekstra-kurikuler yang diikuti oleh pemegang SKPI ini terlampir.</p>

                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi Hasil Capaian -->

            <!-- Informasi Pendidikan Indonesia -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
                <table width="100%">
                    <tr>
                        <td>
                            <p class="p1">04. Informasi tentang Sistem Pendidikan Tinggi di Indonesia</p>
                            @foreach($Infos as $i)
                            <div style="margin-left: 3%; margin-right: 3%; margin-top: 10px; font-size: 12px; text-align: justify;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class=" p1">
                                                {!! $i->pendidikan !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi Pendidikan Indonesia -->

            <!-- Informasi KKNI -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
                <table width="100%">
                    <tr>
                        <td>
                            <p class="p1">05. Kerangka Kualifikasi Nasional Indonesia</p>
                            @foreach($Infos as $i)
                            <div style="margin-left: 3%; margin-right: 3%; margin-top: 10px; font-size: 13px;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class=" p1" style="text-align: justify;">
                                                {!! $i->kkni !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach
                            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;" align="center">
                                <img src="{{ public_path('img/template SKPI.png') }}" width="300">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi KKNI -->

            <!-- Pengesahan SKPI -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
                <table width="100%">
                    <tr>
                        <td>
                            <p class="p1">06. Pengesahan SKPI</p>
                            <p class="p1" style="margin-left: 18px; margin-top: 10px;">
                                @foreach($pengajuans as $p)
                                Cianjur, {{Carbon\Carbon::createFromFormat('Y-m-d', $p->tgl_setuju)->format('d F Y')}}
                                @endforeach
                            </p>
                            <br><br><br><br>
                            <p class="p1" style="margin-left: 18px; text-decoration: underline;">H. Widy Setyawan, Ir., M.T.</p>
                            <p class="p1" style="margin-left: 18px;">Dekan Fakultas Teknik</p>
                            <p class="p1" style="margin-left: 18px;">Nomor Induk Karyawan : 4103005015</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Pengesahan -->

            <!-- Catatan -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 3%;">
                <table width="100%">
                    <tr>
                        <td width="55%">
                            <p class="p1">Catatan Resmi</p>
                            <ul>
                                <li>
                                    <p class="p1" style="text-align: justify;">SKPI dikeluarkan oleh institusi pendidikan tinggi yang berwenang mengeluarkan ijazah sesuai dengan paraturan perundang-undangan yang berlaku.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">SKPI hanya diterbitkan setelah mahasiswa dinyatakan lulus dari suatu program studi secara resmi oleh Perguruan Tinggi.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">SKPI diterbitkan dalam Bahasa Indonesia dan Bahasa Inggris.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">SKPI yang asli diterbitkan mengunakan kertas khusus (barcode/halogram security paper) berlogo Perguruan Tinggi, yang diterbitkan secara khusus oleh Perguruan Tinggi.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">Penerima SKPI dicantumkan dalam situs resmi Perguruan Tinggi.</p>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <p class="p1" style="margin-left: 25px;">Alamat: </p>
                            <p class="p1" style="margin-top: 15px; margin-left: 25px;">FAKULTAS TEKNIK</p>
                            <P class="p1" style="margin-left: 25px;">UNIVERSITAS SURYAKANCANA</P>
                            <p style="margin-left: 25px;">Jl. Pasir Gede Raya Kec. Cianjur Kel. Bojongherang, Cianjur 43216</p>
                            <p style="margin-left: 25px;">Tel: (+62 263) 283578</p>
                            <p style="margin-left: 25px;">Fax: (+62 263) 283578</p>
                            <p style="margin-left: 25px;">Website: ft.unsur.ac.id</p>
                            <p style="margin-left: 25px;">Email: ftunsur@yahoo.com</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Catatan -->

        </div>
    </main>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>

</html>