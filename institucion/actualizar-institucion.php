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
include("../config/conexion.php");
$id     = $_GET["id"];
$datosinstitucion = "SELECT * FROM datosinstitucion WHERE id= '$id'";
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
    <link rel="stylesheet" href="estilos/inst.css">


    <title>Datos de la Instituci&#243;n - Certificación y Titulación Electrónica</title>
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
            <div id="dvCapturar">


                <?php
                $resultado = mysqli_query($conexion, $datosinstitucion);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>

                    <h1 class="botons">Editar Registro</h1>
                    <div class="form-register">
                        <form action="procesar_actualizar_institucion.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <h4>Datos para certificados electrónicos</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="IdNombreInstitucion_Certificacion">Clave de la Instituci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="IdNombreInstitucion_Certificacion"  name="IdNombreInstitucion_Certificacion" type="text" value="<?php echo $row['IdNombreInstitucion_Certificacion']; ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="NombreInstitucion_Certificacion">Nombre de la Instituci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="NombreInstitucion_Certificacion"  name="NombreInstitucion_Certificacion" type="text" value="<?php echo $row['NombreInstitucion_Certificacion']; ?>" />
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="IdCampus">Clave del Campus</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="IdCampus" name="IdCampus" type="text" value="<?php echo $row['IdCampus']; ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Campus">Nombre del Campus</label>
                                    <br>
                                    <br>


                                    <input class="contenedor" id="Campus" name="Campus" type="text" value="<?php echo $row['Campus']; ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="IdEntidad_Cerificacion">Identificador de la Instituci&#243;n Electr&#243;nico de Certificaci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="IdEntidad_Cerificacion" name="IdEntidad_Cerificacion" type="text" value="<?php echo $row['IdEntidad_Cerificacion']; ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Entidad_Cerificacion">Nombre del Identificador de la Instituci&#243;n que emite el Documento Electr&#243;nico de Certificaci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="Entidad_Cerificacion" name="Entidad_Cerificacion" type="text" value="<?php echo $row['Entidad_Cerificacion']; ?>" />
                                </div>

                            </div>
                            <hr />
                            <h4>Datos para titulos electrónicos</h4>
                            <div class="row">

                                <div class="col-md-6">
                                    <label class="control-label" for="IdNombreInstitucion_Titulacion">Clave de la Instituci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="IdNombreInstitucion_Titulacion" name="IdNombreInstitucion_Titulacion" type="text"  value="<?php echo $row['IdNombreInstitucion_Titulacion']; ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="NombreInstitucion_Titulacion">Nombre de la Instituci&#243;n</label>
                                    <br>
                                    <br>

                                    <input class="contenedor" id="NombreInstitucion_Titulacion" name="NombreInstitucion_Titulacion" type="text"  value="<?php echo $row['NombreInstitucion_Titulacion']; ?>" />
                                </div>
                            </div>
                            <hr />


                            <div class="row">

                                <div class="col-md-6">
                                    <label class="control-label" for="IdEntidadFederativa">Entidad Federativa</label>
                                    <br>
                                    <br>

                                    <input id="IdEntidadFederativa" name="IdEntidadFederativa" type="hidden" value="<?php echo $row['IdEntidadFederativa']; ?> " />
                                    <input id="EntidadFederativa" name="EntidadFederativa" type="hidden" value="<?php echo $row['EntidadFederativa']; ?> " />
                                    <select id="ddlEntidades" class="select" onchange="AsignarEntidadFederativa(); return false;">
                                        <option hidden value="<?php echo $row['IdEntidadFederativa']; ?>"> <?php echo $row['EntidadFederativa']; ?></option>
                                        <option value=""></option>

                                        <?php
                                        include 'conexion.php';
                                        $lugares = "SELECT * FROM lugarexpedicion";
                                        $resultado = mysqli_query($conexion, $lugares);

                                        while ($valores = mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $valores['idEntidadFederativa'] . '">' . $valores['EntidadFederativa'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                    </div>
            </div>
            <table>
                <td style="width : 80%; heigth : 20px"></td>
                <td style="width : 10%; heigth : 20px"> <a href="datos-institucion.php" class="btn__borrarr">Cancelar</a></td>
                <td style="width : 10%; heigth : 20px">
                    <a><input name="accion" class="btn__actu" type="submit" value="Actualizar"> </a>
                </td>
            </table>
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
            </form>
    </section>

<?php
                    $id = $_REQUEST['id'];
                    if (!is_numeric($id)) {
                        header("Location: datos-institucion.php");
                    }
                }
?>

</script>
<script src="jquery.min.js"></script>
<script src="selectormultiple.js"></script>
</body>

</html>