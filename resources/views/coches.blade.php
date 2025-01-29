<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>

<body>
    <header>
        <h1>Concesionario</h1>
        <a href="{{route('crearcoche')}}">Crear Coche</a>
    </header>

    <main>
        <form action="{{ route('coches') }}" method="get">
        <input type="text" name="marca" placeholder="Buscar por marca">
        <input type="submit" value="Buscar">
    </form>

        <ul>
            @foreach ($coches as $coche)
                <li> <a href="{{ route('mostrarcoche', $coche->id)}}">{{ $coche->marca }}</a> - {{ $coche->modelo}} </li>
            @endforeach
        </ul>
    </main>



</body>

</html>