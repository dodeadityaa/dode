<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumah extends Model
{
    protected $table = 'rumahs';
    protected $fillable = ['keterangan_rumah','nilai'];
    protected $dates = ['created_at','update_at'];
}
