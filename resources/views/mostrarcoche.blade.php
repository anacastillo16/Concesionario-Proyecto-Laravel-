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
        <a href="{{route('coches')}}">Volver a Inicio</a>
    </header>
    
   <h1>{{ $coche -> marca}}</h1>
   <p>Datos sobre el coche {{ $coche->marca }}</p>
   <ul>
        <li>Marca: {{ $coche->marca }}</li>
        <li>Modelo: {{ $coche->modelo }}</li>
        <li>Color: {{ $coche->color }}</li>
        <li>Matrícula: {{ $coche->matricula }}</li>
   </ul>

    <a href="{{ route('editarcoche', $coche->id) }}">Editar</a>
    <a href="{{ route('borrarcoche', $coche->id) }}">Borrar</a>
    
</body>
</html>