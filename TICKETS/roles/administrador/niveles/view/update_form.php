<?php
require("../../../../include/db.php");
$id = $_GET['id'];
$query = "SELECT * FROM nivel WHERE id_nivel = '$id'";
$ejecutar = mysqli_query($connection, $query);
$fila = mysqli_fetch_assoc($ejecutar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <div class="container h-100" style="padding-top: 2rem;">
            <div class="row justify-content-center align-item-center h-100">
                <div class="col-12 col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="../function/update.php?id=<?php echo $fila['id_nivel'];?>" method="post">
                                <div class="mb-3 card text-bg-dark">
                                    <label class="card-header" style ="text-align:center; font-weight: bold;">Actualizar Nivel</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input name="nombre" type="text" class="form-control" value="<?php echo $fila['nombre_nivel'];?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a class="btn btn-danger" href="../index.php">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap-->´
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
