<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root","","prueba");

// Obtener los valores del formulario
$genero = $_POST['genero'];
$fecha = $_POST['fecha'];
$ubi = $_POST['ubi'];

// Construir la consulta SQL
$sql = "SELECT * FROM escaperooms WHERE genero LIKE '%$genero%' AND ubi LIKE '%$ubi%'";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conexion, $sql);

// Mostrar los resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Sala: " . $fila['sala'] . "<br>";
    echo "Género: " . $fila['genero'] . "<br>";
    echo "Fecha: " . $fila['fecha'] . "<br>";
    echo "Ubicación: " . $fila['ubi'] . "<br><br>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>