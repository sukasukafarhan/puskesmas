<?php

namespace App\Http\Controllers;

use App\Tbl_ff;
use App\Tbl_datapasien;
use App\Tbl_pendaftaran;
use App\Tbl_antrian_poli_umum;
use App\Tbl_data_laborat_dokter;
use App\Tbl_hasillab;
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
            $judul = 'Antrian Laboratorium';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d');
            $status='masuk';
            // $antrian = DB::select("SELECT tbl_antri_pendaftaran.id_antrian,tbl_antri_pendaftaran.no_antrian,tbl_poli.kode_poli, tbl_antri_pendaftaran.status,tbl_antri_pendaftaran.id_poli,tbl_poli.nama_poli FROM tbl_antri_pendaftaran JOIN tbl_poli on tbl_poli.id=tbl_antri_pendaftaran.id_poli where tbl_antri_pendaftaran.tanggal_daftar='".$tanggal."' && tbl_antri_pendaftaran.status!='hapus' ");
            // $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.created_at='".$tanggal."' && tbl_antrian_poli_umums.status='proses'");
            $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums, tbl_datapasiens, tbl_rekam_medis where tbl_rekam_medis.tanggal_kunjungan='".$tanggal."' AND tbl_antrian_poli_umums.status='proses' AND tbl_antrian_poli_umums.no_rm = tbl_datapasiens.no_rm AND tbl_datapasiens.no_rm = tbl_rekam_medis.no_rm ");
            // print_r($antrian);
            return view('laboratorium/v_antrianlaborat',[ 'antrian'=>$antrian ,'judul' => $judul]);
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

    public function layani($id1,$id2)
    { 
        $tanggal=date('Y-m-d');
        $judul = 'Pelayanan Laboratorium';
        $pasien = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.no_rm='".$id2."' && tbl_antrian_poli_umums.status='proses'");
        $pasien[0]->tanggal = $tanggal;
        // print_r($pasien);
        $permintaan = DB::select("SELECT * FROM tbl_permintaanlab JOIN tbl_data_laborat_dokter where id_pemeriksaan='".$id1."' AND tbl_permintaanlab.id_data_laborat_dokter=tbl_data_laborat_dokter.id_data_laborat_dokter AND tbl_data_laborat_dokter.id_data_laborat_dokter");
        // $permintaan2 = DB::select("SELECT a.id_jenis_pemeriksaan, a.jenis_pemeriksaan, a.nama_pemeriksaan, a.nilai_nominal, a.satuan FROM tbl_nama_pemeriksaan a, tbl_permintaanlab b WHERE a.nama_pemeriksaan = b.");
        // $permintaan =  DB::select("SELECT * FROM tbl_permintaanlab, tbl_data_laborat_dokter, tbl_jenis_pemeriksaan where tbl_permintaanlab.id_pemeriksaan='".$id1."' AND tbl_permintaanlab.id_data_laborat_dokter=tbl_data_laborat_dokter.id_data_laborat_dokter");
        print_r($permintaan);
        return view('laboratorium/v_pelayananlaborat', ['permintaan'=>$permintaan, 'pasien'=>$pasien, 'judul'=> $judul]);
    }
    
    public function dataJenisPelayananDokter($id)
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $datajenis = DB::select("select * from tbl_jenis_pemeriksaan where id_jenis_pemeriksaan=".$id.""); 
        // print_r($datajenis);
        $datanama = DB::select("select * from tbl_nama_pemeriksaan where id_jenis_pemeriksaan=".$id."");
        $data = DB::select("select * from tbl_data_laborat_dokter where jenis='".$datajenis[0]->jenis_pemeriksaan."'");
        return view('laboratorium/v_datajenispelayanandokter',[ 'datanama'=>$datanama,'datajenis'=>$datajenis, 'data'=>$data, 'judul' => $judul]);
    }

    public function dataJenisPelayananLab()
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $jenis_layanan = DB::select("select * from tbl_jenis_pemeriksaan where status !='hapus' "); 
        // print_r($jenis_layanan);
        return view('laboratorium/v_datajenislab',[ 'jenis' => $jenis_layanan, 'judul' => $judul]);
    }

    public function dataUjiLab($id)
    {
        $judul = 'Daftar Pelayanan Pasien';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $data = DB::select("select * from tbl_nama_pemeriksaan where id_jenis_pemeriksaan = ".$id); 
        
        return view('laboratorium/v_dataujilab',['data'=> $data, 'judul' => $judul]);
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

    public function storepelayanandokter(Request $request)
    {
        $Tbl_data_laborat_dokter = new Tbl_data_laborat_dokter;
        $Tbl_data_laborat_dokter->nama=$request->jenis_pemeriksaan_dokter;
        $Tbl_data_laborat_dokter->jenis=$request->jenis_lab;
        $Tbl_data_laborat_dokter->tarif=$request->tarif;
        $Tbl_data_laborat_dokter->nilai_normal=$request->nilai_normal;
        $Tbl_data_laborat_dokter->satuan=$request->satuan;
        $Tbl_data_laborat_dokter->save();
        // dd($request);
        return redirect ('/laboratdatajenisdokter/'.$request->id_jenis);
    }

    public function storehasillab(Request $request)
    {
        $countdata = count($request->hasil);
        for($i = 0; $i<$countdata; $i++){
            $Tbl_hasillab = new Tbl_hasillab;
            $Tbl_hasillab->id_pemeriksaan=$request->id_pemeriksaan;
            $Tbl_hasillab->id_nama_pemeriksaan=$request->id_nama[$i];
            $Tbl_hasillab->id_jenis_pemeriksaan=$request->id_jenis[$i];
            $Tbl_hasillab->hasil_pemeriksaan_lab=$request->hasil[$i];
            $Tbl_hasillab->penanggung_jawab=session('user_data')[0]['nama'];
            $Tbl_hasillab->save();
        }
        
        // dd($request);
        return redirect ('/laborat');
    }

    public function deletepelayanandokter($id1, $id2)
    {
        $delete = DB::table('tbl_data_laborat_dokter')->where('id_data_laborat_dokter', $id2)->delete();
        // $data = DB::select("select * from tbl_data_laborat_dokter where jenis='".$datajenis[0]->jenis_pemeriksaan."'");
        return redirect ('/laboratdatajenisdokter/'.$id1);
    }

    public function deletedatajenislab($id)
    {
        $antrian = DB::select("UPDATE tbl_jenis_pemeriksaan set status='hapus' where id_jenis_pemeriksaan=".$id."");
        return redirect ('/laboratdatajenislab');
    }

}