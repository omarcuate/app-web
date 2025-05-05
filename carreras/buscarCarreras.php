<?php
include '../config/conexion.php';

if (!isset($_POST['buscar'])) {

	$_POST['buscar'] = "";

	$buscar = $_POST['buscar'];
}


$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM carreras WHERE cveCarrera  LIKE '%" . $buscar . "%' 
			OR NombreCarreraCertificados LIKE '%" . $buscar . "%'
			OR NombreCarreraTitulos LIKE '%" . $buscar . "%'
			OR NumeroRVOE LIKE '%" . $buscar . "%'
			OR ClavePlan LIKE '%" . $buscar . "%'
			OR Nivel LIKE '%" . $buscar . "%' ";

$sql_query = mysqli_query($conexion, $SQL_READ);
