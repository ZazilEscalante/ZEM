<?php

// para testear que se recibe los datos print_r($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: " . $telefono);

?>