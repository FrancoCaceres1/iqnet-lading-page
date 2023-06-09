<?php
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $baseDeDatos = "iqnet";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

  if(!$enlace) {
    echo"Erro en la conexion con el servidor";
  } else
?>

<?php 

  session_start();
  if(isset($_SESSION["usuario"])) {

?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
  <title>Administrador</title>
</head>
<body>
  <header>
    <div class="div-header">
      <div class="texto">
        <h1>IQNet</h1><span>Management</span>
      </div>
      <a href="salir.php">Log Out</a>
    </div>
  </header>
  <section>
  <table class="tabla-contactos" border="4" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="100%">
    <tr class="tabla-principal">
      <td>Name</td>
      <td>Phone</td>
      <td>Email</td>
      <td>Message</td>
      <td></td>
    </tr>

    <?php
    if (isset($_POST['eliminar'])) {
      $id = $_POST['eliminar'];

      $eliminarDatos = "DELETE FROM contacto WHERE id = $id";
      $ejecutarEliminar = mysqli_query($enlace, $eliminarDatos);
    }
    ?>

    <?php
    $sql = "SELECT * FROM contacto";
    $result = mysqli_query($enlace,$sql);
        
    while($row = $result->fetch_assoc()){
    ?>

    <tr>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['telefono']?></td>
      <td><?php echo $row['correo']?></td>
      <td><?php echo $row['mensaje']?></td>
      <td>
        <form method="POST" id="eliminar_<?php echo $row['id']; ?>" action="admin.php">
          <input type="hidden" name="eliminar" value="<?php echo $row['id']; ?>"/>
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg>
          </button>
        </form>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
  </section>
</body>
</html>

<?php
  } else {
    header("location:login.php");
  }
?>