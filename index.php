<?php
session_start();



require 'database.php';


if (isset($_SESSION['user_id'])){

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $result = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($result) > 0){
        $user = $result;
    }
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Bienvenido</title>
</head>
<body>
<header>
<?php
require "./partials/header.php"
?>
</header>


 <?php if(!empty($user)): ?>
      <br> Bienvenido <?= $user['email'] ?>
      <br>Te has registrado con exito.
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h2>Ingresa o Registrate</h2>

      <a href="login.php">Ingresa</a> or
      <a href="signup.php">Registrate</a>
    <?php endif; ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/assets/js/main.js"></script>
</html>
