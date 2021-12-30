<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Tbl_kasir;

use Illuminate\Support\Facades\DB;
class KasirController extends Controller
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
            $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums  where status='pembayaran' AND created_at='".$tanggal."'"); 
            $pasien = DB::select("SELECT a.jenis_asuransi, a.no_rm, c.id_pemeriksaan  FROM tbl_datapasiens a JOIN tbl_antrian_poli_umums b on a.no_rm = b.no_rm JOIN tbl_rekam_medis c on a.no_rm = c.no_rm where b.status='pembayaran'");
            
            foreach($antrian as $antrians){
                foreach($pasien as $pasiens){
                    if($pasiens->no_rm = $antrians->no_rm){
                        $antrians->jenis_asuransi = $pasiens->jenis_asuransi;
                        $antrians->id_pemeriksaan = $pasiens->id_pemeriksaan;
                    }
                }
            }
            // $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_antrian_poli_umums.no_rm = tbl_datapasiens.no_rm JOIN tbl_rekam_medis on tbl_antrian_poli_umums.no_rm = tbl_rekam_medis.no_rm where tbl_antrian_poli_umums.status='pembayaran' AND tbl_antrian_poli_umums.created_at='2021-12-24'"); 
            // $dataobat = DB::select("SELECT * FROM tbl_data_obat JOIN tbl_data_stock_ obat on tbl_data_stock_obat.id_obat=tbl_data_obat.id_obat where tbl_data_stock_obat.jumlah_penerimaan!=0");
            // echo($tanggal);
            // print_r($antrian);

            return view('kasir/v_daftarantriankasir',['antrian' => $antrian,'judul' => $judul]);
        }
    }
    
    public function showpelayanankasir($id1,$id2)
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $data = DB::select("select id_pemeriksaan from tbl_asuhan_keperawatan where no_rm='".$id2."' && id_pemeriksaan ='".$id1."'");
        $poli_asal = DB::select("select poli_asal, no_antrian from tbl_antrian_poli_umums where no_rm='".$id2."' && created_at ='".$tanggal."'"); 
        $pasien = DB::select("select * from tbl_datapasiens where no_rm='".$id2."'"); 
        $pasien[0]->poli_asal = $poli_asal[0]->poli_asal;
        $pasien[0]->no_antrian = $poli_asal[0]->no_antrian;
        $pasien[0]->tanggal = $tanggal;
        $pasien[0]->id_pemeriksaan = $data[0]->id_pemeriksaan;
        $tindakan_rm = DB::select("SELECT * FROM tbl_tindakan_rm JOIN tbl_data_tindakan on tbl_tindakan_rm.tindakan = tbl_data_tindakan.nama_tindakan where tbl_tindakan_rm.no_rm='".$id2."' && tbl_tindakan_rm.status!='hapus'"); 
        $pemeriksaan = DB::select("SELECT * FROM tbl_permintaanlab JOIN tbl_data_laborat_dokter on tbl_permintaanlab.id_data_laborat_dokter=tbl_data_laborat_dokter.id_data_laborat_dokter where tbl_permintaanlab.id_pemeriksaan ='".$id1."'");
        
        if($pasien[0]->jenis_asuransi == "BPJS"){
            for($i=0;$i<count($tindakan_rm);$i++){
                $tindakan_rm[$i]->tarif = 0;
            }
        }
        
        // $pelayanan = 
        
        return view('kasir/v_datapelayanankasir',['pemeriksaan' => $pemeriksaan, 'tindakan_rm' => $tindakan_rm, 'pasien' => $pasien, 'judul' => $judul]);
    }

    // public function showpelayanankasir()
    // {
    //     $judul = 'PELAYANAN PASIEN';
    //     date_default_timezone_set('Asia/jakarta');
    //     $tanggal=date('Y-m-d');
    //     // $pasien = DB::select("select * from tbl_datapasiens where no_rm='".$id2."'"); 
    //     // $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums, tbl_rekam_medis where .no_rm = tbl_antrian_poli_umums.no_rm AND tbl_antrian_poli_umums.no_rm = tbl_rekam_medis.no_rm AND tbl_antrian_poli_umums.status='selesai' AND tbl_antrian_poli_umums.created_at='".$tanggal."'"); 
        
    //     return view('kasir/v_datapelayanankasir',['judul' => $judul]);
    // }

    public function showhistory()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('kasir/v_history',['judul' => $judul]);
    }

    public function storekasir(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $Tbl_kasir = new Tbl_kasir;
        $Tbl_kasir->no_rm=$request->no_rm;
        $Tbl_kasir->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_kasir->total_pembayaran=$request->tarif;
        $Tbl_kasir->status="Pembayaran";
        $Tbl_kasir->save();
        // dd($request);

        $updatestatus = DB::select("UPDATE tbl_antrian_poli_umums set status ='farmasi' where no_rm='".$request->no_rm."' && created_at='".$tanggal."'");
        
        return redirect ('/kasir');
    }

    public function showlaporan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $data = DB::select("SELECT * FROM tbl_permintaanlab,tbl_data_laborat_dokter,tbl_antrian_poli_umums, tbl_datapasiens, tbl_tindakan_rm, kasir where kasir.id_pemeriksaan = tbl_tindakan_rm.id_pemeriksaan AND tbl_permintaanlab.id_pemeriksaan = tbl_tindakan_rm.id_pemeriksaan AND tbl_permintaanlab.id_data_laborat_dokter = tbl_data_laborat_dokter.id_data_laborat_dokter AND tbl_tindakan_rm.no_rm = tbl_datapasiens.no_rm AND  tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm"); 
        // print_r($data);
        return view('kasir/datalaporan/v_laporankasir',['data' => $data,'judul' => $judul]);
    }
   
    public function exportLaporan()
    {
        $fileName = 'laporan Kasir.csv';
        $data = DB::select("SELECT * FROM tbl_permintaanlab,tbl_data_laborat_dokter,tbl_antrian_poli_umums, tbl_datapasiens, tbl_tindakan_rm, kasir where kasir.id_pemeriksaan = tbl_tindakan_rm.id_pemeriksaan AND tbl_permintaanlab.id_pemeriksaan = tbl_tindakan_rm.id_pemeriksaan AND tbl_permintaanlab.id_data_laborat_dokter = tbl_data_laborat_dokter.id_data_laborat_dokter AND tbl_tindakan_rm.no_rm = tbl_datapasiens.no_rm AND  tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm"); 
        
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        // $columns = array('Tanggal','Poli Asal',' Nama Pasien',' Jenis Kelamin', 'Umur', 'Total', 'Jenis Kunjungan(BPJS/Umum)', 'Jenis Kunjungan Dalam 1 Tahun(baru/lama)' );
        $columns = array('Nama Pasien','Nomor Rekam Medis','Alamat','Jenis Kelamin', 'Jenis Kunjungan(BPJS/Umum)','Poli Asal','Jenis Tindakan','Harga','Jenis Pelayanan Lab', 'Harga', 'Total Pembayaran');

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $datas) {
                $row['Nama Pasien']  = $datas->nama;
                $row['Nomor Rekam Medis'] = $datas->no_rm;
                $row['Alamat'] = $datas->alamat;
                $row['Jenis Kelamin']    = $datas->jenis_kelamin;
                $row['Jenis Kunjungan(BPJS/Umum)']  = $datas->jenis_asuransi;             
                $row['Poli Asal']  = $datas->poli_asal;
                $row['Jenis Tindakan']    = $datas->tindakan;
                $row['Harga']= $datas->tarif;
                $row['Jenis Pelayanan Lab'] = $datas->nama;
                $row['Harga']  = $datas->tarif;             
                $row['Total Pembayaran']  = $datas->total_pembayaran;             

                fputcsv($file, array($row['Nama Pasien'],$row['Nomor Rekam Medis'], $row['Alamat'], $row['Jenis Kelamin'], $row['Jenis Kunjungan(BPJS/Umum)'], $row['Poli Asal'] , $row['Jenis Tindakan'] , $row['Harga'], $row['Jenis Pelayanan Lab'], $row['Harga'], $row['Total Pembayaran']));

            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


}
