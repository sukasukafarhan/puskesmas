<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tbl_data_obat;
use Session;
class AdminController extends Controller
{
    //
    public function index()
    {
        if(!Session::get('user_data')){
            return redirect('/login');
        }else{
            $judul = 'PELAYANAN PASIEN';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d');
        
            return view('admin/v_dasboard',['judul' => $judul]);
            // $judul = 'Antrian Pendaftaran';
            // date_default_timezone_set('Asia/jakarta');
            // $tanggal=date('Y-m-d');
            // $status='masuk';
            // $antrian = DB::select("SELECT tbl_antri_pendaftaran.id_antrian,tbl_antri_pendaftaran.no_antrian,tbl_poli.kode_poli, tbl_antri_pendaftaran.status,tbl_antri_pendaftaran.id_poli,tbl_poli.nama_poli FROM tbl_antri_pendaftaran JOIN tbl_poli on tbl_poli.id=tbl_antri_pendaftaran.id_poli where tbl_antri_pendaftaran.tanggal_daftar='".$tanggal."' && tbl_antri_pendaftaran.status!='hapus' ");
            // return view('pendaftaran/v_pendaftaran',['antrian' => $antrian, 'judul' => $judul]);
        }
    
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
