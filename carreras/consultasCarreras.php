<?php
require '../config/conexion.php';

$consultar = "SELECT * FROM carreras";
$query = mysqli_query($conexion, $consultar);
$array = mysqli_fetch_array($query);
