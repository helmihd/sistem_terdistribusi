<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>test</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('mahasiswa.create') }}">Create New matkul</a>

    <ul>
        @foreach ($data as $d)
            <li>
                <a href="{{ route('mahasiswa.show', $d->id) }}">{{ $d->name }}</a>
                <a href="{{ route('mahasiswa.edit', $d->id) }}">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $d->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
