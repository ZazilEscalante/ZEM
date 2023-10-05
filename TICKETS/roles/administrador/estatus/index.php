<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatus</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <!-- place navbar here -->
        <?php include '../../../includes/header_admin.php'; ?>
    </header>
    <main>
        <div class="container h-100" style="padding-top: 2rem;">
            <div class="row justify-content-center align-item-center h-100">
                <div class="col-12 col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="./functions/insert.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nombre estatus</label>
                                    <input name="nombre" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 mb-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require("../../../includes/db.php");
                                        $query = "SELECT * FROM estatus";
                                        $ejecutar = mysqli_query($connection, $query);
                                        $contador = 1;
                                        while ($fila = mysqli_fetch_array($ejecutar)) {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $contador;?></td>
                                            <td scope="row"><?php echo $fila['nombre_estatus'];?></td>
                                            <td scope="row"><a class="btn btn-warning btn-sm" href="./view/update_form.php?id=<?php echo $fila['id_estatus'];?>"><i class="bi bi-pencil-square"></i></a></td>
                                            <td scope="row"><a class="btn btn-danger btn-sm" href="./functions/delete.php?id=<?php echo $fila['id_estatus'];?>"><i class="bi bi-trash"></i></a></td>
                                        </tr>
                                        <?php $contador++;} ?>
                                    </tbody>
                                </table>
                            </div>
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