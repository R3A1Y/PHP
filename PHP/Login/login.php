<?php
session_start();
$errors = '';

if ($_POST) {

    include_once 'conexion.php';

    $email = $_POST['user'];
    $password = $_POST['password'];

    $cn = getConnection();

    $query = "SELECT email, password FROM login WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($cn, $query);

    $cn->close();

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login_user'] = $email;
        $_SESSION['login_auth'] = 9789;
        header('location:home.php');
    } else {
        $errors = "Usuario o Contrasena Invalido";
    }
}
