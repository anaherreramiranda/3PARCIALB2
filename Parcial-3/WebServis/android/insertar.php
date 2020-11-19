<?php

require_once("conexion.php");

$documento = $_POST['documento'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO persona (documento,nombres,apellidos,edad,sexo)VALUES('$documento','$nombres','$apellidos','$edad','$sexo')";

$result = $conexion->query($sql);

if ($result === TRUE) {
    echo "usuario creado";
} else {
    echo "Error";
}

$conexion->close();