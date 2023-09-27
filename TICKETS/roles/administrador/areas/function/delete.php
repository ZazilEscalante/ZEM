<?php

require('../../../include/db.php');

$id = $_GET['id'];


$query = "DELETE FROM area WHERE id_area = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("location: ../index.php");

//print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: " . $telefono);

//echo "<br> Nombre del usuario: {$nombre} email: {$email} tel: {telefono}";

?>  