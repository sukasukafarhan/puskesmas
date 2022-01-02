<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_asuhan_keperawatan;
use App\Tbl_datapasien;
use App\Tbl_icdx;
use App\Tbl_anamnesa;
use App\Tbl_pemeriksaan;
use App\Tbl_diagnosa;
use App\Tbl_tindakan;
use App\Tbl_resep_obat;
use App\Tbl_resep_obats;
use App\Tbl_RekamMedis;
use App\Tbl_penyuluhan;
use App\Tbl_permintaan_lab;
use App\Tbl_antrian_kasir;
use App\Tbl_antrian_laboratorium;
use Session;
use Illuminate\Support\Facades\DB;
class DokterController extends Controller
{
    //
    public function tambahObat(Request $request){
        $Tbl_resep_obat = new Tbl_resep_obat;
        $Tbl_resep_obat->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_resep_obat->jenis_resep=$request->jenis;
        $Tbl_resep_obat->signa=$request->signa;
        $Tbl_resep_obat->aturan_pakai=$request->aturan_pakai;
        $Tbl_resep_obat->save();
        $lastdata = DB::table('tbl_resep_obat')->latest('id_resep')->first();
        $lastindex = $lastdata->id_resep;
        $listresep = DB::table('tbl_resep_obat')->count();
        echo $lastindex;
        $obat = DB::select("select * from tbl_data_obat"); 
        $dataobat = array();
        $obatpasien = array();
        foreach($obat as $obats){
            array_push($dataobat,$obats);
        }
        // print_r($dataobat);
        $countobat = count($request->nama_obat);
        echo ($countobat);
        for($i = 0 ; $i < $countobat-1 ; $i++ ){
            array_push($obatpasien,$dataobat[$i]->nama_obat);
        }
        // print_r($obatpasien);
        if($countobat>1){
            for($i = 0; $i<$countobat-1; $i++){
                $Tbl_resep_obats = new Tbl_resep_obats;
                $Tbl_resep_obats->id_resep=$lastindex;
                $Tbl_resep_obats->nama_obat=$obatpasien[$i];
                $Tbl_resep_obats->id_obat=$request->nama_obat[$i];
                $Tbl_resep_obats->jumlah=$request->jk[$i];
                $Tbl_resep_obats->status="tersedia";
                $Tbl_resep_obats->save();
                // dd($request->jumlah[$i]);
            }    
        }else{
            for($i = 0; $i<$countobat; $i++){
                $Tbl_resep_obats = new Tbl_resep_obats;
                $Tbl_resep_obats->id_resep=$lastindex;
                $Tbl_resep_obats->nama_obat=$obatpasien[$i];
                $Tbl_resep_obats->id_obat=$request->nama_obat[$i];
                $Tbl_resep_obats->jumlah=$request->jk[$i];
                $Tbl_resep_obats->status="tersedia";
                $Tbl_resep_obats->save();
            }
        }
        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);

