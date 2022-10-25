<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
</head>
<body>
    <h1>Alta</h1>
    <form action="/crear" method="post">@csrf
        Nombre: <input type="text" name="nombre" id=""> <br>
        Apellido: <input type="text" name="apellido" id=""> <br>
        Telefono: <input type="text" name="telefono" id=""> <br>
        <input type="submit" value="Enviar">

    </form>

    @isset($resultado)
        {{ $resultado['mensaje'] }}
        {{ $resultado['datos']['id'] }} <br />
        {{ $resultado['datos']['nombre'] }} <br />
        {{ $resultado['datos']['apellido'] }} <br />
        {{ $resultado['datos']['telefono'] }} <br />
        {{ $resultado['datos']['created_at'] }} <br />
        {{ $resultado['datos']['updated_at'] }} <br />

    @endisset
</body>
</html>