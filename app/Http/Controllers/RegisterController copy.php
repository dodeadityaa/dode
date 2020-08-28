<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registeran()
    {
        $data_admins = \App\admin::all();
        return view('register',['data_admins' => $data_admins]);
    }
}
