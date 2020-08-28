<?php

namespace App\Http\Controllers;
use App\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class tambah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //\App\admin::create($request->all());
        \App\admin::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'no_telp' => $request['no_telp'],
            'password' => bcrypt($request['password'])
        ]);
        return redirect('/loginin')->with('sukses','Data Berhasil Di Inputkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //\App\admin::create($request->all());
                \App\admin::create([
                    'nama' => $request['nama'],
                    'email' => $request['email'],
                    'no_telp' => $request['no_telp'],
                    'password' => bcrypt($request['password'])
                ]);
                return redirect('/daftaradmin')->with('sukses','Data Berhasil Di Inputkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
