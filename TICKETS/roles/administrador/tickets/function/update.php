<?php
require ('../../../../includes/db.php');

$id = $_GET['id'];
$nombre = $_POST['nombre'];


$query = "UPDATE nivel SET nombre_nivel = '$nombre' WHERE id_nivel = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>