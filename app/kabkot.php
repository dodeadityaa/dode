<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabkot extends Model
{
    protected $table = 'kabkots';
    protected $fillable = ['nama_kabkot'];
    protected $dates = ['created_at','update_at'];
}
