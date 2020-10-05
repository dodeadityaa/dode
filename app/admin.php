<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['nama','email','alamat','jenis_kelamin','no_telp','avatar','password'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['created_at','update_at'];
}
