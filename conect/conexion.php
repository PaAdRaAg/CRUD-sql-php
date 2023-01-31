<?php
$servername = "localhost";
$database = "a_20197637";
$username = "pramos12";
$password = "r3vsF7q7br3";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>