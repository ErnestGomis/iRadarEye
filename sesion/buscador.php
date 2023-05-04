<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "escapesrooms";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificación de la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperación de la consulta de búsqueda
$search_query = $_POST['search'];

// Consulta SQL para buscar coincidencias en la base de datos
$sql = "SELECT * FROM escaperooms WHERE empresa LIKE '%$search_query%' OR sala LIKE '%$search_query%' OR ubi LIKE '%$search_query%' OR direc LIKE '%$search_query%' OR genero LIKE '%$search_query%' OR num_jugadores LIKE '%$search_query%' OR tiempo LIKE '%$search_query%' OR dificult LIKE '%$search_query%' OR edadMin LIKE '%$search_query%' OR nota LIKE '%$search_query%' OR link LIKE '%$search_query%'";

// Ejecución de la consulta
$result = mysqli_query($conn, $sql);

// Mostrar los resultados de la búsqueda
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id_escape"] . " - Empresa: " . $row["empresa"] . " - Sala: " . $row["sala"] . " - Ubicación: " . $row["ubi"] . " - Dirección: " . $row["direc"] . " - Género: " . $row["genero"] . " - Jugadores: " . $row["num_jugadores"] . " - Tiempo: " . $row["tiempo"] . " - Dificultad: " . $row["dificult"] . " - Edad Mínima: " . $row["edadMin"] . " - Nota: " . $row["nota"] . " - Link: " . $row["link"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
