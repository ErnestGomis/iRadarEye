<?php
// Archivo login.php
require 'config.php';

// Iniciar sesión
session_start();

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['id_usuario'])) {
  header('Location: success.php');
  exit();
}

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtener datos del formulario
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  // Conexión a la base de datos
  $conexion = new mysqli('localhost', 'root', '', 'bbdd-iradareye');

  // Verificar si la conexión es exitosa
  if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
  }

  // Obtener el usuario de la base de datos
  $query = "SELECT id_usuario, usuario, contrasena FROM usuarios WHERE usuario = ?";
  $stmt = $conexion->prepare($query);
  $stmt->bind_param('s', $usuario);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id_usuario, $usuario, $contrasena_hash);
    $stmt->fetch();

    // Verificar si la contraseña es correcta
    if (password_verify($contrasena, $contrasena_hash)) {
      // Iniciar sesión y redireccionar a success.php
      $_SESSION['id_usuario'] = $id_usuario;
      $_SESSION['usuario'] = $usuario;
      header('Location: success.php');
      exit();
    } else {
      $_SESSION['error'] = 'Contraseña incorrecta. Inténtalo de nuevo.';
    }
  } else {
    $_SESSION['error'] = 'Usuario no encontrado. Inténtalo de nuevo.';
  }
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="Project 22/23" content="RadarEye">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Tu perfil</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
  <div class="fondo">
    <div class="recuadroCentral">
      <h1>Hola, </h1>
      <br>
      <div class="fotoPerfil"> </div>
    </div>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#tab-complete" aria-expanded="true" data-tab="complete" title="Jugadas"><i class="fa fa-lock fa-lg fa-fw"></i> Jugadas</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-fav" aria-expanded="false" data-tab="fav" title="Favoritos"><i class="fa fa-heart fa-lg fa-fw"></i> Favoritos</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-hidden" aria-expanded="false" data-tab="hidden" title="Ganadas"><i class="fa fa-ban fa-lg fa-fw"></i> Ganadas</a></li>
      </ul>
      <div class="rooms">
        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>