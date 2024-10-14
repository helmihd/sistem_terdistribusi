<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_matkul' => 'required',
        ]);

        Matkul::create($request->all());

        return redirect()->route('index')
                         ->with('success', 'Matkul created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        return view('matkul.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matkul $matkul)
    {
        return view('matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matkul $matkul)
    {
        $request->validate([
            'nama' => 'required',
            'no_matkul' => 'required',
        ]);

        $matkul->update($request->all());

        return redirect()->route('index')
                         ->with('success', 'Matkul updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matkul $matkul)
    {
        $matkul->delete();

        return redirect()->route('index')
                         ->with('success', 'Matkul deleted successfully.');
    }
}
