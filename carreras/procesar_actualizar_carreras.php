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

$idCarrera = $_POST['idCarrera'];
$cveCarrera = $_POST['cveCarrera'];
$NombreCarreraCertificados = $_POST['NombreCarreraCertificados'];
$NombreCarreraTitulos = $_POST['NombreCarreraTitulos'];
$idAutorizacionReconocimiento = $_POST['idAutorizacionReconocimiento'];
$autorizacionReconocimiento = $_POST['autorizacionReconocimiento'];
$calificacionMinimaAprobatoria = $_POST['calificacionMinimaAprobatoria'];
$calificacionMinima = $_POST['calificacionMinima'];
$calificacionMaxima = $_POST['calificacionMaxima'];
$ClavePlan = $_POST['ClavePlan'];
$IdTipoPeriodo = $_POST['IdTipoPeriodo'];
$TipoPeriodo = $_POST['TipoPeriodo'];
$IdNivel = $_POST['IdNivel'];
$Nivel = $_POST['Nivel'];
$NumeroRVOECertificados = $_POST['NumeroRVOECertificados'];
$NumeroRVOE = $_POST['NumeroRVOE'];
$FechaExpedicionRVOE = $_POST['FechaExpedicionRVOE'];
$Estatus = $_POST['Estatus'];

$actualizar = "UPDATE carreras SET 
 cveCarrera ='$cveCarrera',
 NombreCarreraCertificados ='$NombreCarreraCertificados',
 NombreCarreraTitulos ='$NombreCarreraTitulos',
 idAutorizacionReconocimiento ='$idAutorizacionReconocimiento',
 autorizacionReconocimiento ='$autorizacionReconocimiento',
 calificacionMinimaAprobatoria ='$calificacionMinimaAprobatoria',
 calificacionMinima ='$calificacionMinima',
 calificacionMaxima ='$calificacionMaxima',
 ClavePlan ='$ClavePlan' ,
 IdTipoPeriodo ='$IdTipoPeriodo',
 TipoPeriodo ='$TipoPeriodo',
 IdNivel ='$IdNivel',
 Nivel ='$Nivel',
 NumeroRVOECertificados ='$NumeroRVOECertificados',
 NumeroRVOE ='$NumeroRVOE',
 FechaExpedicionRVOE ='$FechaExpedicionRVOE',
 Estatus ='$Estatus' WHERE idCarrera='$idCarrera'";

$resultado = mysqli_query($conexion, $actualizar);


if (!$resultado) {
    echo "No se pudieron actualizar los datos";
} else {
    header("Location: catalogoCarreras.php");
}
