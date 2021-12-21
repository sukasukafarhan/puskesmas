<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_antrian_dokter extends Model
{
    public $table = "tbl_antrian_dokter";
    public $timestamps = false;
    protected $fillable = [
        'id_askep','id_pemeriksaan','no_rm','tanggal','jam_mulai','rpd','rpk','rps','nb_subjective','tb','bb','imt','suhu','sistol','diastol','nb_object','nb_assessment','nb_plan','waktu_selesai','penanggungjawab',
    ];
}
