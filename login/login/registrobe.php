<?php
session_start();

if (isset($_SESSION['email'])) {
  header("location: login.php");
}

?>
<?php

include('../../config/conexion.php');

//evaluamos los campos si estan vacios 

if (isset($_POST['register'])) {
  if (
    strlen($_POST['apellidoP']) >= 1 && strlen($_POST['apellidoM']) >= 1
    && strlen($_POST['nombres']) >= 1 && strlen($_POST['curp']) >= 1
    && strlen($_POST['ine']) >= 1 && strlen($_POST['email']) >= 1
    && strlen($_POST['clave']) >= 1
  ) {

    $apellidoPa = $_POST['apellidoP'];
    $apellidoMa = $_POST['apellidoM'];
    $nombreS = $_POST['nombres'];
    $Curp = $_POST['curp'];
    $Ine = $_POST['ine'];
    $Email = $_POST['email'];
    $contrasena = $_POST['clave'];



    //password_hash (encriptacion)

    $contrasena = hash('sha512', $contrasena);
    //conexxion 
    $consulta = "INSERT INTO administradoresual(apellidoP, apellidoM, nombres, curp, ine, email, contrasena) 

                 VALUES ('$apellidoPa','$apellidoMa','$nombreS','$Curp','$Ine','$Email','$contrasena')";

    //verificamos datos repetidos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM administradoresual WHERE email = '$Email' ");

    if (mysqli_num_rows($verificar_correo) > 0) {
      echo '
          <script> 
              alert("EL correo ya esta registrado, intente de nuevo con otro distinto");
              window. location = "registro.php"
          </script>

      ';
      exit();
    }

    //verificacion de ine

    $verificar_ine = mysqli_query($conexion, "SELECT * FROM administradoresual WHERE ine = '$Ine' ");

    if (mysqli_num_rows($verificar_correo) > 0) {
      echo '
          <script> 
              alert("EL CI del INE ya esta registarda intente de nuevo");
              window. location = "registro.php"
          </script>

      ';
      exit();
    }

    //verificacion de CURP


    $verificar_ine = mysqli_query($conexion, "SELECT * FROM administradoresual WHERE curp = '$Curp' ");

    if (mysqli_num_rows($verificar_correo) > 0) {
      echo '
          <script> 
              alert("La CURP ya esta registarda intente de nuevo");
              window. location = "registro.php"
          </script>

      ';
      exit();
    }


    $resultado = mysqli_query($conexion, $consulta);

    //mandamos una notificacion al usuario 
    if ($resultado) {
?>
       <script>
        alert('¡Te has inscripto correctamente!');
        window.location.href = 'login.php';
    </script>
    <?php
    } else {
    ?>
      <script>
        alert('¡Ups, ha ocurrido un error!');
        window.location.href = 'registro.php'; // Puedes cambiar esto según donde quieras redirigir
    </script>"
    <?php
    }
  } else {
    ?>
    "<script>
        alert('¡Por favor, complete los campos!');
        window.location.href = 'registro.php'; // Redirige de nuevo al formulario de registro
    </script>";
<?php
  }
}

?>