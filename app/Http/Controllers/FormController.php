<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\kabkot;
use App\kecamatan;

class FormController extends Controller
{
    public function form()
    {
        $kabkotss = DB::table('kabkots')->get();
        // return $provinces_list;
        return view('tampilan.formKK')->with('kabkotss', $kabkotss);
    }

    public function kecamm2(Request $request)
    {
        $value = $request->get('value');
        $data = DB::table('kecamatans')
            ->where('id_kabkots', $value)
            ->get();
        $output = '<option value="">Masukan Kecamatan</option>';
        foreach ($data as $row) {
            //var_dump($row->name);
            $output .= '<option value="' . $row->id . '">' . ucfirst($row->name) . '</option>';
        }
        echo $output;
    }

    public function desass2(Request $request)
    {
        $value = $request->get('value');
        $data = DB::table('desas')
            ->where('id_kecamatan', $value)
            ->get();
        $output = '<option value="">Masukan Desa</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . ucfirst($row->name) . '</option>';
        }
        echo $output;
    }
}

