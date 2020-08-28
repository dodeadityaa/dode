<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    protected $table = 'desas';
    protected $fillable = ['nama_desa'];
    protected $dates = ['created_at','update_at'];
}
