<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class DokterController extends Controller
{
    //
    public function tambahObat(){
     return view('v_tambahff');
    }
    public function index()
    {
        if(!Session::get('user_data')){
            return redirect('/login');
        }else{
            $judul = 'PELAYANAN PASIEN';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d');
            
            return view('dokter/v_pelayanan',['judul' => $judul]);
        }
    }
    public function showantriandokter()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('dokter/v_daftardatapasienmasuk',['judul' => $judul]);
    }
    public function showicdx()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('dokter/v_tabel_diagnosis',['judul' => $judul]);
    }
    public function pelayanan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('dokter/v_pelayanan',['judul' => $judul]);
    }

}
