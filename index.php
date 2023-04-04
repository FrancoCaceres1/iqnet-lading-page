<?php
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $baseDeDatos = "iqnet";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

  if(!$enlace) {
    echo"Erro en la conexion con el servidor";
  } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="resources/img/LogoICO.ico">
  <title>IQNet Comunicaciones</title>
  <link rel="preload" href="styles/normalize.css">
  <link rel="stylesheet" href="styles/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
  <link rel="preload" href="styles/styles.css">
  <link rel="stylesheet" href="styles/styles.css">

</head>

<body>
  <header>
    <h1 class="titulo">IQNet
      <span>Comunicaciones</span>
    </h1>
  </header>
  <div class="nav-bg">
    <nav class="navegacion_principal contenedor">
      <a href="#">Inicio</a>
      <a href="#">Sobre nosotros</a>
      <a href="#">Clientes</a>
      <a href="#formulario">Contacto</a>
      <a href="admin.php">Ayuda</a>
    </nav>
  </div>

  <section class="img01">
    <div class="contenido-img01">
      <h2>Conectividad optica de alta velocidad</h2>

      <div class="ubicacion">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44" height="44"
          viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <circle cx="12" cy="11" r="3" />
          <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
        </svg>
        <p>Misiones, Argentina</p>
      </div>

      <a class="boton" href="#formulario">Contacto</a>
    </div> <!--Corresponde al contenido-img01 -->

  </section>


  <main class="contenedor sombra">
    <h2>Servicios</h2>
    <div class="servicios">
      <section class="servicio">
        <h3>Cobertura</h3>
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-broadcast-tower"
            width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M16.616 13.924a5 5 0 1 0 -9.23 0"></path>
            <path d="M20.307 15.469a9 9 0 1 0 -16.615 0"></path>
            <path d="M9 21l3 -9l3 9"></path>
            <path d="M10 19h4"></path>
          </svg>
        </div>
        <p>Vivamus vitae nisl ut arcu sodales placerat a et justo. Maecenas
          fringilla, risus a lobortis porta, quam justo pharetra nulla, nec
          elementum libero orci sed est</p>

      </section>

      <section class="servicio">
        <h3>Servicios</h3>
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices" width="54" height="54"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M13 9a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1v-10z"></path>
            <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"></path>
            <path d="M16 9h2"></path>
          </svg>
        </div>
        <p>Vivamus vitae nisl ut arcu sodales placerat a et justo. Maecenas
          fringilla, risus a lobortis porta, quam justo pharetra nulla, nec
          elementum libero orci sed est</p>
      </section>
      <section class="servicio">
        <h3>Inversores</h3>
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="54"
            height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0"></path>
            <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
            <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
            <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
            <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
            <path d="M5 15v1m0 -8v1"></path>
          </svg>
        </div>
        <p>Vivamus vitae nisl ut arcu sodales placerat a et justo. Maecenas
          fringilla, risus a lobortis porta, quam justo pharetra nulla, nec
          elementum libero orci sed est</p>
      </section>
    </div> <!--Cierre de la clase servicios-->


    <section>
      <h2>Contacto</h2>
      <form class="formulario" id="formulario" method="POST">
        <fieldset>
          <legend>Contactanos llenando este formulario</legend>

          <div class="contenedor-campos">
            <div class="campo">
              <label>Nombre</label>
              <input class="input-text" type="text" placeholder="Tu nombre" name="nombre">
            </div>
            <div class="campo">
              <label>Telefono</label>
              <input class="input-text" type="tel" placeholder="Tu telefono" name="telefono">
            </div>
            <div class="campo">
              <label>Correo</label>
              <input class="input-text" type="email" placeholder="Tu email" name="correo">
            </div>
            <div class="campo">
              <label>Mensaje</label>
              <textarea class="input-text" name="mensaje"></textarea>
            </div>
          </div> <!--Este es el contenedor de los campos del formulario-->

          <div class="alinear-derecha flex">
            <input class="boton width-peque-100" type="Submit" value="Enviar" name="enviar">
          </div>

        </fieldset>
      </form>
    </section>
  </main>
  <footer class="footer">
    <p>Todos los derechos reservados - Walter Daniel Cáceres Cusolito</p>
  </footer>


</body>

</html>

<?php

  if (isset($_POST['enviar'])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"]; 
    $id = $_POST[""];
    
    $insertarDatos  = "INSERT INTO contacto VALUES('$id', '$nombre', '$telefono', '$correo', '$mensaje')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
  }

?>