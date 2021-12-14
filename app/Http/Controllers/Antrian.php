<?php

namespace App\Http\Controllers;

// use Event;
use App\Events\EveryoneEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;


class Antrian extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $judul = 'Tambah Nomor Antrian';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $poli = DB::select("select * from tbl_poli");
        $antrian = DB::select("SELECT COUNT(tbl_antri_pendaftaran.no_antrian) as no_antrian, tbl_poli.kode_poli, tbl_poli.nama_poli FROM tbl_antri_pendaftaran JOIN tbl_poli on tbl_poli.id=tbl_antri_pendaftaran.id_poli where tbl_antri_pendaftaran.tanggal_daftar='".$tanggal."' GROUP by tbl_antri_pendaftaran.id_poli");
        return view('antrian/v_antrian',['judul' => $judul, 'poli'=> $poli, 'antrian' => $antrian]);
    }
    public function showjumlahantrian()
    {
        $judul = 'Jumlah Antrian';
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');

        // $poli = DB::select("select * from tbl_poli");
        $antrian = DB::select("SELECT COUNT(tbl_antri_pendaftaran.no_antrian) as no_antrian, tbl_poli.kode_poli, tbl_poli.nama_poli FROM tbl_antri_pendaftaran JOIN tbl_poli on tbl_poli.id=tbl_antri_pendaftaran.id_poli where tbl_antri_pendaftaran.tanggal_daftar='".$tanggal."' GROUP by tbl_antri_pendaftaran.id_poli");
        return view('antrian/v_dashboardantrian',['antrian' => $antrian, 'judul' => $judul]);
    }
    public function antrian($id_poli)
    {
        date_default_timezone_set('Asia/jakarta');
        $tanggal=date('Y-m-d');
        $cek = DB::table('tbl_antri_pendaftaran')
            ->where('id_poli', '=', $id_poli)
            ->where('tanggal_daftar', '=', $tanggal)
            ->count();
        $jumlah_antrian = $cek + 1;
        DB::table('tbl_antri_pendaftaran')->insert([
                                                 'id_poli' => $id_poli,
                                                 'no_antrian' => $jumlah_antrian,
                                                 'status' => "masuk",
                                                 'tanggal_daftar' => $tanggal,
                                                 'urutan' => $jumlah_antrian,
                                             ]);

        //setelah simpan data disini, daftarantrian cek db apakah ada yg baru dengan count data dan cek last id
        broadcast(new EveryoneEvent());
        return redirect('/');
        // $version = new Version2X("http://127.0.0.1:7000");
        // $client = new Client($version);
        // $client->initialize();
        // $client->emit('send data', ['antrian_baru' => 1]);
        // $client->close();                                     

        // return redirect('/');
    }
}
