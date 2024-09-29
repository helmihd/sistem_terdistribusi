<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perkuliahan = DB::table('perkuliahan')
            ->join('mahasiswa', 'perkuliahan.id_mahasiswa', '=', 'mahasiswa.id')
            ->join('matkuls', 'perkuliahan.id_matkul', '=', 'matkuls.id')
            ->select('perkuliahan.id', 'mahasiswa.name as mahasiswa_name', 'matkuls.nama as matkul_name', 'perkuliahan.id_mahasiswa', 'perkuliahan.id_matkul')
            ->get();

        return view('perkuliahan.index', compact('perkuliahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data mahasiswa dan matkul untuk ditampilkan di form
        $mahasiswas = DB::table('mahasiswa')->pluck('name', 'id');
        $matkuls = DB::table('matkuls')->pluck('nama', 'id');

        return view('perkuliahan.create', compact('mahasiswas', 'matkuls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswa,id',
            'id_matkul' => 'required|exists:matkuls,id',
        ]);

        // Menyimpan data perkuliahan
        DB::table('perkuliah')->insert([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_matkul' => $request->id_matkul,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('perkuliahan.index')->with('success', 'Data perkuliahan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
