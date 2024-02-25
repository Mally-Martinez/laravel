<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>info</title>
</head>
<body>
    <a href ="/comentario/create">Contacto</a>
    <hr>
    <h1>Informacion</h1>

    {{$tipo}}

    @if($tipo = 'alumno')
        <h2>Alumnos</h2>
        <p>blablabla</p>
    @elseif($tipo = 'prof' || $tipo = 'profesor')
        <h2>Profesores</h2>
        <p>asdfghjfghj</p>
    @else
        <h2>Publico general</h2>
    @endif

</body>
</html>