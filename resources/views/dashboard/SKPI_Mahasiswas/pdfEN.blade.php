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
            <h3>SURYAKANCANA UNIVERSITY</h3>

            <!-- Awalan -->
            <div style="margin-left: 10%; margin-right: 10%;">
                <table>
                    <tr>
                        <td>
                            <p class="p1">DIPLOMA SUPPLEMENT</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">No: {{$Mahasiswa->no_ijazah}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0; padding: 0; text-align: justify;">This Diploma Supplement refers to the Indonesian Qualiﬁcation Framework and UNESCO Convention on the Recognition of Studies, Diplomas and Degrees in Higher Education. The purpose of the supplement is to provide a description of the nature, level, context and status of the studies that were pursued and successfully completed by the individual named on the original qualiﬁcation to which this supplement is appended.</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- end Awalan -->

            <!-- Informasi Pemilik SKPI -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 1%;">
                <table width="100%">
                    <tr>
                        <td colspan="3">01. Information Identifying The Holder of Diploma Supplement</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ storage_path('app/public/'. $Mahasiswa->image) }}" alt="{{$Mahasiswa->nama}}" width="110" height="115" class="p1" style="margin: 15%;">
                        </td>
                        <td>
                            <p class="p1">Full Name</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->nama}}</p>
                            <p class="p1" style="margin-top: 10px;">Date and Place of Birth</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->tmpt_lahir}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $Mahasiswa->ttl)->format('d F Y')}}</p>
                            <p class="p1" style="margin-top: 10px;">Student Identification Number</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->npm}}</p>
                        </td>
                        <td>
                            <p class="p1">Year of Completion</p>
                            <p class="p1" style="margin-left: 10px;">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Mahasiswa->updated_at)->year;}}</p>
                            <p class="p1" style="margin-top: 10px;">Diploma number</p>
                            <p class="p1" style="margin-left: 10px;">{{ $Mahasiswa->no_ijazah }}</p>
                            <p class="p1" style="margin-top: 10px;">Name of Qualification</p>
                            <p class="p1" style="margin-left: 10px;">Bachelor in Engineer</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- End Informasi Pemilik SKPI -->

            <!-- Informasi Kampus -->
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 1%;">
                <table width="100%">
                    <tr>
                        <td colspan="2">
                            <p class="p1">02. Information Identifying the Awarding Institution</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">Awarding Institution’s License </p>
                            <p class="p1" style="margin-left: 10px;">No: 100/D/0/2001 Tanggal 02 Agustus 2001</p>
                            <p class="p1" style="margin-top: 10px;">Awarding Institution</p>
                            <p class="p1" style="margin-left: 10px;">Suryakancana University</p>
                            <p class="p1" style="margin-top: 10px;">Major</p>
                            <p class="p1" style="margin-left: 10px;">{{$Mahasiswa->prodi->N_prodi}}</p>
                            <p class="p1" style="margin-left: 10px;">Class: {{$Mahasiswa->kelas}}</p>
                            <p class="p1" style="margin-top: 10px;">Type & Level of Education </p>
                            <p class="p1" style="margin-left: 10px;">Bachelor Degree</p>
                            <p class="p1" style="margin-top: 10px;">Level of Qualification in the National Qualification Framework
                                Level 6
                            </p>
                            <p class="p1" style="margin-left: 10px;">Level 6</p>
                        </td>
                        <td width="50%">
                            <p class="p1">Entry Requirenments </p>
                            <p class="p1" style="margin-left: 10px;">Graduate from high school or similar level of education</p>
                            <p class="p1" style="margin-top: 10px;">Language of instruction</p>
                            <p class="p1" style="margin-left: 10px;">Indonesian</p>
                            <p class="p1" style="margin-top: 10px;">Grading System</p>
                            <table>
                                <tr>
                                    <p class="p1" style="margin-left: 10px; display: inline">Scale 80-60; </p>
                                    @foreach($nilais as $nilai)
                                    <p class="p1" style="margin-left: 10px; display: inline">{{$nilai->nilai}}={{$nilai->skala}}</p>
                                    @endforeach
                                </tr>
                            </table>
                            <p class="p1" style="margin-top: 10px;">Regular Length of Study</p>
                            <p class="p1" style="margin-left: 10px;">8 Semester</p>
                            <p class="p1" style="margin-top: 10px;">Access to Further Study</p>
                            <p class="p1" style="margin-left: 10px;">-</p>
                            <p class="p1" style="margin-top: 10px;">Professional Status (If Applicable)</p>
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
                            <p class="p1">3. Information Identifying the Qualification and Outcomes Obtained</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p1">A. Learning Outcomes </p>
                            <p class="p1" style="margin-left: 18px;">Engineering Bachelor: {{ $Mahasiswa->prodi->N_prodi }}</p>
                            <p class="p1" style="margin-left: 18px">(KKNI Level 6)</p>
                            <br>

                            @foreach($pengajuans as $p)
                            <p class="p1" style="margin-left: 18px;"><b>Working Capability</b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $lang->translate($p->kemampuan_kerja) !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p class="p1" style="margin-left: 18px;"><b>Knowledge Competencies</b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $lang->translate($p->penguasaan) !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p class="p1" style="margin-left: 18px;"><b>Special Attitude</b></p>
                            <div style="margin-left: 3%; margin-right: 3%;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="p1" style="text-align: justify;">
                                                {!! $lang->translate($p->sikap_khusus) !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach

                            <br>
                            <p class="p1">B. Activities, Achievements and Awards</p>
                            <p class="p1" style="margin-left: 18px; margin-top: 5px;">The holder of this supplement has the following professional certiﬁcations:</p>
                            <ul style="margin: 0; margin-left: 3%;">
                                @forelse($prestasis as $prestasi)
                                <li class="p1">
                                    <p>{{ $lang->translate($prestasi->nama) }}</p>
                                </li>
                                @empty
                                <li class="p1">
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>
                            <p class="p1" style="margin-left: 18px;">The students of Suryakancana University were involved in the following programs/fulﬁlled the following responsibilities:</p>
                            <ul style="margin: 0; margin-left: 3%;">
                                @forelse($kegiatans as $kegiatan)
                                <li class="p1">
                                    <p>{{$lang->translate($kegiatan->nama)}}</p>
                                </li>
                                @empty
                                <li class="p1">
                                    <p>-</p>
                                </li>
                                @endforelse
                            </ul>
                            <p class="p1">Note: </p>
                            <p class="p1" style="text-align: justify;">The above-mentioned programs comprise of activities that develop student’s soft skills. A list of co-curricular and extra curricular activities taken by the holder of this supplement is attached.</p>

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
                            <p class="p1">04. Information on the Indonesian Higher Education System and the Indonesian National Qualiﬁcations Framework</p>
                            @foreach($Infos as $i)
                            <div style="margin-left: 3%; margin-right: 3%; margin-top: 10px; font-size: 12px; text-align: justify;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class=" p1">
                                                {!! $i->pendidikan_en !!}
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
            <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%; font-size: 13px;">
                <table width="100%">
                    <tr>
                        <td>
                            <p class="p1">05. Indonesian Qualification Framework</p>
                            @foreach($Infos as $i)
                            <div style="margin-left: 3%; margin-right: 3%; margin-top: 10px;">
                                <table>
                                    <tr>
                                        <td>
                                            <p class=" p1" style="text-align: justify;">
                                                {!! $i->kkni_en !!}
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
                            <p class="p1">06. SKPI Legalization</p>
                            <p class="p1" style="margin-left: 18px; margin-top: 10px;">
                                @foreach($pengajuans as $p)
                                Cianjur, {{Carbon\Carbon::createFromFormat('Y-m-d', $p->tgl_setuju)->format('d F Y')}}
                                @endforeach
                            </p>
                            <br><br><br><br>
                            <p class="p1" style="margin-left: 18px; text-decoration: underline;">H. Widy Setyawan, Ir., M.T.</p>
                            <p class="p1" style="margin-left: 18px;">Dean Engineering Faculty</p>
                            <p class="p1" style="margin-left: 18px;">Employee ID Number: 4103005015</p>
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
                            <p class="p1">Official Notes</p>
                            <ul>
                                <li>
                                    <p class="p1" style="text-align: justify;">This Diploma Supplement is issued by Suryakancana University, a higher education institution authorized to issue diplomas in accordance with the applicable Laws.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">This Diploma Supplement is issued after the student is oﬃcially declared a graduate of a study program by the Binus University.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">This Diploma Supplement is written in both Bahasa Indonesia English.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">The original copy of this Diploma Supplement is on barcoded/halogram security paper, sealed with the higher education institution’s logo, and issued exclusively by Binus University.</p>
                                </li>
                                <li>
                                    <p class="p1" style="text-align: justify;">The awardee of this Diploma Supplement is oﬃcially listed in the University’s oﬃcial website.</p>
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