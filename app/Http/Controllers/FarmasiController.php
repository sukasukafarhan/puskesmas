<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Tbl_data_obat;
use App\Tbl_stok_obat;
class FarmasiController extends Controller
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
            // $pasien = 
            // $antrian = DB::select("SELECT tbl_rekam_medis.no_rm, tbl_rekam_medis.id_pemeriksaan, tbl_antrian_poli_umums.status FROM tbl_antrian_poli_umums JOIN tbl_rekam_medis on tbl_antrian_poli_umums.no_rm = tbl_rekam_medis.no_rm where tbl_antrian_poli_umums.status='farmasi' AND tbl_antrian_poli_umums.created_at='2021-12-24'"); 
            $pasien = DB::select("SELECT a.no_rm, a.id_pemeriksaan, b.waktu, b.status FROM tbl_rekam_medis a JOIN tbl_antrian_poli_umums b on a.no_rm = b.no_rm where b.status='farmasi' AND a.tanggal_kunjungan='".$tanggal."'");
            $obat = DB::select("SELECT * FROM tbl_resep_obats JOIN tbl_resep_obat on tbl_resep_obats.id_resep = tbl_resep_obat.id_resep JOIN tbl_rekam_medis on tbl_resep_obat.id_pemeriksaan = tbl_rekam_medis.id_pemeriksaan WHERE tbl_rekam_medis.tanggal_kunjungan = '".$tanggal."' ");
            // $obat = DB::select("SELECT * FROM tbl_resep_obats JOIN tbl_resep_obat on tbl_resep_obats.id_resep = tbl_resep_obat.id_resep "); 
            foreach($pasien as $pasiens){
                $pasiens->obat = array();
                foreach($obat as $obats){
                    if($pasiens->no_rm = $obats->no_rm){
                        array_push($pasiens->obat,$obats->nama_obat);
                    }
                }
            }
            // print_r($pasien);
            return view('farmasi/pelayanan/v_daftar_data_farmasi',['pasien' => $pasien, 'judul' => $judul]);
        }
    }
    public function pelayanan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('pelayanan/v_pelayanan',['judul' => $judul]);
    }
    public function showtelaahobat()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/pelayanan/v_telaah_obat',['judul' => $judul]);
    }
    public function showtelaahresep($id1,$id2)
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
        $obat = DB::select("SELECT * FROM tbl_resep_obats JOIN tbl_resep_obat on tbl_resep_obats.id_resep = tbl_resep_obat.id_resep JOIN tbl_rekam_medis on tbl_resep_obat.id_pemeriksaan = tbl_rekam_medis.id_pemeriksaan JOIN tbl_data_obat on tbl_resep_obats.id_obat=tbl_data_obat.id_obat WHERE tbl_rekam_medis.tanggal_kunjungan = '".$tanggal."' ");
        
        // print_r($obat);
        return view('farmasi/pelayanan/v_telaah_resep',['obat' => $obat,'pasien' => $pasien,'judul' => $judul]);
    }

    public function selesai($id)
    {
        $updatestatus = DB::select("UPDATE tbl_antrian_poli_umums set status ='selesai' where no_rm='".$request->no_rm."' && created_at='".$tanggal."'");
        
        // print_r($obat);
        return view('farmasi/pelayanan/v_telaah_resep',['obat' => $obat,'pasien' => $pasien,'judul' => $judul]);
    }

    public function showantrian()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/pelayanan/v_daftar_data_farmasi',['judul' => $judul]);
    }
    public function showpelayanan()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/pelayanan/v_pelayanan',['judul' => $judul]);
    }
    public function showobat()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $dataobat = DB::select("SELECT * FROM tbl_data_obat");
        return view('farmasi/kelolaobat/v_tabel_obat',['dataobat' => $dataobat,'judul' => $judul]);
    }
    public function showstokobat()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $data = DB::select("SELECT * FROM tbl_data_obat JOIN tbl_data_stock_obat on tbl_data_stock_obat.id_obat=tbl_data_obat.id_obat");
        $dataobat = DB::select("SELECT * FROM tbl_data_obat");
        $stokobat = DB::select("SELECT * FROM tbl_data_stock_obat");
        return view('farmasi/kelolaobat/v_tabel_stok_obat',['data' => $data,'dataobat' => $dataobat,'stokobat' => $stokobat,'judul' => $judul]);
    }
    public function storedataobat(Request $request)
    {
        $tbl_data_obat= new Tbl_data_obat;
        $tbl_data_obat->nama_obat = $request->nama_obat;
        $tbl_data_obat->satuan= $request->satuan;
        $tbl_data_obat->jenis_obat= $request->jenis_obat;
        $tbl_data_obat->harga= $request->harga;
        $tbl_data_obat->save();
        return  redirect ('/tabelobat');
    }
    public function storestockobat(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        $tbl_stok_obat= new Tbl_stok_obat;
        $tbl_stok_obat->id_obat = $request->id_obat;
        $tbl_stok_obat->jumlah_penerimaan = $request->stok_obat;
        $tbl_stok_obat->tanggal_masuk= $tanggal;
        $tbl_stok_obat->tanggal_kadaluarsa= $request->tanggal_kadaluarsa;
        $tbl_stok_obat->save();
        return  redirect ('/stokobat');
    }

    public function showlaporanlidi()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/datalaporan/v_laporanlidi',['judul' => $judul]);
    }

    public function showlaporanlplpo()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/datalaporan/v_lplpo',['judul' => $judul]);
    }

    public function showlaporanstok()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/datalaporan/v_stock',['judul' => $judul]);
    }

    public function showlaporantelaah()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/datalaporan/v_laporantelaah',['judul' => $judul]);
    }

    public function showhistory()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/pelayanan/v_history',['judul' => $judul]);
    }
}
