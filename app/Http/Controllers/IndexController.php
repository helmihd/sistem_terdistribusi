<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
{

    $data = collect(DB::connection('mysql2')->select('SELECT * FROM mahasiswa'));
    $matkul = Matkul::all();

    $perkuliahan = DB::table('perkuliahan')
        ->join('mahasiswa', 'perkuliahan.id_mahasiswa', '=', 'mahasiswa.id')
        ->join('matkuls', 'perkuliahan.id_matkul', '=', 'matkuls.id')
        ->select('perkuliahan.id', 'mahasiswa.name as mahasiswa_name', 'matkuls.nama as matkul_name', 'perkuliahan.id_mahasiswa', 'perkuliahan.id_matkul')
        ->get();

    return view('welcome', compact('data', 'matkul', 'perkuliahan'));
}

}
