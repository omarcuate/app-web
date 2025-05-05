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

/*print '<pre>';
print_r($_POST);
 print_r($_FILES);*/

include('../config/conexion.php');

$archivo = $_FILES['archivo']['name'];
$aloj = $_FILES['archivo']['tmp_name'];
$plasma = "imagenesalumnos/" . $archivo;
copy($aloj, $plasma);
$firma = $_FILES['firma']['name'];
$rut = $_FILES['firma']['tmp_name'];
$lugar = "imagenesfirma/" . $firma;
copy($rut, $lugar);
$NumeroControl = $_POST['NumeroControl'];
$CURP = $_POST['CURP'];
$Nombre = $_POST['Nombre'];
$PrimerApellido = $_POST['PrimerApellido'];
$SegundoApellido = $_POST['SegundoApellido'];
$IdGenero = $_POST['IdGenero'];
$Fecha = $_POST['Fecha'];
$CarreraId = $_POST['CarreraId'];
$CorreoElectronico = $_POST['CorreoElectronico'];
$Estatus = $_POST['Estatus'];


//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO profesionista ( archivo, firma, NumeroControl, CURP, Nombre, PrimerApellido, SegundoApellido, IdGenero, Fecha, CarreraId, CorreoElectronico, Estatus)
            VALUES ( '$plasma', '$lugar', '$NumeroControl', '$CURP', '$Nombre', '$PrimerApellido', '$SegundoApellido', '$IdGenero', '$Fecha', '$CarreraId', '$CorreoElectronico', '$Estatus')";


$resultado = mysqli_query($conexion, $instruccion_SQL);

if (!$resultado) {
    echo "No se inserto";
} else {
    header("Location: cataloogoalumnos.php");
}




?>