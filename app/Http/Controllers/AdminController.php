<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tbl_data_obat;
class AdminController extends Controller
{
    //
   
    public function index()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_dasboard',['judul' => $judul]);
    }

    public function showjamkes()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_tabeljamkes',['judul' => $judul]);
    }

    public function showlevelpengguna()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_tabellevelpengguna',['judul' => $judul]);
    }

    public function showpengguna()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_tabelpengguna',['judul' => $judul]);
    }
    
    public function showpoliutama() 
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_poliutama',['judul' => $judul]);
    }

    public function showdatapelayanan() 
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('admin/v_tabeldatapelayanan',['judul' => $judul]);
    }
  
}
