<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$descripcion = $_GET['descripcion'];

echo "<h2>Informacion recibida desde PHP</h2>";
echo "el nombre recibido es: " . $nombre . "</br>";
echo "el apellido recibido es: " . $apellido . "</br>";
echo "la descripcion recibida es: " . $descripcion . "</br>";
?>