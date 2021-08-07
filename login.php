<?php
require 'database.php'


if (!empty($_POST['email'] && !empty($_POST['password']) )){
    $records = $conn->prepare('SELECT id, email, password FROM users')
}



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ingresar</title>
    
       
</head>

<?php
require "./partials/header.php"
?>


<h1>Ingresa</h1>

<span>o <a href="signup.php">Registrate</a></span>
<form action="login.php" method="post">
    <input type="text" name="email" placeholder="Ingresa tu email">
    <input type="password" name="password" placeholder="tu contraseña">
    <input type="submit" value="send">
    </form>
</body>
</html>