<?php
// Establecer conexión con la base de datos
$host = "localhost";
$username = "a_20197637";
$password = "r3vsF7q7br3";
$dbname = "a_20197637";

// Crear conexión
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>