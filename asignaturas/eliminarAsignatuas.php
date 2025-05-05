<?php
session_start();

if (!isset($_SESSION['email'])) {
	echo '
        <script>
            alert("por favos inicie sesión")
            window. location = "../login/login/login.php";
        </script>

        ';
	session_destroy();
	die();
}
?>

<?php

include '../config/conexion.php';

//borrar datos 
$IdAsignatura = $_GET['IdAsignatura'];
$eliminar = "DELETE FROM asignaturas WHERE IdAsignatura = '$IdAsignatura'";
$elimina = $conexion->query($eliminar);
header("Location:catalogoAsignatuas.php");
$conexion->close();
?>
