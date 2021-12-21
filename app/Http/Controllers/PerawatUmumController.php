<?php

namespace App\Http\Controllers;

use App\Events\PanggilPendaftaranEvent;
use App\Tbl_ff;
use App\Tbl_asuhan_keperawatan;
use App\Tbl_datapasien;
use App\Tbl_pendaftaran;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

class PerawatUmumController extends Controller
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
        }
        else{
            $value = session('user_data')[0]['role'];
            // if($value == "Perawat Umum"){
                $judul = 'Antrian Poli Umum';
                date_default_timezone_set('Asia/jakarta');
                $tanggal=date('Y-m-d');
                $status='masuk';
                $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.created_at='".$tanggal."' && tbl_antrian_poli_umums.status='Masuk' OR tbl_antrian_poli_umums.status='Lewati'");
                return view('perawat/v_antrianpoliumum',['antrian' => $antrian, 'judul' => $judul]);
            // }
            // else{
            //     return redirect('/login');
            // }
        
        }
    }
    public function lewati($id)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $datas = DB::table("tbl_antrian_poli_umums")
                ->whereDate('created_at', '=', now())->get();
        $count = DB::table("tbl_antrian_poli_umums")
                ->whereDate('created_at', '=', now())->count();
        $data = DB::select("select * from tbl_antrian_poli_umums where id_antrian=".$id."");        
        // print_r($data);
        $id1 = $id+1;
        $id2 = $id+2;
        $id3 = $id+3;
        $temp_id  = 99999996;
        $temp_id1 = 99999997;
        $temp_id2 = 99999998;
        $temp_id3 = 99999999;
        $id_akhir = $id3;
        $id1_akhir = $id;
        $id2_akhir = $id1;
        $id3_akhir = $id2;
        $urutan_awal = $data[0]->urutan;
        $urutan_akhir = $urutan_awal+3;
        if($count>4 && $urutan_akhir<$count){ 
            // $id1 = $id+1;
            // $id2 = $id+2;
            // $urutan_awal = $data[0]->urutan;
            // $urutan_akhir = $urutan_awal[0]+3;
            $data1 = $datas[$urutan_awal+1];
            $data2 = $datas[$urutan_awal+2];
            $data3 = $datas[$urutan_awal+3];
            $urutan_akhir1 = $data1->urutan-2;
            $urutan_akhir2 = $data2->urutan-2;
            $urutan_akhir3 = $data3->urutan-2;      
            $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='lewati' where id_antrian=".$id."");
            $updatedata =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir where id_antrian=".$id."");
            $updatedata1 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir1 where id_antrian=".$id1."");
            $updatedata2 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir2 where id_antrian=".$id2."");
            $updatedata3 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir3 where id_antrian=".$id3."");
            
            $updateid =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id where id_antrian=".$id."");
            $updateid1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id1 where id_antrian=".$id1."");
            $updateid2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id2 where id_antrian=".$id2."");
            $updateid3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id3 where id_antrian=".$id3."");

            $updateidakhir =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id_akhir where id_antrian=".$temp_id."");
            $updateidakhir1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id1_akhir where id_antrian=".$temp_id1."");
            $updateidakhir2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id2_akhir where id_antrian=".$temp_id2."");
            $updateidakhir3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id3_akhir where id_antrian=".$temp_id3."");       
                 
            
            
            // $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='lewati' where id_antrian=".$id."");
            // return redirect('/daftarantrian');
            return response()->json([
                'success' => true,
                'message' => 'Pasien dilewati',
            ]);
        }
        elseif($urutan_akhir==$count){
            $urutan_akhir=$count;
            $urutan_akhir1 = $count-3;
            $urutan_akhir2 = $count-2;   
            $urutan_akhir3 = $count-1;  
            // echo( $urutan_akhir2);
            // echo("\n");
            // echo( $urutan_akhir2);   
            $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='lewati' where id_antrian=".$id."");
            $updatedata =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir where id_antrian=".$id."");
            $updatedata1 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir1 where id_antrian=".$id1."");
            $updatedata2 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir2 where id_antrian=".$id2."");
            $updatedata3 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir3 where id_antrian=".$id3."");
            
            $updateid =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id where id_antrian=".$id."");
            $updateid1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id1 where id_antrian=".$id1."");
            $updateid2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id2 where id_antrian=".$id2."");
            $updateid3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id3 where id_antrian=".$id3."");

            $updateidakhir =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id_akhir where id_antrian=".$temp_id."");
            $updateidakhir1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id1_akhir where id_antrian=".$temp_id1."");
            $updateidakhir2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id2_akhir where id_antrian=".$temp_id2."");            
            $updateidakhir3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id3_akhir where id_antrian=".$temp_id3."");            
            
            return response()->json([
                'success' => true,
                'message' => 'Pasien dilewati aa',
            ]);
        }
        elseif($urutan_akhir==$count+1){
            $id_akhir = $count;
            $urutan_akhir=$count;
            // $urutan_akhir1 = $count-3;
            $urutan_akhir2 = $count-2;   
            $urutan_akhir3 = $count-1;
            // echo($urutan_akhir2);
            // echo($urutan_akhir3); 
            // echo( $urutan_akhir2);
            // echo("\n");
            // echo( $urutan_akhir2);   
            $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='lewati' where id_antrian=".$id."");
            $updatedata =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir where id_antrian=".$id."");
            // $updatedata1 =  DB::select("UPDATE tbl_antri_pendaftaran set urutan = $urutan_akhir1 where id_antrian=".$id1."");
            $updatedata2 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir2 where id_antrian=".$id1."");
            $updatedata3 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir3 where id_antrian=".$id2."");
            
            $updateid =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id where id_antrian=".$id."");
            // $updateid1 =  DB::select("UPDATE tbl_antri_pendaftaran set id_antrian = $temp_id1 where id_antrian=".$id1."");
            $updateid2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id2 where id_antrian=".$id1."");
            $updateid3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id3 where id_antrian=".$id2."");

            $updateidakhir =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id_akhir where id_antrian=".$temp_id."");
            // $updateidakhir1 =  DB::select("UPDATE tbl_antri_pendaftaran set id_antrian = $id1_akhir where id_antrian=".$temp_id1."");
            $updateidakhir2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id1_akhir where id_antrian=".$temp_id2."");            
            $updateidakhir3 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id2_akhir where id_antrian=".$temp_id3."");            
            
            return response()->json([
                'success' => true,
                'message' => 'Pasien dilewati aa',
            ]);
        }
        elseif($urutan_akhir==$count+2){
            $id_akhir=$count;
            $urutan_akhir=$count;
            $urutan_akhir1 = $urutan_awal;
            $urutan_akhir2 = $count-1;   
            // echo( $urutan_akhir2);
            // echo("\n");
            // echo( $urutan_akhir2);   
            $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='lewati' where id_antrian=".$id."");
            $updatedata =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir where id_antrian=".$id."");
            $updatedata1 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir1 where id_antrian=".$id1."");
            $updatedata2 =  DB::select("UPDATE tbl_antrian_poli_umums set urutan = $urutan_akhir2 where id_antrian=".$id2."");
            
            $updateid =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id where id_antrian=".$id."");
            $updateid1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id1 where id_antrian=".$id1."");
            $updateid2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $temp_id2 where id_antrian=".$id2."");
            
            $updateidakhir =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id_akhir where id_antrian=".$temp_id."");
            $updateidakhir1 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id1_akhir where id_antrian=".$temp_id1."");
            $updateidakhir2 =  DB::select("UPDATE tbl_antrian_poli_umums set id_antrian = $id2_akhir where id_antrian=".$temp_id2."");            
            
            // $updatedata2 =  DB::select("UPDATE tbl_antri_pendaftaran set urutan = $urutan_akhir2 where id_antrian=".$id2."");
            return response()->json([
                'success' => true,
                'message' => 'Pasien dilewati bb',
            ]);
        }
        elseif($data[0]->urutan==$count){
            return response()->json([
                'success' => true,
                'message' => 'Pasien ini berada di nomor terakhir',
            ]);
        }
        // $data1 = $data[0];
        // $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='lewati' where id_antrian=".$id."");
        // $updatedata1 =  DB::select("UPDATE tbl_antri_pendaftaran set urutan = $urutan_akhir where id_antrian=".$id."");
        // $updatedata1 =  DB::select("UPDATE tbl_antri_pendaftaran set urutan = $urutan_akhir1 where id_antrian=".$id1."");
        // $updatedata2 =  DB::select("UPDATE tbl_antri_pendaftaran set urutan = $urutan_akhir2 where id_antrian=".$id2."");
        // // $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='lewati' where id_antrian=".$id."");
        // return redirect('/daftarantrian');
    }
    // public function lewati($id)
    // {
    //     $antrian = DB::select("UPDATE tbl_antri_pendaftaran set status='lewati' where id_antrian=".$id."");
    //     return redirect('/daftarantrian');
    // }

    public function hapus($id)
    {
        $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='hapus' where id_antrian=".$id."");
        return redirect('/perawatumum');
    }

    public function proses($id)
    {
        $antrian = DB::select("UPDATE tbl_antrian_poli_umums set status='proses' where id_antrian=".$id."");
        return redirect('/perawatumum');
    }

    public function storeperawat(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        
        $data_rm = DB::select("select * from tbl_rekam_medis where no_rm='".$request->no_rm."' and tanggal_kunjungan='".$tanggal. "'");  

        $Tbl_asuhanperawatan = new Tbl_asuhan_keperawatan;
        $Tbl_asuhanperawatan->id_pemeriksaan=$data_rm[0]->id_pemeriksaan;
        $Tbl_asuhanperawatan->no_rm=$request->no_rm;
        $Tbl_asuhanperawatan->tanggal=$tanggal;
        $Tbl_asuhanperawatan->jam_mulai=$request->waktu_mulai;
        $Tbl_asuhanperawatan->rpd=$request->rpd;
        $Tbl_asuhanperawatan->rpk=$request->rpk;
        $Tbl_asuhanperawatan->rps=$request->rps;
        $Tbl_asuhanperawatan->nb_subjective=$request->s;
        $Tbl_asuhanperawatan->tb=$request->tb;
        $Tbl_asuhanperawatan->bb=$request->bb;
        $Tbl_asuhanperawatan->imt=$request->imt;
        $Tbl_asuhanperawatan->suhu=$request->suhu;
        $Tbl_asuhanperawatan->rr=$request->nafas;
        $Tbl_asuhanperawatan->sistol=$request->sistol;
        $Tbl_asuhanperawatan->diastol=$request->diastol;
        $Tbl_asuhanperawatan->nb_object=$request->o;
        $Tbl_asuhanperawatan->nb_assessment=$request->a;
        $Tbl_asuhanperawatan->nb_plan=$request->p;
        $Tbl_asuhanperawatan->waktu_selesai=$waktu;
        $Tbl_asuhanperawatan->penanggungjawab=session('user_data')[0]['nama'];
        $Tbl_asuhanperawatan->save();
        
        $this->proses($request->id_antrian);
        return redirect ('/perawatumum');
    }

    public function layani($id, $id2)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        $judul = 'Asuhan Keperawatan';
        // $family = DB::select("select * from tbl_datapasiens where no_rm = '".$id2."'");
        // $data_poli = DB::select("select * from tbl_antrian_poli_umums where id_antrian =".$id."");   
        $data = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.id_antrian=".$id."");
        $data[0]->tanggal =  $tanggal;
        $data[0]->waktu_mulai =  $waktu;
        // echo($id2);
        // print_r($data_poli);
        // print_r($data);
        return view('perawat/v_askep',['data' => $data, 'judul' => $judul]);
    }    

    public function history()
    {
        $judul = 'Daftar Pelayanan Pasien';
        $history = $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm");

        return view('perawat/v_history', ['history' => $history,'judul' => $judul]);
    }

    public function showlaporanrm()
    {
        $judul = 'Daftar Pelayanan Pasien';
       
        return view('perawat/datalaporan/v_laporanrm', ['judul' => $judul]);
    }

    public function panggil($no){
        // $data_pendaftaran =  DB::select("select *  from tbl_antri_pendaftaran where id_antrian='".$no."'");
        $data_pendaftaran =  DB::select("select *  from tbl_antrian_poli_umums where id_antrian='".$no."'");
        $data_pendaftaran[0]->nama_poli = "Poli Umum";
        
        // if($data_pendaftaran[0]->no_antrian <= 10){
        //     $text="00";
        // }else{
        //     $text="0";
        // }
        // $final =  "A ".$text." ".$data_pendaftaran[0]->no_antrian;
        // $voice = $this->speech([
        //                           'key' => 'c823c2295d1b4f9484beb29fcdab3cf2',
        //                           'hl' => 'id-id',
        //                           'v' => 'Intan',
        //                           'src' => $final,
        //                           'r' => '0',
        //                           'c' => 'mp3',
        //                           'f' => '44khz_16bit_stereo',
        //                           'ssml' => 'false',
        //                           'b64' => 'true'
        //                       ]);

        // echo '<audio src="' . $voice['response'] . '" autoplay="autoplay"></audio>';
        // sleep(1);print_r($data_pendaftaran);
        print_r($data_pendaftaran);
        broadcast(new PanggilPendaftaranEvent($data_pendaftaran));
        // return redirect ('/daftarantrian');
    }



    public function speech($settings) {
        $this->_validate($settings);
        return $this->_request($settings);
    }

    private function _validate($settings) {
        if (!isset($settings) || count($settings) == 0) throw new Exception('The settings are undefined');
        if (!isset($settings['key']) || empty($settings['key'])) throw new Exception('The API key is undefined');
        if (!isset($settings['src']) || empty($settings['src'])) throw new Exception('The text is undefined');
        if (!isset($settings['hl']) || empty($settings['hl'])) throw new Exception('The language is undefined');
    }

    private function _request($settings) {
        $url = ((isset($settings['ssl']) && $settings['ssl']) ? 'https' : 'http') . '://api.voicerss.org/';
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, (isset($settings['b64']) && $settings['b64']) ? 0 : 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->_buildRequest($settings));

        $resp = curl_exec($ch);

        curl_close($ch);

        $is_error = strpos($resp, 'ERROR') === 0;

        return array(
            'error' => ($is_error) ? $resp : null,
            'response' => (!$is_error) ? $resp: null);
    }

    private function _buildRequest($settings) {
        return http_build_query(array(
                                    'key' => isset($settings['key']) ? $settings['key'] : '',
                                    'src' => isset($settings['src']) ? $settings['src'] : '',
                                    'hl' => isset($settings['hl']) ? $settings['hl'] : '',
                                    'v' => isset($settings['v']) ? $settings['v'] : '',
                                    'r' => isset($settings['r']) ? $settings['r'] : '',
                                    'c' => isset($settings['c']) ? $settings['c'] : '',
                                    'f' => isset($settings['f']) ? $settings['f'] : '',
                                    'ssml' => isset($settings['ssml']) ? $settings['ssml'] : '',
                                    'b64' => isset($settings['b64']) ? $settings['b64'] : ''
                                ));
    }
}
