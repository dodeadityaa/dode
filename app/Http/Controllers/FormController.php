<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\admin;
use app\rumah;
use Illuminate\Http\Request;
use App\kabkot;
use App\kecamatan;

class FormController extends Controller
{
    public function form()
    {
        $kabkotss = DB::table('kabkots')->get();
        // return $provinces_list;
        $rumss = DB::table('rumahs')->get();
        // return $rumss;
        $luaslantaiss = DB::table('luas_lantais')->get();
        $lahanss = DB::table('lahans')->get();
        $jenislantaiss = DB::table('jenis_lantais')->get();
        $jenisdindingss = DB::table('jenis_dindings')->get();
        $kualitass = DB::table('kualitas')->get();
        $kualitaatapss = DB::table('kualitas_atap')->get();
        $jenisatapss = DB::table('jenis_ataps')->get();
        $kamartidurss = DB::table('kamar_tidurs')->get();
        $sumberairss = DB::table('sumber_airs')->get();
        $airminumss = DB::table('air_minums')->get();
        $listrikss = DB::table('listriks')->get();
        $wattss = DB::table('watts')->get();
        $bahanbakarss = DB::table('bahan_bakar_masaks')->get();
        $buangairss = DB::table('buang_airs')->get();
        $jenisklosetss = DB::table('jenis_klosets')->get();
        $pembuanganakhirss = DB::table('pembuangan_akhirs')->get();
        $jumlahhewanss = DB::table('jumlah_hewans')->get();
        $yesnoss = DB::table('yes_nos')->get();
        return view('tampilan.formKK')->with('kabkotss', $kabkotss)->with('rumss', $rumss)->with('lahanss', $lahanss)->with('luaslantaiss', $luaslantaiss)
        ->with('jenislantaiss', $jenislantaiss)->with('jenisdindingss', $jenisdindingss)->with('kualitass', $kualitass)->with('kualitaatapss', $kualitaatapss)->with('jenisatapss', $jenisatapss)
        ->with('kamartidurss', $kamartidurss)->with('sumberairss', $sumberairss)->with('airminumss', $airminumss)->with('listrikss', $listrikss)
        ->with('wattss', $wattss)->with('bahanbakarss', $bahanbakarss)->with('buangairss', $buangairss)->with('jenisklosetss', $jenisklosetss)
        ->with('pembuanganakhirss', $pembuanganakhirss)->with('jumlahhewanss', $jumlahhewanss)->with('yesnoss', $yesnoss);
        // return view('tampilan.formKK')->with('kabkotss', $kabkotss);
    }

    public function kecamm2(Request $request)
    {
        $value = $request->get('value');
        $data = DB::table('kecamatans')
            ->where('id_kabkot', $value)
            ->get();
        $output = '<option value="">Masukan Kecamatan</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . ucfirst($row->nama_kecamatan) . '</option>';
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
            $output .= '<option value="' . $row->id . '">' . ucfirst($row->nama_desa) . '</option>';
        }
        echo $output;
    }

    public function rumahkan()
    {
        $rumss = DB::table('rumahs')->get();
        return $rumss;
        // var_dump($rumss);
        // return view('tampilan.formKK')->with('rumss', $rumss);
    }
}

