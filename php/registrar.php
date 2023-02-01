<?php
// create
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre, apellido, email)
            VALUES ('$nombre', '$apellido', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro creado exitosamente";
    } else {
        echo "Error al crear registro: " . mysqli_error($conn);
    }
}
?>