<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_data_obat extends Model
{
    protected $fillable = [
        'id_obat','nama_obat','satuan',
    ];
}
