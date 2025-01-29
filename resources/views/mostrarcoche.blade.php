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
    
   <h1>Mi Coche con id {{ $coche -> id}}</h1>
   {{ $coche->marca }}
   {{ $coche->modelo }}
   {{ $coche->color }}
   {{ $coche->matricula }}
</body>
</html>