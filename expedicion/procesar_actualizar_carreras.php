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
$id = $_POST['id'];

$idModalidadTitulacion = $_POST['idModalidadTitulacion'];
$modalidadTitulacion = $_POST['modalidadTitulacion'];
$Expedicion_NombreEntidadFederativa = $_POST['Expedicion_NombreEntidadFederativa'];
$Expedicion_IdEntidadFederativa = $_POST['Expedicion_IdEntidadFederativa'];




$actualizar = "UPDATE expedicion SET 
idModalidadTitulacion ='$idModalidadTitulacion',
modalidadTitulacion ='$modalidadTitulacion',
Expedicion_NombreEntidadFederativa ='$Expedicion_NombreEntidadFederativa',
Expedicion_IdEntidadFederativa ='$Expedicion_IdEntidadFederativa'
WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);


if (!$resultado) {
    echo "No se pudieron actualizar los datos";
} else {
    header("Location: datos-expedicion.php");
}
