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

    <form action="{{route('guardarcoche')}}" method="post">
        @csrf
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