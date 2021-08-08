<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /tienda-de-deportes');
  }


require 'database.php';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /tienda-de-deportes');
    } else {
      $message = 'Sorry, those credentials do not match';
    }
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


<?php if(!empty($message)): ?>
 <p><?= $message ?></p>
<?php endif; ?> 

<span>o <a href="sigup.php">Registrate</a></span>
<form action="login.php" method="post">
    <input type="text" name="email" placeholder="Ingresa tu email">
    <input type="password" name="password" placeholder="tu contraseña">
    <input type="submit" value="send">
    </form>
</body>
</html>