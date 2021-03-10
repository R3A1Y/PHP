<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once 'navegacion.php';
?>
    <form action="procesar.php" method="POST">
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" id="">
    <br>
    <label for="">Apellido</label><br>
    <input type="text" name="apellido" id="">
    <br>
    <label for="">Descripcion</label><br>
    <textarea name="descripcion" id="" cols="40" rows="5"></textarea>
    <br>
    <br>
    <input type="submit" name="registrar" id="">
    </form>
</body>
</html>