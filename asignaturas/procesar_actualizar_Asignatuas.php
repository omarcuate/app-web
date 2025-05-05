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

$actualizar = "UPDATE asignaturas SET 
ClaveAsignatura='$ClaveAsignatura',
Nombre='$Nombre',
TotalCreditos='$TotalCreditos',
IdTipoAsignatura='$IdTipoAsignatura',
TipoAsignatura='$TipoAsignatura',
CarreraId='$CarreraId',
Estatus='$Estatus' WHERE IdAsignatura='$IdAsignatura'";

$resultado = mysqli_query($conexion, $actualizar);


if (!$resultado) {
    echo "No se pudieron actualizar los datos";
} else {
    header("Location: catalogoAsignatuas.php");
}
