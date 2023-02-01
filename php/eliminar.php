<?php
// delete
    if (isset($_GET['eliminar'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar registro: " . mysqli_error($conn);
    }
}
?>