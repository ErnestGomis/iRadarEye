<!DOCTYPE html>
<html>
<head>
	<title>Resultados de búsqueda</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>

<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root","","prueba");

// Obtener los valores del formulario
$genero = $_POST['genero'];
$fecha = $_POST['fecha'];
$ubi = $_POST['ubi'];

print($genero);
print($fecha);
print($ubi);

// Construir la consulta SQL
$sql = "SELECT * FROM escaperooms WHERE genero LIKE '%$genero%' AND ubi LIKE '%$ubi%'";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conexion, $sql);

// Mostrar los resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Sala: " . $fila['sala'] . "<br>";
    echo "Género: " . $fila['genero'] . "<br>";
    //echo "Fecha: " . $fila['fecha'] . "<br>";
    echo "Ubicación: " . $fila['ubi'] . "<br>";
}
//Mostrar en una tabla
echo "<table>";
echo "<tr><th>Sala</th><th>Género</th><th>Ubicación</th></tr>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['sala'] . "</td>";
    echo "<td>" . $fila['genero'] . "</td>";
    echo "<td>" . $fila['ubi'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
</body>
</>
