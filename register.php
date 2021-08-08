<?php
require 'database.php';

$username = $password

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>


<?php
require "./partials/header.php"
?>

<?php if(!empty($message)): ?>
 <p><?= $message ?></p>
<?php endif; ?>

    <h1>Registrate</h1>

    <span>o <a href="login.php">Ingrasa</a></span>

    <form action="signup.php" method="post">
    <input type="text" name="email" placeholder="Ingresa tu email">
    <input type="password" name="password" placeholder="tu contraseña">
    <input type="confirm_password" name="password" placeholder="confirma tu contraseña">
    <input type="submit" value="send">
    </form>





</body>
</html>