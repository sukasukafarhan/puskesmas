<?php

namespace App\Http\Controllers;

use App\Tbl_ff;
use App\Tbl_datapasien;
use App\Tbl_pendaftaran;
use App\Tbl_antrian_poli_umum;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(!Session::get('user_data')){
            return redirect('/login');
        }else{
            $judul = 'Antrian Pendaftaran';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d');
            $status='masuk';
            // $antrian = DB::select("SELECT tbl_antri_pendaftaran.id_antrian,tbl_antri_pendaftaran.no_antrian,tbl_poli.kode_poli, tbl_antri_pendaftaran.status,tbl_antri_pendaftaran.id_poli,tbl_poli.nama_poli FROM tbl_antri_pendaftaran JOIN tbl_poli on tbl_poli.id=tbl_antri_pendaftaran.id_poli where tbl_antri_pendaftaran.tanggal_daftar='".$tanggal."' && tbl_antri_pendaftaran.status!='hapus' ");
            
            return view('laboratorium/v_antrianlaborat',[ 'judul' => $judul]);
        }
    }

    public function lewati($id)
    {
        $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='lewati' where id_antrian=".$id."");
        return redirect('/daftarantrian');
    }

    public function hapus($id)
    {
        $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='hapus' where id_antrian=".$id."");
        return redirect('/daftarantrian');
    }

    public function layani()
    { 
        $judul = 'Pelayanan Laboratorium';
        
        return view('laboratorium/v_pelayananlaborat',[ 'judul' => $judul]);
    }
    
    public function dataJenisPelayananDokter()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        return view('laboratorium/v_datajenispelayanandokter',[ 'judul' => $judul]);
    }

    public function dataJenisPelayananLab()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        return view('laboratorium/v_datajenislab',[ 'judul' => $judul]);
    }

    public function dataUjiLab()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        return view('laboratorium/v_dataujilab',[ 'judul' => $judul]);
    }

    public function dataLaporanLab()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        return view('laboratorium/v_laporanlab',[ 'judul' => $judul]);
    }

    public function history()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        return view('laboratorium/v_history',[ 'judul' => $judul]);
    }



}