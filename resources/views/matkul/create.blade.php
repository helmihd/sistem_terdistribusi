@extends('layout.master')
@section('content')
    <div class="sm:p-7 p-4">
        <form action="{{ route('matkul.store') }}" method="POST">
            @csrf
            <label for="nama">Nama Matkul</label>
            <x-input id="nama" name="nama" placeholder="Nama Matkul" />

            <label for="no_matkul">No Matkul</label>
            <x-input id="no_matkul" name="no_matkul" placeholder="No Matkul" />

            <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Tambah</button>
        </form>
    </div>


@endsection
