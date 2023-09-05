<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom styles for this template -->
    <link href="/css/dokumen.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
</head>

<body>
    <div class="atasan">
        <img src="/img/unsur.png" alt="Profile Mahasiswa" height="100" width="100">
    </div>
    <div class="atasan-1">
        <h2>SURYAKANCANA UNIVERSITY</h2>
    </div>

    <div class="tabel">
        <table class="my-table">
            <tr>
                <td>
                    <p class="p1">Diploma Supplement</p>
                </td>
            </tr>
            <tr>
                <td>No: xxxx</td>
            </tr>
            <tr>
                <td>
                    This Diploma Supplement refers to the Indonesian Qualiﬁcation Framework and UNESCO Convention on the Recognition of Studies, Diplomas and Degrees in Higher Education. The purpose of the supplement is to provide a description of the nature, level, context and status of the studies that were pursued and successfully completed by the individual named on the original qualiﬁcation to which this supplement is appended.
                </td>
            </tr>
        </table>
    </div>
    <!-- Identitas Pemilik SKPI -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p class="p2" style="font-size: 18px;">01. Information Identifying The Holder of Diploma Supplement</p>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td></td>
                <td></td>
                <td>Year of Completion</td>
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
                <td>Date and Place of Birth</td>
                <td></td>
                <td></td>
                <td>Diploma number</td>
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
                <td>Student Identification Number</td>
                <td></td>
                <td></td>
                <td>Name of Qualification</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">{{ $Mahasiswa->npm }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Bachelor in Engineer</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- Penyelenggara Program -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td colspan="4">
                    <p class="p2" style="font-size: 18px;">02. Information Identifying the Awarding Institution</p>
                </td>
            </tr>
            <tr>
                <td>Awarding Institution’s License</td>
                <td></td>
                <td></td>
                <td>Entry Requirenments</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">No: 100/D/0/2001 02 August 2001</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Graduate from high school or similar level of education</p>
                </td>
            </tr>
            <tr>
                <td>Awarding Institution</td>
                <td></td>
                <td></td>
                <td>Language of instruction</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Suryakancana University</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Indonesian</p>
                </td>
            </tr>
            <tr>
                <td>Major</td>
                <td></td>
                <td></td>
                <td>Grading System</td>
            </tr>
            <tr>
                <td>
                    <p class="p4">[{{$Mahasiswa->prodi->N_prodi}}]</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Scale 1-4; A=4, B=3, C=2, D=1</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">Class: {{ $Mahasiswa->kelas }}</p>
                </td>
                <td></td>
                <td></td>
                <td>Regular Length of Study</td>
            </tr>
            <tr>
                <td>Access to Further Study</td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">8 Semester</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Bachelor Degree</p>
                </td>
                <td></td>
                <td></td>
                <td>Type & Level of Education</td>
            </tr>
            <tr>
                <td>Level of Qualification in the National Qualification Framework</td>
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
                <td>Professional Status (If Applicable)</td>
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
                    <p class="p2" style="font-size: 18px;">03. Information Identifying the Qualification and Outcomes Obtained</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">A. Learning Outcomes</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">Engineering Bachelor : {{ $lang->translate($Mahasiswa->prodi->N_prodi) }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">(KKNI Level 6)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p6"><b>Working Capability</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $lang->translate($p->kemampuan_kerja) !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 33px;"><b>Knowledge Competencies</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $lang->translate($p->penguasaan ) !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 33px;"><b>Special Attitude</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-left: 33px; ">
                        <tr style="margin: 0; padding: 0;">
                            <td>
                                <p style="margin: 0; padding: 0;">
                                    @foreach($pengajuans as $p)
                                    {!! $lang->translate($p->sikap_khusus) !!}
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 0px; margin-left: 15px;">B. Activities, Achievements and Awards</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">The holder of this supplement has the following professional certiﬁcations:</p>
            <tr>
                <td>
                    @forelse($prestasis as $prestasi)
                    <p class="p5">{{ $loop->iteration }}. {{ $lang->translate($prestasi->nama) }} </p>
                    @empty
                    <p class="p5">-</p>
                    @endforelse
                </td>
            </tr>
            </td>
            <td>
                <p class="p7">The students of Suryakancana University were involved in the following programs/fulﬁlled the following responsibilities:</p>
                <tr>
                    <td>
                        @forelse($kegiatans as $kegiatan)
                        <p class="p5" style="margin-top: 7px;">{{ $loop->iteration }}. {{ $lang->translate($kegiatan->nama)}}</p>
                        @empty
                        <p class="p5" style="margin-top: 7px;">-</p>
                        @endforelse
                    </td>
                </tr>
            </td>
            </tr>
            <tr>
                <td>
                    <p class="p6">Note:</p>
            <tr>
                <td>
                    <p style="margin: 0; margin-left: 35px;">The above-mentioned programs comprise of activities that develop student’s soft skills. A list of co-curricular and extra curricular activities taken by the holder of this supplement is attached.</p>
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
                                    {!! $info->pendidikan_en !!}
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
                                    {!! $info->kkni_en !!}
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
                    <p class="p2" style="font-size: 20px;">06. SKPI Legalization</p>
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
                    <p class="p9"><u>H. Widy Setyawan, Ir., M.T.</u></p>
            <tr>
                <td>
                    <p class="p8">
                        Dean Engineering Faculty
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p8">Employee ID Number : 4103005015</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="tabel2">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p style="margin: 0; padding: 0;">Official Note:</p>
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            This Diploma Supplement is issued by Suryakancana University, a higher education institution authorized to issue diplomas in accordance with the applicable Laws.
                        </li>
                        <li>
                            This Diploma Supplement is issued after the student is oﬃcially declared a graduate of a study program by the Binus University.
                        </li>
                        <li>
                            This Diploma Supplement is written in both Bahasa Indonesia English.
                        </li>
                        <li>
                            The original copy of this Diploma Supplement is on barcoded/halogram security paper, sealed with the higher education institution’s logo, and issued exclusively by Binus University.
                        </li>
                        <li>
                            The awardee of this Diploma Supplement is oﬃcially listed in the University’s oﬃcial website.
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
                    <p class="p8"><b>Address</b></p>
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