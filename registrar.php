<?php
include 'db_conn.php';

// create
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "INSERT INTO crud (id, nombre, apellido, email)
            VALUES (NULL, '$nombre', '$apellido', '$email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Registro creado exitosamente");
    } else {
        echo "Error al crear registro: " . mysqli_error($conn);
    }
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Añadir</title>
    </head>
    <body>
    <div class="container">
            <div class="text-center mb-4">
                <h3>Agregar nuevo usuario</h3>
                <div class="text-muted">Completa el formulario para agregar un nuevo usuario</div>
            </div>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre">
                        </div>

                        <div class="col">
                            <label class="form-label">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Escribe tu apellido">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Escribe tu email">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>