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
$IdAsignatura = $_GET["IdAsignatura"];
$asignaturas = "SELECT * FROM asignaturas WHERE IdAsignatura = '$IdAsignatura'";
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
    <link rel="stylesheet" href="estilos/catalogocarreras.css">
    <script src="select.js"></script>
    <script src="jquery.min.js"></script>

    <title>Cat&#225;logo de asignaturas</title>
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

                <table>
                    <?php
                    $resultado = mysqli_query($conexion, $asignaturas);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>

                        <h2 class="botons">Editar Registro</h2>
                        <div class="form-register">
                            <form action="procesar_actualizar_Asignatuas.php" method="POST">
                                <input type="hidden" name="IdAsignatura" value="<?php echo $row['IdAsignatura']; ?>">

                                <td class="horizontal">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="control-label" for="IdAsignatura"><b>Id de la Asignatura</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" class="form-control text-box single-line" name="IdAsignatura" type="text" value="<?php echo $row['IdAsignatura']; ?> " disabled>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="IdAsignatura" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Nombre"><b>Nombre de la Asignatura</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="Nombre" name="Nombre" required="required" type="text" value="<?php echo $row['Nombre']; ?>" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Nombre" data-valmsg-replace="true"></span>

                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="IdTipoAsignatura"><b>Tipo de Asignatura</b></label>
                                            <input id="IdTipoAsignatura" name="IdTipoAsignatura" type="hidden" value="<?php echo $row['IdTipoAsignatura']; ?>" />
                                            <input id="TipoAsignatura" name="TipoAsignatura" type="hidden" value="<?php echo $row['TipoAsignatura']; ?>" />
                                            <br><br>
                                            <select class="redondeado" style="width : 540px; heigth : 20px" required="required" id="dllTipoAsignatura" class="form-control" onchange="AsignarTipoAsignatura(); return false;">
                                                <option hidden value="<?php echo $row['IdTipoAsignatura']; ?> "> <?php echo $row['TipoAsignatura']; ?></option>

                                                <option value="">--Seleccionar--</option>
                                                <option value="">--Seleccionar--</option>
                                                <option value="263">OBLIGATORIA</option>
                                                <option value="264">OPTATIVA</option>
                                                <option value="265">ADICIONAL</option>
                                            </select>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="IdTipoPeriodo" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="control-label" for="Estatus"><b>Estatus</b></label>
                                            <br><br>
                                            Activo <input class="botons" id="Estatus" name="Estatus" <?php if ($row['Estatus'] == "True") {
                                                                                                            echo "checked";
                                                                                                        } ?> type="radio" value="True">

                                            Inactivo <input class="botons" id="Estatus" name="Estatus" <?php if ($row['Estatus'] == "False") {
                                                                                                            echo "checked";
                                                                                                        } ?> type="radio" value="False">
                                        </div>
                                    </div>
                                </td>


                                <td class="horizontal">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="ClaveAsignatura"><b>Clave de la Asignatura</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id=" ClaveAsignatura" name="ClaveAsignatura" required="required" type="text" value="<?php echo $row['ClaveAsignatura']; ?>" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="ClaveAsignatura" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="TotalCreditos"><b>Cr&#233;ditos</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="TotalCreditos" name="TotalCreditos" required="required" type="text" value="<?php echo $row['TotalCreditos']; ?>" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="TotalCreditos" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6" style="width:5px;">
                                        <div class="form-group">
                                            <label class="control-label" for="CarreraId">Carrera</label>
                                            <br><br>

                                            <select class="redondeado" style="width : 340px; heigth : 20px" required="required" name="CarreraId" class="form-control">

                                                <option hidden value="<?php echo $row['CarreraId']; ?> "> <?php echo " Clave:" . $row['CarreraId'] ?></option>
                                                <?php
                                                include '../config/conexion.php';
                                                $carrerass = mysqli_query($conexion, "SELECT idCarrera, NombreCarreraTitulos, ClavePlan, cveCarrera FROM carreras");

                                                while ($datos = mysqli_fetch_array($carrerass)) {
                                                ?>

                                                    <option value="<?php echo $datos['idCarrera']; ?>"> <?php echo " Clave:" . $datos['cveCarrera'] . " - " . $datos['NombreCarreraTitulos'] . ", Plan:" . $datos['ClavePlan']; ?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <br><br><br><br><br>
                                </td>
                        </div>
                </table>
                </center>
                <br>
                <br>
                <table>
                    <td style="width : 80%; heigth : 20px"></td>
                    <td style="width : 10%; heigth : 20px"> <a href="catalogoAsignatuas.php" class="btn__borrarr">Cancelar</a></td>
                    <td style="width : 10%; heigth : 20px">
                        <a><input name="accion" class="btn__actu" type="submit" value="Actualizar" href="catalogoAsignatuas.php"> </a>
                        
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
                        $CarreraId = $_REQUEST['IdAsignatura'];
                        if (!is_numeric($IdAsignatura)) {
                            header("Location: catalogoAsignatuas.php");
                        }
                    }


?>
</body>

</html>