<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Concesionario</h1>
        <a href="{{route('coches')}}">Volver a Inicio</a>
    </header>
    
    <h3>¿Estás seguro de que quieres borrar el coche {{$coche->marca), $coche->modelo}}?</h3>

    <form action="{{route('borrarcoche')}}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{route('borrarcoche', $coche->id)}}">Borrar</a>
    </form>
</body>
</html>