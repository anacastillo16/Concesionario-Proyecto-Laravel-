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
    <h3>Datos actuales del coche: </h3>
    <ul>
        <li>Marca: {{$coche->marca}}</li>
        <li>Modelo: {{$coche->modelo}}</li>
        <li>Color: {{$coche->color}}</li>
        <li>Matricula: {{$coche->matricula}}</li>
    </ul>   
    <form action="{{route('editarcoche/{id}')}}" method="post">
        @csrf
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value="{{$coche->marca}}">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{$coche->modelo}}">
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value="{{$coche->color}}">
        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" id="matricula" value="{{$coche->matricula}}">
        <input type="submit" value="Actualizar Coche">
    </form>
</body>
</html>