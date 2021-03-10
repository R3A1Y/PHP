<?php
require_once 'funciones.php';

if($_POST){
    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $descripcion = $_POST['descripcion'];

        insertar($nombre, $apellido, $descripcion);
    }
    
    if(isset($_POST['editar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $descripcion = $_POST['descripcion'];
        $id = $_POST['id'];
        
        editar($nombre, $apellido, $descripcion, $id);
    }
}

if($_GET){
    if(isset($_GET['eliminar'])){
        $id = $_GET['id'];
        eliminar($id);
    }
}

header('location:index.php');