    //  return view('v_tambahff');
    }
    public function index($id, $id2)
    {
        if(!Session::get('user_data')){
            return redirect('/login');
        }else{
            $judul = 'PELAYANAN PASIEN';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d h:i:s');
            $data = DB::select("select * from tbl_asuhan_keperawatan where no_rm='".$id."' && id_pemeriksaan ='".$id2."'"); //perlu cek id_pemeriksaan
            $askep = DB::select("select * from tbl_asuhan_keperawatan where no_rm='".$id."'");
            // $data = DB::select("SELECT * FROM tbl_asuhan_keperawatan JOIN tbl_rekam_medis on tbl_asuhan_keperawatan.no_rm=tbl_rekam_medis.no_rm where tbl_asuhan_keperawatan.id_pemeriksaan=tbl_rekam_medis.id_pemeriksaan");
            $anamnesa = DB::select("select * from tbl_anamnesa_rm where no_rm='".$id."'");
            $pemeriksaan = DB::select("select * from tbl_pemeriksaan_rm where no_rm='".$id."'");
            $poli_asal = DB::select("select poli_asal from tbl_antrian_poli_umums where no_rm='".$id."'"); 
            $pasien = DB::select("select * from tbl_datapasiens where no_rm='".$id."'"); 
            $diagnosa = DB::select("select * from tbl_diagnosa_rm where no_rm='".$id."' && status!='hapus' && id_pemeriksaan ='".$id2."'");  //perlu cek id_pemeriksaan
            $pilihandiagnosa = DB::select("select * from tbl_data_icdx");
            $tindakan = DB::select("select * from tbl_data_tindakan "); 
            $tindakan_rm = DB::select("select * from tbl_tindakan_rm where no_rm='".$id."' && status!='hapus'"); 
            $dataobat = DB::select("SELECT * FROM tbl_data_obat JOIN tbl_data_stock_obat on tbl_data_stock_obat.id_obat=tbl_data_obat.id_obat where tbl_data_stock_obat.jumlah_penerimaan!=0");
            $pasien[0]->poli_asal = $poli_asal[0]->poli_asal;
            $pasien[0]->tanggal = $tanggal;
            $pasien[0]->id_pemeriksaan = $data[0]->id_pemeriksaan;
            $dataobatpasien = DB::select("SELECT * FROM tbl_resep_obat JOIN tbl_resep_obats on tbl_resep_obat.id_resep=tbl_resep_obats.id_resep where tbl_resep_obats.status!='hapus' and tbl_resep_obat.id_pemeriksaan='".$id2."'");
            $dataperawat = DB::select("select * from tbl_pengguna where role_id=4");
            $datalaborat = DB::select("select * from tbl_data_laborat_dokter");
            $datahasillab = DB::select("SELECT * FROM tbl_hasil_lab, tbl_nama_pemeriksaan, tbl_jenis_pemeriksaan where tbl_hasil_lab.id_nama_pemeriksaan=tbl_nama_pemeriksaan.id_nama_pemeriksaan AND tbl_hasil_lab.id_jenis_pemeriksaan=tbl_jenis_pemeriksaan.id_jenis_pemeriksaan AND tbl_hasil_lab.id_pemeriksaan='".$id2."'");
            // $data[0]->waktu = $waktu;
            // print_r($dataobatpasien);
            // print_r($pilihandiagnosa);
            // print_r($datahasillab);
            return view('dokter/v_pelayanan',['pilihandiagnosa'=>$pilihandiagnosa, 'hasillab'=>$datahasillab, 'laborat'=>$datalaborat,'perawat'=>$dataperawat,'askep'=>$askep,'anamnesa'=>$anamnesa, 'pemeriksaan'=>$pemeriksaan, 'dataobatpasien' => $dataobatpasien,'dataobat' => $dataobat,'tindakan_rm' => $tindakan_rm, 'tindakan'=> $tindakan, 'diagnosa' => $diagnosa,'pasien' => $pasien, 'data' => $data, 'judul' => $judul]);
            // }else{
            //     return view('dokter/v_pelayanan',['pasien' => $pasien, 'data' => $data, 'judul' => $judul]);
            // }
        }
    }

    public function showantriandokter()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        //ganti ke antrian dokter
        $antrian = DB::select("SELECT * FROM tbl_asuhan_keperawatan JOIN tbl_antrian_poli_umums on tbl_asuhan_keperawatan.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.status!='Masuk' AND tbl_antrian_poli_umums.status!='selesai' AND tbl_antrian_poli_umums.status!='pembayaran' AND tbl_asuhan_keperawatan.tanggal='".$tanggal."'");
        // print_r($antrian);
        $waktu=date('h:i:s');
        $jdata = count($antrian);
        $i=0;
        for($a=0; $a<$jdata; $a++){
            $antrian[$a]->waktu = $waktu;
            // $antrian[$a]->status = "Masuk";
        }
        // print_r($antrian);
        
        return view('dokter/v_daftardatapasienmasuk',['antrian'=>$antrian,'judul' => $judul]);
    }
    public function showicdx()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $data = DB::select("select * from tbl_data_icdx where status!='hapus'");  
        
        return view('dokter/v_tabel_diagnosis',['data'=>$data,'judul' => $judul]);
    }
    public function hapus($id)
    {
        $antrian = DB::select("UPDATE tbl_data_icdx set status='hapus' where id=".$id."");
        return redirect ('/dataicdx');
    }

    public function hapusresep($id1,$id2,$id3)
    {
        $antrian = DB::select("UPDATE tbl_resep_obats set status='hapus' where id=".$id3."");
        return redirect ('/pelayanandokter/'.$id1.'/'.$id2);
    }

    public function hapusdiagnosa($id1,$id2,$id3)
    {
        $antrian = DB::select("UPDATE tbl_diagnosa_rm set status='hapus' where id_diagnosa=".$id3."");
        return redirect ('/pelayanandokter/'.$id1.'/'.$id2);
    }

    public function hapustindakan($id1,$id2,$id3)
    {
        $antrian = DB::select("UPDATE tbl_tindakan_rm set status='hapus' where id_tindakan=".$id3."");
        return redirect ('/pelayanandokter/'.$id1.'/'.$id2);
    }

    public function storeicdx(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_icdx = new Tbl_icdx;
        $Tbl_icdx->icd_x=$request->icdx;
        $Tbl_icdx->nama_diagnosa=$request->diagnosa;
        $Tbl_icdx->save();
        
        return redirect ('/dataicdx');
    }

    public function storepenyuluhan(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("h:i:s");

        $Tbl_penyuluhan = new Tbl_penyuluhan;
        $Tbl_penyuluhan->isi_penyuluhan=$request->lainnya;
        $Tbl_penyuluhan->no_rm=$request->no_rm;
        $Tbl_penyuluhan->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_penyuluhan->save();
        // dd($request);

        $updatestatus = DB::select("UPDATE tbl_antrian_poli_umums set status ='pembayaran' where no_rm='".$request->no_rm."' && created_at='".$tanggal."'");

        $data = DB::select("SELECT * FROM tbl_antrian_poli_umums where no_rm='".$request->no_rm."' && created_at='".$tanggal."'");
        
        $Tbl_antrian_kasir = new Tbl_antrian_kasir();
        $tanggal=date('Y-m-d');
        $cek = $Tbl_antrian_kasir
            // ->where('id_poli', '=', $id_poli)
            ->where('created_at', '=', $tanggal)
            ->count();
        $jumlah_antrian = $cek + 1;
        $Tbl_antrian_kasir->no_antrian=$data[0]->no_antrian;
        $Tbl_antrian_kasir->no_rm=$data[0]->no_rm;
        $Tbl_antrian_kasir->waktu=$waktu;
        $Tbl_antrian_kasir->status="pembayaran";
        $Tbl_antrian_kasir->poli_asal="Poli Umum";
        $Tbl_antrian_kasir->urutan = $jumlah_antrian;
        $Tbl_antrian_kasir->save();

        return redirect ('/daftarantriandokter');
    }

    public function storepermintaanlab(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("h:i:s");
        
        for($i =0 ; $i<count($request->id_laborat); $i++){
            $Tbl_permintaan_lab = new Tbl_permintaan_lab;
            $Tbl_permintaan_lab->id_data_laborat_dokter=$request->id_laborat[$i];
            $Tbl_permintaan_lab->status_permintaan="Baru";
            $Tbl_permintaan_lab->id_pemeriksaan=$request->id_pemeriksaan;
            $Tbl_permintaan_lab->tanggal=$tanggal;
            $Tbl_permintaan_lab->waktu=$waktu;
            $Tbl_permintaan_lab->dokter_penanggungjawab=session('user_data')[0]['nama'];
            
            $Tbl_permintaan_lab->save();
        }
       
        $data = DB::select("SELECT * FROM tbl_antrian_poli_umums where no_rm='".$request->no_rm."' && created_at='".$tanggal."'");
        
        $Tbl_antrian_laboratorium = new Tbl_antrian_laboratorium();
        $tanggal=date('Y-m-d');
        $cek = $Tbl_antrian_laboratorium
            // ->where('id_poli', '=', $id_poli)
            ->where('created_at', '=', $tanggal)
            ->count();
        $jumlah_antrian = $cek + 1;
        $Tbl_antrian_laboratorium->no_antrian=$data[0]->no_antrian;
        $Tbl_antrian_laboratorium->no_rm=$data[0]->no_rm;
        $Tbl_antrian_laboratorium->waktu=$waktu;
        $Tbl_antrian_laboratorium->status="permintaanlab";
        $Tbl_antrian_laboratorium->poli_asal="Poli Umum";
        $Tbl_antrian_laboratorium->urutan = $jumlah_antrian;
        $Tbl_antrian_laboratorium->save();

        
        // dd($request);

        $updatestatus = DB::select("UPDATE tbl_antrian_poli_umums set status ='permintaanlab' where no_rm='".$request->no_rm."' AND created_at='".$tanggal."'");

        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);
    }

    public function storeanamnesa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_anamnesa = new Tbl_anamnesa;
        $Tbl_anamnesa->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_anamnesa->rpd=$request->rpd;
        $Tbl_anamnesa->rpk=$request->rpk;
        $Tbl_anamnesa->rps=$request->rps;
        $Tbl_anamnesa->no_rm=$request->no_rm;
        $Tbl_anamnesa->save();

        $updatedokter = DB::select("UPDATE tbl_rekam_medis set dokter_penanggung_jawab ='".session('user_data')[0]['nama']."' where id_pemeriksaan=".$request->id_pemeriksaan."");
        // $Tbl_rekammedis = new Tbl_RekamMedis;
        // $Tbl_rekammedis->dokter_penanggung_jawab = session('user_data')[0]['nama'];
        // $Tbl_rekammedis->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);
    }

    public function storetindakan(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d h:i:s');
        // $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_tindakan = new Tbl_tindakan;
        $Tbl_tindakan->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_tindakan->tindakan=$request->tindakan;
        $Tbl_tindakan->keterangan=$request->keterangan;
        $Tbl_tindakan->waktu_tindakan=$tanggal;
        $Tbl_tindakan->status="Masuk";
        $Tbl_tindakan->penanggung_jawab=session('user_data')[0]['nama'];
        $Tbl_tindakan->no_rm = $request->no_rm;
        $Tbl_tindakan->perawat = $request->perawat;
        $Tbl_tindakan->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);
    }

    public function storepemeriksaan(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_pemeriksaan = new Tbl_pemeriksaan;
        $Tbl_pemeriksaan->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_pemeriksaan->tinggi_badan=$request->tb;
        $Tbl_pemeriksaan->berat_badan=$request->bb;
        $Tbl_pemeriksaan->sistol=$request->sistol;
        $Tbl_pemeriksaan->imt=$request->imt;
        $Tbl_pemeriksaan->suhu=$request->suhu;
        $Tbl_pemeriksaan->rr=$request->nafas;
        $Tbl_pemeriksaan->diastol=$request->diastol;
        $Tbl_pemeriksaan->no_rm=$request->no_rm;
        
        $Tbl_pemeriksaan->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);
    }

    public function storediagnosa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");

        $diagnosa = DB::select("select * from tbl_data_icdx"); 
        
        $countdiagnosapasien = count($diagnosa);
        // echo ($countdiagnosapasien);
        for($i = 0 ; $i < $countdiagnosapasien ; $i++ ){
            if($diagnosa[$i]->icd_x==$request->icdx){
                $namadiagnosa = $diagnosa[$i]->nama_diagnosa;
            }
        }
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_diagnosa = new Tbl_diagnosa;
        $Tbl_diagnosa->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_diagnosa->icd_x=$request->icdx;
        $Tbl_diagnosa->nama_diagnosa=$namadiagnosa;
        $Tbl_diagnosa->jenis=$request->jenis;
        $Tbl_diagnosa->kasus=$request->kasus;
        $Tbl_diagnosa->no_rm=$request->no_rm;
        $Tbl_diagnosa->status="tersedia";
        $Tbl_diagnosa->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm.'/'.$request->id_pemeriksaan);
    }

    public function pelayanan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('dokter/v_pelayanan',['judul' => $judul]);
    }

}
