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
require 'consultasExpedicion.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="media/ual.png" />
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="estilos/plantilla3.css">
    <title>Datos de Expedici&#243;n</title>
</head>

<body>
<header>
        <div>

            <nav class="navegacion">
                <ul class="menu">
                    }

                    <li><a href=""> <img src="media/lista.png" alt="" width="15px"> Catálogo </a>
                        <ul class="submenu">
                            <li><a href="..\institucion/datos-institucion.php"> <img src="media/banco.png" width="15px"> Datos de la Institución</a></li>
                            <li><a href="..\expedicion/datos-expedicion.php"> <img src="media/mapa.png" width="15px"> Datos de Expedición</a></li>
                            <li><a href="..\carreras/catalogocarreras.php"> <img src="media/menu.png" width="15px"> Carreras</a></li>
                            <li><a href="..\asignaturas/catalogoAsignatuas.php"> <img src="media/libro.png" width="15px"> Asignaturas</a></li>
                            <li><a href="..\alumnos/cataloogoalumnos.php"> <img src="media/grupo.png" width="15px"> Alumnos</a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
      

        <nav class="navegacion">

            <div>
                <ul class="menu2">
                    <li><a href="..\perfil/editarperfil.php"> <img src="media/usuario.png" alt="" width="15px"> Mi perfil</a></li>
                    <li><a href="..\ayuda/ayuda.php"> <img src="media/nube.png" alt="" width="15px"> Ayuda</a></li>
                    <li><a href="..\login/login/salir.php"> <img src="media/cerrar.png" alt="" width="15px"> Cerrar sesión</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <section class="zona1">
        <div class="container body-content">
            <div id="dvCapturar"><br>
                <h2 class="botons">Datos de Expedici&#243;n</h2>

                <br>


                <fieldset>
                    <legend>Datos</legend>
                    <br>

                    <table>
                        <!--encabesado de la tabla-->
                        <thead>
                            <tr class="head">
                                <th>IdTipoCertificacion</th>
                                <th>TipoCertificacion</th>
                                <th>idEntidadFederativa</th>
                                <th>idEntidadFederativa</th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $row) { ?>

                                <tr>
                                    <td><?php echo $row['idModalidadTitulacion']; ?></td>
                                    <td><?php echo $row['modalidadTitulacion']; ?></td>
                                    <td><?php echo $row['Expedicion_IdEntidadFederativa']; ?></td>
                                    <td><?php echo $row['Expedicion_NombreEntidadFederativa']; ?></td>



                                    <td><a href="actualizar-expedicion.php?id=<?php echo $row['id']; ?>" class="btn__update"><img class=imgButton src="media/edit.png"> Editar</a>

                                        <a href="eliminarExpedicion.php?id=<?php echo $row['id']; ?>" class="btn__delete"><img class=imgButton src="media/delete.png"> Eliminar</a>
                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>

                    </table>

                </fieldset>




                <br>
                <hr>
                <br>

                <footer class="pie-pagina">
                    <div class="grupo-1">
                        <div class="box">
                            <figure>
                                <img src="media/ual.png">
                                <small>&copy; 2022 - Software de Certificados y Titulos Profesionales Electrónicos. V1.0</small>

                            </figure>
                        </div>
                        <div class="tex2">

                            <p><small>Teléfonos:01 557 294 64 77 / 01 735 120 52 25
                                    <br>
                                    Lunes a Viernes de 9am a 5pm
                                </small></p>

                        </div>
                    </div>
                </footer>


    </section>



    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 0);
        })
    </script>
</body>

</html>