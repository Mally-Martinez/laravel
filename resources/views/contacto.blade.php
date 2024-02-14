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
        <input type="text" name="correo" >
        <br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" value= "enviar"></textarea>
        <br>
        <label for="ciudad">ciudad</label>
        <select name="ciudad" id="">
            <option value="GDL">Guadalajara</option>
            <option value="ZAPOPAN">Zapopan</option>
            <option value="TONALA">Tonala</option>
        </select>
        <br>
        <input type="submit" value= "enviar">
    </form>
</body>
</html>