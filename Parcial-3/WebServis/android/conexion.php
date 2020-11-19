<?php
$hostname='localhost';
$database='android';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "Problema de conexion";
}
?>