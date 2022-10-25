<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
    <h1>Eliminar</h1>
    <form action="/eliminar" method="post">@csrf
        ID: <input type="text" name="id" id=""> <br>
        <input type="submit" value="Enviar">

    </form>

    @isset($resultado)
        {{ $resultado['mensaje'] }}
    @endisset
</body>
</html>