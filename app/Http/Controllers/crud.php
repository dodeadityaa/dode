<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
