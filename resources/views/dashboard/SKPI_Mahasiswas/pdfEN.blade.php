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
        <img src="/img/unsur.png" alt="Profile Mahasiswa" height="150" width="150">
    </div>
    <div class="atasan-1">
        <h2>SURYAKANCANA UNIVERSITY</h2>
    </div>

    <div class="tabel">
        <table class="my-table">
            <tr>
                <td>
                    <p class="p1">DIPLOMA SUPPLEMENT</p>
                </td>
            </tr>
            <tr>
                <td>No: SKPI</td>
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
                    <p class="p2" style="font-size: 20px;"></p>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>xxxxx</td>
                <td></td>
                <td></td>
                <td>xxxxx</td>
            </tr>
            <tr>
                <td>
                    <p class="p2">{{ $Mahasiswa->nama }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p2">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Mahasiswa->updated_at)->year;}}</p>
                </td>
            </tr>
            <tr>
                <td>xxxxx</td>
                <td></td>
                <td></td>
                <td>No Ijazah</td>
            </tr>
            <tr>
                <td>
                    <p class="p2">{{ $Mahasiswa->tmpt_lahir }}, {{$Mahasiswa->ttl}}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p2">12345</p>
                </td>
            </tr>
            <tr>
                <td>xxxxx</td>
                <td></td>
                <td></td>
                <td>xxxxx</td>
            </tr>
            <tr>
                <td>
                    <p class="p2">{{ $Mahasiswa->npm }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p2">xxxxx</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- Penyelenggara Program -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p class="p2" style="font-size: 20px;">xxxxxx</p>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Awarding Institution’s License</td>
                <td></td>
                <td></td>
                <td>xxxxxx</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">No: 100/D/0/2001 02 August 2001</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">xxxxxx</p>
                </td>
            </tr>
            <tr>
                <td>xxxxxx</td>
                <td></td>
                <td></td>
                <td>xxxxxx</td>
            </tr>
            <tr>
                <td>
                    <p class="p3">Suryakana University</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Indonesian</p>
                </td>
            </tr>
            <tr>
                <td>xxxxxxx</td>
                <td></td>
                <td></td>
                <td>Grading System"</td>
            </tr>
            <tr>
                <td>
                    <p class="p4">xxxxxxxxx</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="p3">Scale 1-4; A=4, B=3, C=2, D=1</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">Kelas: Reguler</p>
                </td>
                <td></td>
                <td></td>
                <td>xxxxxxx</td>
            </tr>
            <tr>
                <td>xxxxxxx</td>
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
                <td>Access to Further Study</td>
            </tr>
            <tr>
                <td>Level of Qualification in the National Qualification Framework</td>
                <td></td>
                <td></td>
                <td>
                    @if($Mahasiswa->pendidikan_lanjut)
                    <p class="p3">xxxxxx</p>
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
                    <p class="p3">xxxxxx</p>
                    @else
                    <p class="p3">-</p>
                    @endif
                </td>
            </tr>

        </table>
    </div>
    <!-- Hasil Yang Dicapai -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td>
                    <p class="p2" style="font-size: 20px;">xxxxxx</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p4">A. Learning Outcomes</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">
                        xxxxxx
                    </p>
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
                    <p class="p5">
                        xxxxx
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p6"><b>Knowledge Competencies</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">
                        xxxx
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p6"><b>Special Attitude</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">
                        xxxx
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p6">B. Activities, Achievements and Awards</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p5">The holder of this supplement has the following professional certiﬁcations:</p>
            <tr>
                <td>
                    @foreach($prestasis as $pres)
                    @if($pres->kategori === "Magang" || $pres->kategori ==="Pelatihan ")
                    <p class="p5">{{$loop->iteration}}. xxxxx</p>
                    @else
                    <p class="p5">-</p>
                    @endif
                    @endforeach
                </td>
            </tr>
            </td>
            <td>
                <p class="p7">The students of Suryakancana University were involved in the following programs/fulﬁlled the following responsibilities:</p>
                <tr>
                    <td>
                        @foreach($prestasis as $pres)
                        @if($pres->kategori === "Seminar" || $pres->kategori ==="Lomba ")
                        <p class="p5">{{$loop->iteration}}. {{$lang->setSource('id')->setTarget('en')->translate($pres->nama)}}</p>
                        @else
                        <p class="p5">-</p>
                        @endif
                        @endforeach
                    </td>
                </tr>
            </td>
            </tr>
            <tr>
                <td>
                    <p class="p6">Note:</p>
            <tr>
                <td>
                    <p class="p4">The above-mentioned programs comprise of activities that develop student’s soft skills. A list of co-curricular and extra curricular activities taken by the holder of this supplement is attached.</p>
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
                    <p class="p2" style="font-size: 20px;">04. Information on the Indonesian Higher Education System and the Indonesian National Qualiﬁcations Framework</p>
                </td>
            </tr>
            <tr>
                <td>
                    @foreach($Infos as $info)
                    <p class="p6">
                        {!! $lang->setSource('id')->setTarget('en')->translate($info->pendidikan) !!}
                    </p>
                    @endforeach
                </td>
            </tr>
        </table>
    </div>
    <!-- KKNI -->
    <div class="tabel1">
        <table class="my-table1">
            <tr>
                <td>
                    <p class="p2" style="font-size: 20px;">05. Indonesian Qualiﬁcation Framework</p>
                </td>
            </tr>
            <tr>
                <td>
                    @foreach($Infos as $info)
                    <p class="P6">
                        {!! $lang->setSource('id')->setTarget('en')->translate($info->kkni) !!}
                    </p>
                    @endforeach
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
                    <p>Cianjur, Month Date, Year</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, eveniet porro sint, enim doloremque ut a error aperiam illo velit aliquam pariatur consequuntur debitis incidunt voluptatum nesciunt perferendis. Officiis, blanditiis!
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
            </td>
            </tr>
        </table>
    </div>

    <div class="tabel2">
        <table class="my-table1">
            <tr>
                <td colspan="2">
                    <p class="p2">Official Notes</p>
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