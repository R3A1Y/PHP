<?php 

function conectar()
{
    # https://www.google.com
    $cn = mysqli_connect('localhost','root','','test','3306');
    
    return $cn;
}

function consultar($id=null)
{
    $cn = conectar();
    
    $query = "SELECT * FROM usuario";
    
    if($id)
        $query = $query." WHERE id='$id'";
    
    $resultado = mysqli_query($cn, $query);
    mysqli_close($cn);
    return $resultado;
}

function insertar($nombre, $apellido, $descripcion)
{
    $query = "INSERT INTO usuario(nombre, apellido, descripcion)VALUES('$nombre','$apellido','$descripcion')";
    $cn = conectar();
    $result = mysqli_query($cn, $query);
    mysqli_close($cn);
}


function editar($nombre, $apellido, $descripcion, $id)
{
    $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido',descripcion = '$descripcion' WHERE id='$id'";
    #echo $query;
    $cn = conectar();
    $result = mysqli_query($cn, $query) or die("Ocurrio un error ". mysqli_error($cn));
    mysqli_close($cn);
}

function eliminar($id){
    $query = "DELETE FROM usuario WHERE id = '$id'";
    $cn = conectar();
    $result = mysqli_query($cn, $query);
    mysqli_close($cn);
}
?>