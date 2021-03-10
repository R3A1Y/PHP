<?php

session_start();

if (!(isset($_SESSION['login_auth']) and isset($_SESSION['login_user']))) {
    header('location:index.php');
} elseif (!$_SESSION['login_auth'] == 9789) {
    header('location:index.php');
}
