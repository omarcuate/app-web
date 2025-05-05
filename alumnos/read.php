
<?php
include '../config/conexion.php';

if (!isset($_POST['buscar'])) {

	$_POST['buscar'] = "";

	$buscar = $_POST['buscar'];
}


$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM profesionista WHERE Nombre LIKE '%" . $buscar . "%' 
			OR NumeroControl LIKE '%" . $buscar . "%'
			OR CURP LIKE '%" . $buscar . "%'
			OR NumeroControl LIKE '%" . $buscar . "%'
			OR PrimerApellido LIKE '%" . $buscar . "%'
			OR SegundoApellido LIKE '%" . $buscar . "%'
			OR IdGenero LIKE '%" . $buscar . "%' ";

$sql_query = mysqli_query($conexion, $SQL_READ);
