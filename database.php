<?php 

$server = 'sql5.freesqldatabase.com';
$username = 'sql5429748';
$password = 'iXjZp4Y4yj';
$database = 'sql5429748';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

} catch (PDOException $e) {
    die ('Connected failed: '.$e->getMessage());
}


?>