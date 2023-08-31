<?php
//print_r($_POST);
require('../connection/connection.php');
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$telefono= $_POST['telefono'];
$mensaje= $_POST['mensaje'];
print("Usuario: " .$nombre. " email: " . $email . " telefono:" . $telefono . "mensaje:" . $mensaje);

$query = "INSERT INTO usuario (nombre, email, telefono, mensaje) VALUES ('$nombre','$email','$telefono','$mensaje')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

//print("<br> nombre del usuario: " . $nombre . " email: " . $email . " telefono: " . $telefono );//

?>