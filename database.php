<?php 

$server = 'sql5.freesqldatabase.com';
$username = 'sql5429748';
$password = 'iXjZp4Y4yj';
$database = 'sql5429748';

$link = mysqli_connect($server, $username, $password, $database);

//checar conexión

if($link === false) {
    die("ERROR: no estas conectado. " . mysqli_error());
}


?>