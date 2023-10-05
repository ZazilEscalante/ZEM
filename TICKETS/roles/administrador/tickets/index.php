<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <!-- place navbar here -->
        <?php include '../../../include/header_admin.php'; ?>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center align-item-center h-100">
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <h2>Tickets</h2>
                                        <br>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Administrador</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Nivel</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Fecha creacion</th>
                                            <th scope="col">Fecha cerrado</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require("../../../include/db.php");
                                        $query = "SELECT id_ticket, nombre_cliente, nombre_administrador, nombre_area, nombre_nivel, nombre_estatus, fecha_creacion, fecha_cerrado FROM ticket INNER JOIN cliente ON ticket.id_cliente = cliente.id_cliente INNER JOIN administrador ON ticket.id_administrador = administrador.id_administrador INNER JOIN area ON ticket.id_area = area.id_area INNER JOIN nivel ON ticket.id_nivel = nivel.id_nivel INNER JOIN estatus ON ticket.id_estatus = estatus.id_estatus;";
                                        $ejecutar = mysqli_query($connection, $query);
                                        $contador = 1;
                                        while ($fila = mysqli_fetch_array($ejecutar)) {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $contador;?></td>
                                            <td scope="row"><?php echo $fila['nombre_cliente'];?></td>
                                            <td scope="row"><?php echo $fila['nombre_administrador'];?></td>
                                            <td scope="row"><?php echo $fila['nombre_area'];?></td>
                                            <td scope="row">
                                                <?php
                                                if ($fila['nombre_nivel'] == 'Urgente') {
                                                    echo '<span class="badge bg-danger text-light">';
                                                } elseif($fila['nombre_nivel'] == 'Alto'){
                                                    echo '<span class="badge bg-warning text-dark">';
                                                } elseif($fila['nombre_nivel'] == 'Medio'){
                                                    echo '<span class="badge bg-info text-light">';
                                                } elseif($fila['nombre_nivel'] == 'Bajo'){
                                                    echo '<span class="badge bg-success text-light">';
                                                }
                                                echo $fila['nombre_nivel'].'</span>';
                                                ?>
                                            </td>
                                            <td scope="row">
                                                <?php
                                                if ($fila['nombre_estatus'] == 'Cerrado') {
                                                    echo '<span class="badge bg-success text-light">';
                                                } elseif($fila['nombre_estatus'] == 'Pausado'){
                                                    echo '<span class="badge bg-secondary text-dark">';
                                                } elseif($fila['nombre_estatus'] == 'Proceso'){
                                                    echo '<span class="badge bg-primary text-light">';
                                                } elseif($fila['nombre_estatus'] == 'Abierto'){
                                                    echo '<span class="badge bg-warning text-dark">';
                                                }
                                                echo $fila['nombre_estatus'].'</span>';
                                                ?>
                                            </td>
                                            <td scope="row"><?php echo $fila['fecha_creacion'];?></td>
                                            <td scope="row"><?php echo $fila['fecha_cerrado'];?></td>
                                            <td scope="row"><a class="" href="./view/update_form.php?id=<?php echo $fila['id_ticket'];?>"><i class="bi bi-eye-fill text-primary"></i></a></td>
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