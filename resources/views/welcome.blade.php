@php
// Tabel 1
$head1 = ['ID', 'Name', 'NIM', 'Created At'];
$data1 = $data->map(function($item) {
    return [
        'id' => $item->id,
        'name' => $item->name,
        'nim' => $item->nim,
        'created_at' => $item->created_at,
    ];
})->toArray();

$actions1 = $data->mapWithKeys(function ($item) {
    return [
        $item->id => '<form action="' . route('mahasiswa.destroy', $item->id) . '" method="post" style="display:inline;">
            ' . csrf_field() . method_field('DELETE') . '
            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
        </form>'
    ];
})->toArray();

// Tabel 2
$head2 = ['ID', 'Nama Mata Kuliah'];
$data2 = $matkul->map(function($item) {
    return [
        'id' => $item->id,
        'nama' => $item->nama,
    ];
})->toArray();

$actions2 = $matkul->mapWithKeys(function ($item) {
    return [
        $item->id => '<form action="' . route('matkul.destroy', $item->id) . '" method="post" style="display:inline;">
            ' . csrf_field() . method_field('DELETE') . '
            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
        </form>'
    ];
})->toArray();

// Tabel 3
$head3 = ['ID', 'Nama Mahasiswa', 'Nama Mata Kuliah'];
$data3 = $perkuliahan->map(function($item) {
    return [
        'id' => $item->id,
        'mahasiswa_name' => $item->mahasiswa_name,
        'matkul_name' => $item->matkul_name,
    ];
})->toArray();

$actions3 = $perkuliahan->mapWithKeys(function ($item) {
    return [
        $item->id => '<form action="' . route('perkuliahan.destroy', $item->id) . '" method="post" style="display:inline;">
            ' . csrf_field() . method_field('DELETE') . '
            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
        </form>'
    ];
})->toArray();
@endphp


@extends('layout.master')
@section('content')
<div class="sm:p-7 p-4">
    <div class="flex w-full items-center mb-7">
      <x-button url="{{ route('mahasiswa.create') }}">Tambah Data Mahasiswa</x-button>
      <x-button url="{{ route('matkul.create') }}">Tambah Data Mata Kuliah</x-button>
      <x-button url="{{ route('perkuliahan.create') }}">Tambah Data Perkuliahan</x-button>

    </div>
    <!-- Tab 1 -->
    <x-table
    :title="'table-mahasiswa'"
    :head="$head1"
    :data="$data1"
    :actionHeader="true"
    :actionColumn="$actions1"
    />

    <!-- Tab 2 -->
        <x-table
    :title="'table-mata-kuliah'"
    :head="$head2"
    :data="$data2"
    :actionHeader="true"
    :actionColumn="$actions2"
        />

    <!-- Tab3 -->
    <x-table
    :title="'table-perkuliahan'"
    :head="$head2"
    :data="$data2"
    :actionHeader="true"
    :actionColumn="$actions2"
    />

  </div>



  @endsection
