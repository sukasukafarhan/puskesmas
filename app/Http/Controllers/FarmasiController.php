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
            
            return view('farmasi/pelayanan/v_daftar_data_farmasi');
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
    public function showtelaahresep()
    {
        $judul = 'PELAYANAN PASIEN';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        
        return view('farmasi/pelayanan/v_telaah_resep',['judul' => $judul]);
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
