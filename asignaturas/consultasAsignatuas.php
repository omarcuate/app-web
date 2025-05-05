<?php
require '../config/conexion.php';

$consultar = "SELECT * FROM asignaturas";
$query = mysqli_query($conexion, $consultar);
$array = mysqli_fetch_array($query);
