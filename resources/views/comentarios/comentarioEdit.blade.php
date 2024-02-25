<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar comentarios</title>
</head>
<body>
    <a href="{{ route('comentario.index')}}">Lista de comentarios</a>
    <hr>
    <h1>Comentario</h1>
    @include('comentarios.parciales.form-error')
    <form action="{{route('comentario.update', $comentario)}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{old('nombre') ?? $comentario->nombre}}">
        <br>
        <label for="correo">Correo:</label>
        <input type="text" name="correo" value="{{old('correo') ?? $comentario->correo}}">
        <br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" cols="10" rows="5">{{old('comentario') ?? $comentario->comentario}}</textarea>
        <br>
        <label for="ciudad">Ciudad</label>
        <select name="ciudad" id="">
            <option value="GDL" @selected(old('ciudad')  ?? $comentario->ciudad == 'GDL')>Guadalajara</option>
            <option value="ZAPOPAN" @selected(old('ciudad') ?? $comentario->ciudad == 'ZAPOPAN')>Zapopan</option>
            <option value="TONALÁ" @selected(old('ciudad') ?? $comentario->ciudad == 'TONALÁ')>Tonalá</option>
        </select>
        <br>
        <input type="submit" value= "enviar">
    </form>
</body>
</html>