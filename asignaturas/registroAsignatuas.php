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


include('../config/conexion.php');

$IdAsignatura = $_POST['IdAsignatura'];
$ClaveAsignatura = $_POST['ClaveAsignatura'];
$Nombre = $_POST['Nombre'];
$TotalCreditos = $_POST['TotalCreditos'];
$IdTipoAsignatura = $_POST['IdTipoAsignatura'];
$TipoAsignatura = $_POST['TipoAsignatura'];
$CarreraId = $_POST['CarreraId'];
$Estatus = $_POST['Estatus'];


//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO asignaturas (IdAsignatura, ClaveAsignatura, Nombre, TotalCreditos, IdTipoAsignatura, TipoAsignatura, CarreraId, Estatus)
VALUES ( '$IdAsignatura', '$ClaveAsignatura', '$Nombre', '$TotalCreditos', '$IdTipoAsignatura', '$TipoAsignatura','$CarreraId', '$Estatus')";


$resultado = mysqli_query($conexion, $instruccion_SQL);

if (!$resultado) {
    echo "No se inserto";
} else {
    header("Location: catalogoAsignatuas.php");
}
