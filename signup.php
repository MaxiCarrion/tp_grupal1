<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO usuarios (usuario, nombre, email, password) VALUES (:usuario, :nombre, :email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':usuario', $_POST['usuario']);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Nuevo usuario creado con éxito';
    header("Location: login.php");
    
  } else {
    $message = 'Lo sentimos, debe haber un problema al crear su cuenta.';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registrase</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php require 'partials/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Registrase</h1>
  <span> or <a href="login.php">Ingresar</a></span>

  <form action="signup.php" method="POST">
    <input name="usuario" type="text" placeholder="Nombre de id usuario">
    <input name="nombre" type="text" placeholder="Ingrese su nombre">
    <input name="email" type="text" placeholder="Introduce tu correo electrónico">
    <input name="password" type="password" placeholder="Ingrese su contraseña">
    <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
    <input type="submit" value="Submit">
  </form>

</body>

</html>