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
require '../config/conexion.php';

$consultar = "SELECT * FROM expedicion";
$query = mysqli_query($conexion, $consultar);
$array = mysqli_fetch_array($query);

?>