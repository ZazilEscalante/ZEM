<?php



require('../connection/connection.php');

$id = $_GET['id'];


$query = "DELETE FROM usuario WHERE id_usuario = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("location: ../index.php");

//print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: " . $telefono);

//echo "<br> Nombre del usuario: {$nombre} email: {$email} tel: {telefono}";

?>