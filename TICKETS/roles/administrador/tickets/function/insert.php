<?php
require ('../../../../include/db.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO nivel (nombre_nivel) VALUES ('$nombre')";
$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>