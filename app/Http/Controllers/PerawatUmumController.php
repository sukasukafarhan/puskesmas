<?php

namespace App\Http\Controllers;

use App\Tbl_ff;
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
        }else{
            $judul = 'Antrian Pendaftaran';
            date_default_timezone_set('Asia/jakarta');
            $tanggal=date('Y-m-d');
            $status='masuk';
            $antrian = DB::select("SELECT * FROM tbl_antrian_poli_umums JOIN tbl_datapasiens on tbl_datapasiens.no_rm=tbl_antrian_poli_umums.no_rm where tbl_antrian_poli_umums.created_at='".$tanggal."' && tbl_antrian_poli_umums.status!='selesai' ");
            return view('perawat/v_antrianpoliumum',['antrian' => $antrian, 'judul' => $judul]);
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

    public function storeperawat(Request $request)
    {
        

        return redirect ('/perawatumum');
    }

    public function layani($id, $id2)
    {
        $judul = 'Asuhan Keperawatan';
        $family = DB::select("select * from tbl_datapasiens");
        return view('perawat/v_askep',['family' => $family, 'judul' => $judul]);
    }    

    public function history()
    {
        $judul = 'Daftar Pelayanan Pasien';
       
        return view('perawat/v_history', ['judul' => $judul]);
    }

    public function showlaporanrm()
    {
        $judul = 'Daftar Pelayanan Pasien';
       
        return view('perawat/datalaporan/v_laporanrm', ['judul' => $judul]);
    }

    public function panggil($no){
        $data_pendaftaran =  DB::select("select *  from tbl_antri_pendaftaran where id_antrian='".$no."'");
        if($data_pendaftaran[0]->no_antrian <= 10){
            $text="00";
        }else{
            $text="0";
        }
        $final =  "A ".$text." ".$data_pendaftaran[0]->no_antrian;
        $voice = $this->speech([
                                  'key' => 'c823c2295d1b4f9484beb29fcdab3cf2',
                                  'hl' => 'id-id',
                                  'v' => 'Intan',
                                  'src' => $final,
                                  'r' => '0',
                                  'c' => 'mp3',
                                  'f' => '44khz_16bit_stereo',
                                  'ssml' => 'false',
                                  'b64' => 'true'
                              ]);

        echo '<audio src="' . $voice['response'] . '" autoplay="autoplay"></audio>';
        sleep(1);
        return redirect ('/daftarantrian');
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
