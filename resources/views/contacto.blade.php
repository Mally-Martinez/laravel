<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href ="/info">informacion</a>
    <hr>
    <h1>Contacto</h1>
    
    <form action="contacto-guarda" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name= "nombre" >
        <br>
        <label for="correo">Correo:</label>
        <input type="text" name="CORREO" >
        <br>
        <label for="comentario">Comentario:</label>
        <textarea name="submit" value= "enviar"></textarea>
        <br>
        <input type="submit" value= "enviar">
    </form>
</body>
</html>