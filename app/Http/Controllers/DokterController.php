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
        $lastdata = DB::table('tbl_resep_obat')->first();
        $lastindex = $lastdata->id_resep;
        // $listresep = DB::table('tbl_resep_obat')->count();
        // echo $lastindex;
        $countobat = count($request->nama_obat);
        for($i = 0; $i<$countobat; $i++){
            $Tbl_resep_obats = new Tbl_resep_obats;
            $Tbl_resep_obats->id_resep=$lastindex;
            $Tbl_resep_obats->nama_obat=$request->nama_obat[$i];
            $Tbl_resep_obats->jumlah=$request->jk[$i];
            $Tbl_resep_obats->save();
            // dd($request->jumlah[$i]);
        }
        return redirect ('/pelayanandokter/'.$request->no_rm);

    //  return view('v_tambahff');
    }
    public function index($id)
    {
        if(!Session::get('user_data')){
            return redirect('/login');
        }else{
            $judul = 'PELAYANAN PASIEN';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d h:i:s');
            $data = DB::select("select * from tbl_asuhan_keperawatan where no_rm='".$id."'"); 
            $poli_asal = DB::select("select poli_asal from tbl_antrian_poli_umums where no_rm='".$id."'"); 
            $pasien = DB::select("select * from tbl_datapasiens where no_rm='".$id."'"); 
            $diagnosa = DB::select("select * from tbl_diagnosa_rm where no_rm='".$id."' && status!='hapus'"); 
            $tindakan = DB::select("select * from tbl_data_tindakan "); 
            $tindakan_rm = DB::select("select * from tbl_tindakan_rm where no_rm='".$id."' && status!='hapus'"); 
            $dataobat = DB::select("SELECT * FROM tbl_data_obat JOIN tbl_data_stock_obat on tbl_data_stock_obat.id_obat=tbl_data_obat.id_obat where tbl_data_stock_obat.jumlah_penerimaan!=0");
            $pasien[0]->poli_asal = $poli_asal[0]->poli_asal;
            $pasien[0]->tanggal = $tanggal;
            $pasien[0]->id_pemeriksaan = $data[0]->id_pemeriksaan;
            // $data[0]->waktu = $waktu;
            // print_r($data);
            // // if(isset($diagnosa)){
            // print_r($diagnosa);
            return view('dokter/v_pelayanan',['dataobat' => $dataobat,'tindakan_rm' => $tindakan_rm, 'tindakan'=> $tindakan, 'diagnosa' => $diagnosa,'pasien' => $pasien, 'data' => $data, 'judul' => $judul]);
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
        $antrian = DB::select("select * from tbl_asuhan_keperawatan");     
        $waktu=date('h:i:s');
        $jdata = count($antrian);
        $i=0;
        for($a=0; $a<$jdata; $a++){
            $antrian[$a]->waktu = $waktu;
            $antrian[$a]->status = "Masuk";
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
        if(isset($data)){
            print_r($data);
        }
        return view('dokter/v_tabel_diagnosis',['data'=>$data,'judul' => $judul]);
    }
    public function hapus($id)
    {
        $antrian = DB::select("UPDATE tbl_data_icdx set status='hapus' where id=".$id."");
        return redirect ('/dataicdx');
    }

    public function hapusdiagnosa($id1,$id2)
    {
        $antrian = DB::select("UPDATE tbl_diagnosa_rm set status='hapus' where id_diagnosa=".$id2."");
        return redirect ('/pelayanandokter/'.$id1);
    }

    public function hapustindakan($id1,$id2)
    {
        $antrian = DB::select("UPDATE tbl_tindakan_rm set status='hapus' where id_tindakan=".$id2."");
        return redirect ('/pelayanandokter/'.$id1);
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
        $Tbl_anamnesa->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm);
    }

    public function storetindakan(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_tindakan = new Tbl_tindakan;
        $Tbl_tindakan->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_tindakan->tindakan=$request->tindakan;
        $Tbl_tindakan->keterangan=$request->keterangan;
        $Tbl_tindakan->waktu_tindakan=$waktu;
        $Tbl_tindakan->status="Masuk";
        $Tbl_tindakan->penanggung_jawab=session('user_data')[0]['nama'];;
        $Tbl_tindakan->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm);
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
        
        $Tbl_pemeriksaan->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm);
    }

    public function storediagnosa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        // $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."'");  

        $Tbl_diagnosa = new Tbl_diagnosa;
        $Tbl_diagnosa->id_pemeriksaan=$request->id_pemeriksaan;
        $Tbl_diagnosa->icd_x=$request->icdx;
        $Tbl_diagnosa->nama_diagnosa=$request->diagnosa;
        $Tbl_diagnosa->jenis=$request->jenis;
        $Tbl_diagnosa->kasus=$request->kasus;
        $Tbl_diagnosa->no_rm=$request->no_rm;
        $Tbl_diagnosa->status="tersedia";
        $Tbl_diagnosa->save();
        
        return redirect ('/pelayanandokter/'.$request->no_rm);
    }

    public function pelayanan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('dokter/v_pelayanan',['judul' => $judul]);
    }

}
