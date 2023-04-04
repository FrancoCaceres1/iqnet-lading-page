<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../resources/img/cacecuso.ico">
  <link rel="stylesheet" href="../styles/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="POST">
    <div class="admin">
      <h3>IQNet</h3><span>login</span>
    </div>
    <div class="datos">
      <label class="user" for="txt1">User :</label>
      <input class="text1" type="" name="t1" required placeholder="user">
      <label class="pass" for="txt1">Password :</label>
      <input class="text2" type="password" name="t2" required placeholder="pass">
    </div>
    <div class="boton">
      <input class="login" type="submit" name="" value="Login">
    </div>
    
    <?php

  if($_POST){
    session_start();
    require('conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM login WHERE usuario = :u AND contrasena = :p");
    $query->bindParam(":u", $u);
    $query->bindParam(":p", $p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario) {
      $_SESSION['usuario'] = $usuario["usuario"];
      header("location:admin.php");
    } else {
      ?>
      <div class="div-span">
        <span class="error">Invalid username or password</span>
      </div>
      <?php
    }
  }
?>
  </form>
</body>


</html>