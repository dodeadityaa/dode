<?php

namespace App\Http\Controllers;
use App\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class crud extends Controller
{
    public function inserty()
    {
        DB::table('admins')->insert([
            'nama' => Request('nama'),
            'email' => Request('email'),
            'no_telp' => Request('no_telp'),
            'password' => Request('password'),
        ]);
        return redirect('/loginin');
    }

    public function guys()
    {
        DB::table('admins')->insert([
            'nama' => Request('nama'),
            'email' => Request('email'),
            'no_telp' => Request('no_telp'),
            'password' => Request('password'),
        ]);
        return redirect('/daftaradmin');
    }
}