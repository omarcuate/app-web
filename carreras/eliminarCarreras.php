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
$idCarrera = $_GET['idCarrera'];
$eliminar = "DELETE FROM carreras WHERE idCarrera = '$idCarrera'";
$elimina = $conexion->query($eliminar);
header("Location:catalogoCarreras.php");
$conexion->close();
