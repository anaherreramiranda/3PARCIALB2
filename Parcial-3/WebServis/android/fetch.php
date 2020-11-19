<?php

    require_once("conexion.php");

    $documento = $_GET['documento'];

    $sql = "SELECT * FROM persona WHERE documento = '$documento' ";
    $result = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $array = $row;
        }

        echo json_encode($array);
    } else {
        echo 'Registro no existe';
    }

    $result->close();
    $conexion->close();

