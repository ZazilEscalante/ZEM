<?php
require ('../../../../includes/db.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO area (nombre_area) VALUES ('$nombre')";
$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>
