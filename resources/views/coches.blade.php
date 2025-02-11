<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h1>Concesionario</h1>
        <a href="{{route('coches.create')}}">Crear Coche</a>
    </header>

    <main>
        <form action="{{ route('coches.index') }}" method="get" class="search-form">
            <input type="text" name="marca" placeholder="Buscar por marca">
            <input type="submit" value="Buscar">

            <input type="text" name="color" placeholder="Buscar por color">
            <input type="submit" value="Buscar">

            <input type="submit" value="Ver todos los coches">
    </form>

        <ul>
            @foreach ($coches as $coche)
                <li> <a href="{{ route('coches.show', $coche->id)}}">{{ $coche->marca }}</a> - {{ $coche->modelo}} </li>
            @endforeach
        </ul>
    </main>



</body>

</html>