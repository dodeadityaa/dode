<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table = 'kecamatans';
    protected $fillable = ['nama_kecamatan'];
    protected $dates = ['created_at','update_at'];
}
