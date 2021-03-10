<?php


function getConnection()
{
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'website';
    return mysqli_connect($host, $user, $pwd, $db);
}
