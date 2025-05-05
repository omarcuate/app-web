<?php
include '../config/conexion.php';

if (!isset($_POST['buscar'])) {

    $_POST['buscar'] = "";

    $buscar = $_POST['buscar'];
}


$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM asignaturas WHERE ClaveAsignatura  LIKE '%" . $buscar . "%' 
			OR Nombre LIKE '%" . $buscar . "%'
			OR TipoAsignatura LIKE '%" . $buscar . "%' ";

$sql_query = mysqli_query($conexion, $SQL_READ);
