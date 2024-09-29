<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Articles</h1>
    <a href="{{ route('matkul.create') }}">Insert New matkul</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($matkul as $matkul)
            <li>
                {{ $matkul->id }} <a href="{{ route('matkul.show', $matkul->id) }}">{{ $matkul->nama }}</a>
                <a href="{{ route('matkul.edit', $matkul->id) }}">Edit</a>
                <form action="{{ route('matkul.destroy', $matkul->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <ul>
        {{-- @foreach ($results as $r)
            <p> {{ $r->name }} </p>
            <p> {{ $r->nim }} </p>
        @endforeach --}}
    </ul>
</body>

</html>
