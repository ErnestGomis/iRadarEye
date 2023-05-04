<header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">IradarEye</a>
        <?php
          $usuario = $_POST['usuario'];
        // Reemplaza estas líneas con tu lógica de inicio de sesión y registro
        $logged_in = true; // true si el usuario ha iniciado sesión, false si no
        $usuario = ""; // reemplaza con el nombre de usuario del usuario que ha iniciado sesión
        if ($logged_in) {
            echo '<ul class="navbar-nav ml-auto">';
            echo '<li class="nav-item">';
            echo '<span class="nav-link">Bienvenido, ' . $usuario . '</span>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="./sesion/logout.php">Logout</a>';
            echo '</li>';
            echo '</ul>';
        } else {
            echo '<ul class="navbar-nav ml-auto">';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="./sesion/login.php">Login</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="./sesion/register.php">Register</a>';
            echo '</li>';
            echo '</ul>';
        }
        ?>
    </nav>
</header>