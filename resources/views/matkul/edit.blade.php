<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama"> Nama Matkul</label>
        <input type="text" id="nama" name="nama" value="{{ $matkul->nama }}">

        <label for="no_matkul"> No Matkul</label>
        <input type="text" id="no_matkul" name="no_matkul" value="{{ $matkul->no_matkul }}">

        <button type="submit">edit</button>
    </form>
</body>

</html>
