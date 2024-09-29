<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Perkuliahan</title>
</head>
<body>
    <h1>Tambah Perkuliahan</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('perkuliahan.store') }}" method="POST">
        @csrf
        <label for="id_mahasiswa">Mahasiswa:</label>
        <select name="id_mahasiswa" id="id_mahasiswa" required>
            @foreach ($mahasiswas as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>

        <label for="id_matkul">Mata Kuliah:</label>
        <select name="id_matkul" id="id_matkul" required>
            @foreach ($matkuls as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
            @endforeach
        </select>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
