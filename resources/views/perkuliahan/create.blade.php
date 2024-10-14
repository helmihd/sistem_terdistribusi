



@extends('layout.master')
@section('content')
    <div class="sm:p-7 p-4">
        <form action="{{ route('perkuliahan.store') }}" method="POST">
            @csrf

            <x-select
                id="id_mahasiswa"
                name="id_mahasiswa"
                label="Mahasiswa:"
                :options="$mahasiswas"
            />

            <x-select
                id="id_matkul"
                name="id_matkul"
                label="Mata Kuliah:"
                :options="$matkuls"
            />

            <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
@endsection


