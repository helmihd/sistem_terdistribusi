@extends('layout.master')
@section('content')
    <div class="sm:p-7 p-4">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <label for="name">Nama Mahasiswa</label>
            <x-input id="name" name="name" placeholder="Nama Mahasiswa" />

            <label for="nim">NIM</label>
            <x-input id="nim" name="nim" placeholder="NIM" />

            <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Tambah</button>
        </form>
    </div>
@endsection
