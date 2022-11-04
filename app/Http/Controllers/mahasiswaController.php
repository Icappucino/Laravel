<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dataMahasiswa(){
        $no = 1;
        /* Array Scalar */
        $m1 = ['nama'=>'Vika', 'nilai'=>85];
        $m2 = ['nama'=>'Husein', 'nilai'=>75];
        $m3 = ['nama'=>'Rika', 'nilai'=>83];
        $m4 = ['nama'=>'Hassan', 'nilai'=>55];
        $judul = ['No','Nama','Nilai','Keterangan'];
        /* Array Assoc */
        $mahasiswa = [$m1, $m2, $m3, $m4];
        return view('nilai',
            compact('mahasiswa')
        );
    }
}

