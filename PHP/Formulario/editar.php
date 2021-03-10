<?php
include_once 'funciones.php';
$data = consultar($_GET['id']);

while($info[] = mysqli_fetch_assoc($data));
?>

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
    <input type="text" value="<?=$info[0]['nombre']?>" name="nombre" id="">
    <br>
    <label for="">Apellido</label><br>
    <input type="tex" value="<?=$info[0]['apellido']?>" name="apellido" id="">
    <br>
    <label for="">Descripcion</label><br>
    <textarea name="descripcion" id="" cols="40" rows="5"><?=$info[0]['descripcion']?></textarea>
    <input type="hidden" value="<?=$info[0]['id']?>" name="id" id="">
    <br>
    <br>
    <input type="submit" name="editar" id="">
    </form>
</body>
</html>