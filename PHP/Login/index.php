<?php
include 'login.php';

if (isset($_SESSION['login_user'])) {
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p><?=$errors?></p>
        <label for="">User</label>
        <input type="text" name="user" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>