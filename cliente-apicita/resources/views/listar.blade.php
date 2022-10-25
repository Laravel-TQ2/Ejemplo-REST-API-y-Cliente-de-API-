<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Listado</h1>

    @foreach($personas as $p)
        ID: {{ $p['id'] }} <br />
        Nombre: {{ $p['nombre'] }} <br />
        Apellido: {{ $p['apellido'] }} <br />
        Telefono: {{ $p['telefono'] }} <br />
        Creado: {{ $p['created_at'] }} <br />
        Modificiado {{ $p['updated_at'] }} <br />
        <br />
    @endforeach
</body>
</html>