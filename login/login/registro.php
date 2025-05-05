<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="..\estilos/estilologin.css">
  <title>REGISTRO UAL</title>
</head>

<body>

  <body>
    <div class="form-register">
      <img class="logo" src="..\media/UA.png" alt="">

      <form action="registrobe.php" method="post" enctype="multipart/from-data">

        <input class="controls" type="text" name="apellidoP" placeholder="Apellido Paterno">
        <input class="controls" type="text" name="apellidoM" placeholder="Apellido Materno">
        <input class="controls" type="text" name="nombres" placeholder="Nombres">
        <input class="controls" type="text" name="curp" placeholder="CURP">
        <input class="controls" type="text" name="ine" placeholder="CI INE">
        <input class="controls" type="text" name="email" placeholder="Correos">
        <input class="controls" type="password" name="clave" placeholder="Contrase&ntilde;a">

        <input class="botons" type="submit" name="register" value="Enviar">
        <img class="logo2" src="..\media/ssl.png" alt="">


        <p><a href="login.php">Inicio de Sesion</a></p>
      </form>
    </div>

  </body>
</body>

</html>