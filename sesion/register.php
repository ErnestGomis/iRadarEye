<?php
// Archivo register.php

// Iniciar sesión
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtener datos del formulario
  $usuario = $_POST['usuario'];
  $correo = $_POST['correo'];
  $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

  // Conexión a la base de datos
  $conexion = new mysqli('localhost', 'root', '', 'escapesrooms');

  // Verificar si la conexión es exitosa
  if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
  }

  // Insertar los datos en la tabla usuarios
  $query = "INSERT INTO usuarios (usuario, correo, contrasena) VALUES (?, ?, ?)";
  $stmt = $conexion->prepare($query);
  $stmt->bind_param('sss', $usuario, $correo, $contrasena);
  if ($stmt->execute()) {
    // Redireccionar a success.php
    $_SESSION['mensaje'] = 'Registro exitoso. Inicia sesión.';
    header('Location: success.php');
    exit();
  } else {
    $_SESSION['error'] = 'Error al registrar. Inténtalo de nuevo.';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuario</title>
  <!-- Agregar archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require 'menu.php'; ?>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Registro de Usuario</h4>
        </div>
        <div class="card-body">
          <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
            <?php unset($_SESSION['error']); ?>
          <?php endif; ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
              <label for="usuario">Usuario:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="form-group">
              <label for="correo">Correo:</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
          </div>
<div class="form-group">
              <label for="confirmar_contrasena">Confirmar Contraseña:</label>
              <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="Confirma tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          </form>
        </div>
        <div class="card-footer text-center">
          <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
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