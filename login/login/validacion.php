<?php
session_start();

if (isset($_SESSION['email'])) {
  header("location: login.php");
}

?>
<?php

session_start();

include('../../config/conexion.php');


$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];

//validar contraseña 
$contrasena = hash('sha512', $contrasena);



$validar_login = mysqli_query($conexion, "SELECT * FROM administradoresual WHERE email = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
  $_SESSION['email'] = $correo;

  header("Location: ..\..\inicio/inicio.php");
  exit;
} else {
  echo '
    <script> 
      alert("El usuario no existe por favor verifique los datos");
      window. location = "login.php"
    </script>

    ';
  exit;
}
