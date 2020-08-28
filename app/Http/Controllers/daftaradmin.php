<?php

namespace App\Http\Controllers;
use App\admin;

use Illuminate\Http\Request;

class daftaradmin extends Controller
{
    public function daftaradmin()
    {
        return view('tampilan.daftaradmin');
    }
    public function dataadmin()
    {
        $dtadminss = admin::all();
        return view('tampilan.dataadmin',compact('dtadminss'));
    }
}
