<?php
// Archivo success.php
require 'config.php';
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
  header('Location: login.php');
  exit();
}

// Obtener datos del usuario
$id_usuario = $_SESSION['id_usuario'];
$usuario = $_SESSION['usuario'];


// Redirigir al usuario a index.php
// Redirigir al usuario a index.php
$_SESSION['nombre_usuario'] = $usuario;
header('Location: ../index.php');
exit();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Éxito</title>
  <!-- Agregar archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require '../menu.php'; ?>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Bienvenido, <?php echo $usuario; ?>!</h4>
        </div>
        <div class="card-body">
          <p>Has iniciado sesión con éxito. Puedes agregar aquí el contenido de la página de éxito.</p>
          <a href="logout.php" class="btn btn-primary">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Agregar archivos JS de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Éxito</title>
  <!-- Agregar archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require '../menu.php'; ?>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Bienvenido, <?php echo $usuario; ?>!</h4>
        </div>
        <div class="card-body">
          <p>Has iniciado sesión con éxito. Puedes agregar aquí el contenido de la página de éxito.</p>
          <a href="logout.php" class="btn btn-primary">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Agregar archivos JS de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
