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
$id = $_GET['id'];
$eliminar = "DELETE FROM profesionista WHERE id = '$id'";
$elimina = $conexion->query($eliminar);
header("Location:cataloogoalumnos.php");
$conexion->close();
?>
