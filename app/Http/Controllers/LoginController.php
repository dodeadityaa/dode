<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginin()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        //return redirect('/loginin');
    }
}
