<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Coche</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Concesionario</h1>
        <a href="{{route('coches.index')}}">Volver a Inicio</a>
    </header>

    <form action="{{route('coches.store')}}" method="post">
        @csrf
        <div class="form-title">
            <h3>Crear Coche</h3>
        </div>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">
        <label for="color">Color</label>
        <input type="text" name="color" id="color">
        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" id="matricula">
        <input type="submit" value="Crear Coche">
    </form>

</body>
</html>