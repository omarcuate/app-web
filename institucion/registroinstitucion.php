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


//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO datosinstitucion (
             id,
             IdNombreInstitucion_Certificacion,
             NombreInstitucion_Certificacion, 
             IdCampus, 
             Campus, 
             IdEntidad_Cerificacion,
             Entidad_Cerificacion, 
             IdNombreInstitucion_Titulacion, 
             NombreInstitucion_Titulacion,
             IdEntidadFederativa,
             EntidadFederativa)
            VALUES ( '$id',
            '$IdNombreInstitucion_Certificacion',
             '$NombreInstitucion_Certificacion', 
             '$IdCampus', 
             '$Campus', 
             '$IdEntidad_Cerificacion', 
             '$Entidad_Cerificacion', 
             '$IdNombreInstitucion_Titulacion', 
             '$NombreInstitucion_Titulacion', 
             '$IdEntidadFederativa', 
             '$EntidadFederativa')";


$resultado = mysqli_query($conexion, $instruccion_SQL);

if (!$resultado) {
    echo "No se inserto";
} else {
    header("Location: datos-institucion.php");
}




?>