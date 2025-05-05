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
$IdNombreInstitucion_Certificacion = $_POST['IdNombreInstitucion_Certificacion'];
$NombreInstitucion_Certificacion = $_POST['NombreInstitucion_Certificacion'];
$IdCampus = $_POST['IdCampus'];
$Campus = $_POST['Campus'];
$IdEntidad_Cerificacion = $_POST['IdEntidad_Cerificacion'];
$Entidad_Cerificacion = $_POST['Entidad_Cerificacion'];
$IdNombreInstitucion_Titulacion = $_POST['IdNombreInstitucion_Titulacion'];
$NombreInstitucion_Titulacion = $_POST['NombreInstitucion_Titulacion'];
$IdEntidadFederativa = $_POST['IdEntidadFederativa'];
$EntidadFederativa = $_POST['EntidadFederativa'];


$actualizar = "UPDATE datosinstitucion SET 
IdNombreInstitucion_Certificacion = '$IdNombreInstitucion_Certificacion',
NombreInstitucion_Certificacion = '$NombreInstitucion_Certificacion', 
IdCampus = '$IdCampus',
Campus ='$Campus',
IdEntidad_Cerificacion = '$IdEntidad_Cerificacion',
Entidad_Cerificacion ='$Entidad_Cerificacion', 
IdNombreInstitucion_Titulacion ='$IdNombreInstitucion_Titulacion',
NombreInstitucion_Titulacion ='$NombreInstitucion_Titulacion',
IdEntidadFederativa ='$IdEntidadFederativa',
EntidadFederativa ='$EntidadFederativa'
WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);


if (!$resultado) {
    echo "No se pudieron actualizar los datos";
} else {
    header("Location: datos-institucion.php");
}
