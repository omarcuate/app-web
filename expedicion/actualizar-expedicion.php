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
include "../config/conexion.php";
$id     = $_GET["id"];
$expedicion = "SELECT * FROM expedicion WHERE id = '$id'";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosboton.css">
    <link rel="stylesheet" href="css/estilosbotonactualizar.css">
    <link rel="stylesheet" href="estilos/plantilla3.css">
    <link rel="stylesheet" href="estilos/expedicion.css">


    <title>Datos de Expedici&#243;n</title>
</head>

<body>

    <script src="jquery-3.6.1.min.js"></script>
    <script src="selectormultiple.js"></script>
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
            <div id="dvCapturar">


                <?php
                $resultado = mysqli_query($conexion, $expedicion);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>

                    <h1 class="botons">Editar Datos de Expedici&#243;n</h1>
                    <br><br>
                    <div class="form-register">


                        <form action="procesar_actualizar_carreras.php" method="POST">


                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">


                            <div class="row">

                                <div class="col-md-6">
                                    <label class="control-label" for="IdTipoCertificacion">Tipo de Certificaci&#243;n</label>
                                    <br>
                                    <br>
                                    <input id="IdTipoCertificacion" name="idModalidadTitulacion" type="hidden" value="<?php echo $row['idModalidadTitulacion']; ?> " />
                                    <input id="TipoCertificacion" name="modalidadTitulacion" type="hidden" value="<?php echo $row['modalidadTitulacion']; ?> " />
                                    <select id="ddlTipoCertificacion" class="form-control" onchange="AsignarTipoCertificacion(); return false;">


                                        <option hidden value="<?php echo $row['idModalidadTitulacion']; ?> "> <?php echo $row['modalidadTitulacion']; ?></option>
                                        <option value="79">TOTAL</option>
                                        <option value="80">PARCIAL</option>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="IdTipoCertificacion" data-valmsg-replace="true"></span>



                                </div>

                                <div class="col-md-6">

                                    <label class="control-label" for="IdLugarExpedicion">Lugar de Expedici&#243;n</label>
                                    <br>
                                    <br>
                                    <input id="idEntidadFederativa" name="Expedicion_IdEntidadFederativa" type="hidden" value="<?php echo $row['Expedicion_IdEntidadFederativa']; ?>" />
                                    <input id="entidadFederativa" name="Expedicion_NombreEntidadFederativa" type="hidden" value="<?php echo $row['Expedicion_NombreEntidadFederativa']; ?>" />
                                    <select id="ddlLugarExpedicion" class="form-control" onchange="AsignarLugarExpedicion(); return false;">

                                        <option value="<?php echo $row['Expedicion_IdEntidadFederativa']; ?>"> <?php echo $row['Expedicion_NombreEntidadFederativa']; ?></option>

                                        <?php
                                        include 'conexion.php';
                                        $lugares = "SELECT * FROM lugarexpedicion";
                                        $resultado = mysqli_query($conexion, $lugares);

                                        while ($valores = mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $valores['idEntidadFederativa'] . '">' . $valores['EntidadFederativa'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="IdLugarExpedicion" data-valmsg-replace="true"></span>

                                </div>

                            </div>
                            <table>
                                <td style="width : 80%; heigth : 20px"></td>
                                <td style="width : 10%; heigth : 20px"><a href="datos-expedicion.php" class="btn__borrarr">Cancelar</a></td>
                                <td style="width : 10%; heigth : 20px"><a><input name="accion" class="btn__actu" type="submit" value="Actualizar"> </a>
                                </td>
                            </table>
                        </form>
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

<?php
                    $id = $_REQUEST['id'];
                    if (!is_numeric($id)) {
                        header("Location: datos-expedicion.php");
                    }
                }
?>

</body>

</html>