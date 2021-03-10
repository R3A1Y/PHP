<?php
require_once 'authentication.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <?php
    echo "<h1> El usuario Logeado es " . $_SESSION['login_user'] . "</h1>";
    ?>

</body>

</html>