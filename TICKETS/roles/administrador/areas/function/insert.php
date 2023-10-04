<?php

// para testear que se recibe los datos print_r($_POST);

require('../../../../include/db.php');

$nombre = $_POST['nombre'];


$query = "INSERT INTO area (nombre_area) VALUES ('$nombre')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");


?>