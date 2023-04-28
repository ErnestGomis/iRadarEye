<head>
    <title>¡iRadarEye</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require 'menu.php'; ?>

<style>
body {
  background-image: url(img/radar.PNG);
  background-size: cover;
}

table {
    border-collapse: collapse;
    width: 50%;
    margin-bottom: 1em;
    margin: 0 auto;
    background-position:center; 
	background-color:white;
    position:left;
}

table, th, td {
    border: 1px solid black;
    margin:gray;
}

th {
    background-color: gray;
    color: black;
    text-align: left;
}

th, td {
    padding: 0.5em;
}

h1{
    color:white;
}
</style>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//Mostrar el resultado del buscador en la tabla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["ubi"])) {
        echo "<h1>".$_POST["ubi"]."</h1>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["genero"])) {
        echo "<h1>".$_POST["genero"]."</h1>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["fecha"])) {
        echo "<h1>".$_POST["fecha"]."</h1>";
    }
}

// Consulta a la base de datos
$sql = "SELECT sala, genero, ubi, id_escape, empresa, direc, num_jugadores, tiempo, dificult, edadMin, link, precio FROM escaperooms WHERE ubi='".$_POST["ubi"]."'";
$result = mysqli_query($conn, $sql);

$sql = "SELECT sala, genero, ubi, id_escape, empresa, direc, num_jugadores, tiempo, dificult, edadMin, link, precio FROM escaperooms WHERE genero='".$_POST["genero"]."'";
$result = mysqli_query($conn, $sql);

$sql = "SELECT sala, genero, ubi, id_escape, empresa, direc, num_jugadores, tiempo, dificult, edadMin, link, precio FROM escaperooms WHERE ubi='".$_POST["fecha"]."'";
$result = mysqli_query($conn, $sql);

// Creación de la tabla
echo "<table>
        <tr>
            <th>ID Escape</th>
            <th>Empresa</th>
            <th>Sala</th>
            <th>Ubicación</th>
            <th>Dirección</th>
            <th>Género</th>
            <th>Número de Jugadores</th>
            <th>Tiempo</th>
            <th>Dificultad</th>
            <th>Edad mínima</th>
            <th>Link</th>
            <th>Precio</th>
        </tr>";

// Mostrar los datos de la consulta en la tabla
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id_escape"] . "</td>
                <td>" . $row["empresa"] . "</td>
                <td>" . $row["sala"] . "</td>
                <td>" . $row["ubi"] . "</td>
                <td>" . $row["direc"] . "</td>
                <td>" . $row["genero"] . "</td>
                <td>" . $row["num_jugadores"] . "</td>
                <td>" . $row["tiempo"] . "</td>
                <td>" . $row["dificult"] . "</td>
                <td>" . $row["edadMin"] . "</td>
				<td><a href='" . $row["link"] . "' target='_blank'>" . $row["link"] . "</a></td>
                <td>" . $row["precio"] . "</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='12'>0 resultados</td></tr>";
}

echo "</table>";

// Cerrar la conexión
mysqli_close($conn);
?>