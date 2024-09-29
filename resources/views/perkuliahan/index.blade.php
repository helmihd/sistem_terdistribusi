<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Articles</h1>
    <a href="{{ route('perkuliahan.create') }}">Insert New perkuliahan</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($perkuliahan as $perkuliahan)
            <li>
                {{ $perkuliahan->id }}{{ $perkuliahan->mahasiswa_name }}{{ $perkuliahan->matkul_name }}
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
