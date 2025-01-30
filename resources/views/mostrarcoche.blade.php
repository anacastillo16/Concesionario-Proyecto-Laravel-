<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ver Coche</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Concesionario</h1>
        <a href="{{route('coches.index')}}">Volver a Inicio</a>
    </header>
    
   <h1>{{ $coche -> marca}}</h1>
   <p>Datos sobre el coche {{ $coche->marca }}</p>
   <ul>
        <li>Marca: {{ $coche->marca }}</li>
        <li>Modelo: {{ $coche->modelo }}</li>
        <li>Color: {{ $coche->color }}</li>
        <li>Matrícula: {{ $coche->matricula }}</li>
   </ul>

    <a href="{{ route('coches.edit', $coche->id) }}" class="editar">Editar</a>
    <form action="{{ route('coches.destroy', $coche->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Borrar" class="delete">
    </form>
    
</body>
</html>