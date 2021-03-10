<?php 
require_once 'funciones.php';

$data = consultar();


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

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Descricion</th>
            <th>Acciones</th>
        </tr>
        
        <?php foreach($data as $value){ ?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['nombre']?></td>
            <td><?=$value['apellido']?></td>
            <td><?=$value['descripcion']?></td>
            <td><a href="procesar.php?eliminar=1&id=<?=$value['id']?>">Eliminar</a></td>
            <td><a href="editar.php?id=<?=$value['id']?>">Editar</a></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>