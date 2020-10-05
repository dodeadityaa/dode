<?php

namespace App\Http\Controllers;
use App\admin;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

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
            'alamat' => $request['alamat'],
            'jenis_kelamin' => $request['jenis_kelamin'],
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
        \App\admin::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'alamat' => $request['alamat'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_telp' => $request['no_telp'],
            'avatar' => 'avataradmin/admin.png',
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
        $adminin = \App\admin::find($id);
        return view('tampilan.dataadmin')->with('adminin', $adminin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) 
    {
        // untuk validasi form
        $this -> validate($request, [
            'namee' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'numberee' => 'required',
            'passwordd' => 'required'
        ]);
        // update data admin
        DB::table('admins') -> where('id', $request->id) -> update([
            'nama' => $request->namee,
            'email' => $request ->email,
            'alamat' => $request ->alamat,
            'no_telp' => $request ->numberee,
            'password' => $request ->passwordd
        ]);
        // alihkan halaman edit ke halaman books
        return redirect('/dataadmin')-> with('suksesssss', 'Data Admin Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminin = \App\admin::find($id);
        if(!$adminin){
            return redirect()->back();
        }
        $adminin->delete();
        return redirect('/dataadmin')->with('suksesss','Data Berhasil Di Hapus');

    }
}
