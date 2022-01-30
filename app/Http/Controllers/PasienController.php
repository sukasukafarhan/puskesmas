<?php

namespace App\Http\Controllers;

use App\Tbl_ff;
use App\Tbl_datapasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewdataFF()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('datapasien/v_family',['family' => $family, 'judul' => $judul]);
    }

    public function viewaddfamily()
    {
        $judul = 'Tambah Data Family Folder';
        return view('datapasien/v_addfamily',['judul' => $judul]);
    }

    public function viewdatapasien($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('datapasien/v_pasien', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewaddfamilyrm()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrm($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewdatarmpendaftran($id)
    {
        $judul = 'Rekam Medis Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_lab);
        $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // print_r($data_obat);
        $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // print_r($rekammedis);
        return view('datapasien/v_rekammedis', [ 'judul' => $judul, 'pasien' => $pasien, 'rekammedis' => $rekammedis, 'data_lab' => $data_lab, 'data_obat' => $data_obat]);
    }

    public function viewaddpasien($id)
    {
        $judul = 'Tambah Data Pasien';
        $data['data_ff'] = DB::select("SELECT * from tbl_ffs where no_index='".$id."'");
        $data['jamkes'] = DB::select("select * from tbl_jamkes");
        $data['silsilah'] = ['Kepala Keluarga', 'Ibu', 'Lainnya'];
        $data['jenkel'] = ['Laki-laki', 'Perempuan'];
        $data['no_index'] = $id;
        return view('datapasien/v_addpasien', ['data' => $data,'judul' => $judul]);
    }
    
    public function tambahFF(Request $request)
    {
        $tbl_ff = new Tbl_ff;
        $tbl_ff->nama_kk=$request->nama_kk;
        $tbl_ff->alamat=$request->alamat;
        $tbl_ff->desa=$request->desa;
        $tbl_ff->kecamatan=$request->kecamatan;
        $tbl_ff->kabupaten=$request->kabupaten;
        $tbl_ff->telp=$request->telp;
        $kode = $this->kode($request->kabupaten, $request->kecamatan, $request->desa);
        $char = substr($request->nama_kk, 0, 1);
        $c = strtoupper($char);
        $data = DB::select("select * from tbl_ffs where desa='".$request->desa."'");
        $no = 1;
        foreach ($data as $row) {
            $sub_kalimat = substr($row->nama_kk, 0, 1);
            if ($sub_kalimat == $char) {
                $no++;
            }
        }
        if ($no < 10) {
            $no_index = $kode . '.' . $c . '000' . $no;
        } elseif ($no > 9) {
            $no_index = $kode . '.' . $c . '00' . $no;
        } elseif ($no > 99) {
            $no_index = $kode . '.' . $c . '0' . $no;
        } else {
            $no_index = $kode . '.' . $c . $no;
        }
        $tbl_ff->no_index=$no_index;
        $tbl_ff->save();

        return redirect ('/daftarantrian/layani/'.$request->segment);
    }

    public function tambahpasien(Request $request)
    {

        $index = $request->seg2;
        $silsilah=$request->silsilah;
        if($silsilah=='Kepala Keluarga'){
            $no_rm=$index . '.' . '1';
        }
        elseif ($silsilah=='Ibu') {
            $no_rm=$index . '.' .  '2';
        }
        else{
            $count=DB::select("select count(*) as jumlah from tbl_datapasiens where no_index='".$index."'")[0]->jumlah;
            $no=$count+3;
            $no_rm=$index . '.'  . $no;
        }

        $Tbl_datapasien = new Tbl_datapasien;
        $Tbl_datapasien->nama=$request->nama;
        $Tbl_datapasien->jenis_kelamin=$request->jenis_kelamin;
        $Tbl_datapasien->no_index=$request->seg2;
        $Tbl_datapasien->nama_kk=$request->nama_kk;
        $Tbl_datapasien->alamat=$request->alamat;
        $Tbl_datapasien->pekerjaan=$request->pekerjaan;
        $Tbl_datapasien->tanggal_lahir=$request->tanggal_lahir;
        $Tbl_datapasien->umur=$request->umur;
        $Tbl_datapasien->jenis_asuransi=$request->jenis_asuransi;
        $Tbl_datapasien->no_asuransi=$request->no_asuransi;
        $Tbl_datapasien->agama=$request->agama;
        $Tbl_datapasien->telp=$request->no_hp;
        $Tbl_datapasien->silsilah=$request->silsilah;
        $Tbl_datapasien->no_rm=$no_rm;
        $Tbl_datapasien->save();

        return redirect ('/datapasien/'.$request->seg1);
    }

    private function kode($kecamatan, $kabupaten, $desa)
    {
        $kode = 00;
        if ($kabupaten == 'trenggalek' && $kecamatan == 'trenggalek') {
            if ($desa == 'dawuhan') {
                return $kode = '01';
            } else if ($desa == 'sukosari') {
                return $kode = '02';
            } else if ($desa == 'parakan') {
                return $kode = '03';
            } else if ($desa == 'rejowinangun') {
                return $kode = '04';
            } else if ($desa == 'surodakan') {
                return $kode = '05';
            } else if ($desa == 'ngares') {
                return $kode = '06';
            } else if ($desa == 'sumberdadi') {
                return $kode = '07';
            } else {
                return $kode = '08';
            }
        } elseif ($kabupaten == 'trenggalek' && $kecamatan == 'trenggalek') {
            return $kode = '09';
        } elseif ($kabupaten == 'trenggalek' && $kecamatan != 'trenggalek') {
            return $kode = '09';
        } elseif ($kabupaten != 'trenggalek' && $kecamatan != 'trenggalek') {
            return $kode = '10';
        }
        else {
            return $kode = '10';
        }
    }

    public function viewaddfamilyrmlaborat()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('laboratorium/datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrmlaborat($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('laboratorium/datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewdatarmlaborat()
    {
        $judul = 'Rekam Medis Pasien';
       
        return view('laboratorium/datapasien/v_rekammedis', [ 'judul' => $judul]);
    }

    public function viewaddfamilyrmfarmasi()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('farmasi/datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrmfarmasi($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('farmasi/datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewdatarmfarmasi($id)
    {
        $judul = 'Rekam Medis Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_lab);
        $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // print_r($data_obat);
        $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // print_r($rekammedis);
        return view('farmasi/datapasien/v_rekammedis', [ 'judul' => $judul, 'pasien' => $pasien, 'rekammedis' => $rekammedis, 'data_lab' => $data_lab, 'data_obat' => $data_obat]);
    }

    public function viewaddfamilyrmdokter()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('dokter/datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrmdokter($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('dokter/datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    
    public function viewdatarmdokter($id)
    {
        $judul = 'Rekam Medis Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_lab);
        $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // print_r($data_obat);
        $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // print_r($rekammedis);
       
        return view('dokter/datapasien/v_rekammedis', ['judul' => $judul, 'pasien' => $pasien, 'rekammedis' => $rekammedis, 'data_lab' => $data_lab, 'data_obat' => $data_obat]);
    }

    public function viewaddfamilyrmadmin()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('admin/datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrmadmin($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('admin/datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewdatarmadmin($id)
    {
        $judul = 'Rekam Medis Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_lab);
        $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // print_r($data_obat);
        $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // print_r($rekammedis);
        return view('admin/datapasien/v_rekammedis', [ 'judul' => $judul, 'pasien' => $pasien, 'rekammedis' => $rekammedis, 'data_lab' => $data_lab, 'data_obat' => $data_obat]);
    }


    public function viewaddfamilyrmperawat()
    {
        $judul = 'Daftar Family Folder';
        $family = DB::select("SELECT * FROM tbl_ffs");
        return view('perawat/datapasien/v_family2',['family' => $family, 'judul' => $judul]);
    }

    public function viewdatapasienrmperawat($id)
    {
        $judul = 'Daftar Pasien';
        $pasien = DB::select("SELECT * FROM tbl_datapasiens where no_index='".$id."'");
        return view('perawat/datapasien/v_pasien2', ['pasien' => $pasien, 'judul' => $judul]);
    }

    public function viewaskepperawat($id)
    {
        $judul = 'Asuhan Keperawatan Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_askep = DB::select("SELECT * FROM tbl_asuhan_keperawatan where no_rm='".$id."'");
        // $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_askep);
        // $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // // print_r($data_obat);
        // $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // // print_r($rekammedis);
        return view('perawat/datapasien/v_askep',  [ 'judul' => $judul, 'pasien' => $pasien, 'askep' => $data_askep]);
    }

    public function viewrmperawat($id)
    {
        $judul = 'Rekam Medis Pasien';
        $pasien =  DB::select("SELECT * FROM tbl_datapasiens where no_rm='".$id."'");
        $data_lab = DB::select("SELECT a.id_pemeriksaan, b.hasil_pemeriksaan_lab, c.nama_pemeriksaan  FROM tbl_rekam_medis a, tbl_hasil_lab b, tbl_nama_pemeriksaan c where a.no_rm='".$id."' AND a.id_pemeriksaan = b.id_pemeriksaan AND b.id_nama_pemeriksaan = c.id_nama_pemeriksaan ");
        // print_r($data_lab);
        $data_obat = DB::select("SELECT *  FROM tbl_resep_obats a, tbl_resep_obat b, tbl_rekam_medis c where c.no_rm='".$id."' AND b.id_pemeriksaan = c.id_pemeriksaan AND a.id_resep = b.id_resep");
        // print_r($data_obat);
        $rekammedis = DB::select("SELECT * FROM tbl_rekam_medis a, tbl_pemeriksaan_rm b, tbl_anamnesa_rm c, tbl_diagnosa_rm d, tbl_tindakan_rm e, tbl_penyuluhan f where a.no_rm='".$id."' AND b.no_rm ='".$id."' And c.no_rm='".$id."' AND d.no_rm='".$id."' AND e.no_rm ='".$id."' AND f.no_rm='".$id."'");
        // print_r($rekammedis);
       
        return view('perawat/datapasien/v_rm', [ 'judul' => $judul, 'pasien' => $pasien, 'rekammedis' => $rekammedis, 'data_lab' => $data_lab, 'data_obat' => $data_obat]);
    }

}
