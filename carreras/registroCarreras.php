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



//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO carreras (
    idCarrera, 
    cveCarrera,
    NombreCarreraCertificados, 
    NombreCarreraTitulos,
    idAutorizacionReconocimiento,
    autorizacionReconocimiento, 
    calificacionMinimaAprobatoria, 
    calificacionMinima, 
    calificacionMaxima, 
    ClavePlan, 
    IdTipoPeriodo,
    TipoPeriodo, 
    IdNivel,
    Nivel,
    NumeroRVOECertificados,
    NumeroRVOE, 
    FechaExpedicionRVOE,
    Estatus) 
    VALUES (
    '$idCarrera',
    '$cveCarrera',
    '$NombreCarreraCertificados',
    '$NombreCarreraTitulos',
    '$idAutorizacionReconocimiento',
    '$autorizacionReconocimiento',
    '$calificacionMinimaAprobatoria',
    '$calificacionMinima',
    '$calificacionMaxima',
    '$ClavePlan',
    '$IdTipoPeriodo',
    '$TipoPeriodo',
    '$IdNivel',
    '$Nivel',
    '$NumeroRVOECertificados',
    '$NumeroRVOE',
    '$FechaExpedicionRVOE',
    '$Estatus') ";


$resultado = mysqli_query($conexion, $instruccion_SQL);

if (!$resultado) {
    echo "No se inserto";
} else {
    header("Location: catalogoCarreras.php");
}
