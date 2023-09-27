<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  
  <!-- Bootstrap CSS ICONS v5.2.1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>

<body>
  <header>
    <?php
    //include("./partials/navbar.html");
    ?>
  </header>
  <main>
    <div class="container h-100" style="padding-top: 4rem;">
        <div class="row justify-content-center align-item-center h-100">
            <div class="col-12 col-sm-12 col-md-3 mb-3">
            <div class="card ">
                <div class="card-body">
                    <form action="./function/insert.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre area</label>
                            <input name="nombre" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
            </div>
            </div>
        </div>
          <div class="col-12 col-sm-12 col-md-9">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                  <thead>
                      <tr>
                      <th scopes="col">#</th>
                      <th scopes="col">Nombres</th>
                      <th scopes="col"></th>
                      <th scopes="col"></th>
                      </tr>
                  </thead>
                  <tbody>
                    
                    <?php
                    require("../../../include/db.php");

                    $query = "SELECT * FROM area";
                    $ejecutar = mysqli_query($connection, $query);
                    $contador = 1;
                    while($fila = mysqli_fetch_array($ejecutar)){
                    ?>
                    <tr>
                      <td><?php echo $contador;?></td>
                      <td><?php echo $fila['nombre_area'];?></td>
                                           
                      <td><a href="./view/update_form.php?id=<?php echo $fila[ 'id_area' ]; ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                      <td><a href="./function/delete.php?id=<?php echo $fila[ 'id_area' ]; ?>"><i class="bi bi-trash2-fill text danger"></i></a></td>

                    </tr>
                    <?php 
                  $contador++;  } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>