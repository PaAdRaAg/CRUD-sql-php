<?php
// update
if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Registro actualizado exitosamente";
    } else {
    echo "Error al actualizar registro: " . mysqli_error($conn);
    }
}
?>