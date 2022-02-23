<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Categorias</title>
</head>
<body>

    <table border='1px'>
        <thead>
        <th>Nombre</th>
        <th></th>
        </thead>
        @foreach ($categorias as $categoria)
        <tbody>
        <td> <a href='/categoria/{{$categoria->id}}'> {{$categoria->nombre}}</a> </td>
        <td>
            <form action='/categoria/{{$categoria->id}}'>
                <input type='submit' name="eliminar" formmethod="post" value='x'>
            </form>
        </td>
        </tbody>
        @endforeach
    </table>
    <br>
    <br>
    <a href='/categoria'>CREAR NUEVA CATEGORIA</a>
</body>
</html>
