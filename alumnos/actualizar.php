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
$id = $_GET["id"];
$alumnosual = "SELECT * FROM profesionista WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="media/ual.png" />
    <link href="plantilla.css" rel="stylesheet" />
    <link rel="stylesheet" href="cssalumnos/estilosboton.css">
    <link rel="stylesheet" href="cssalumnos/estilosbotonactualizar.css">

    <link rel="stylesheet" href="estilosalumnos/plantillaalu.css">
    <title>Cat&#225;logo de Carreras</title>


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
                    $resultado = mysqli_query($conexion, $alumnosual);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>

                        <h2 class="botons">Editar Registro</h2>
                        <div class="form-register">
                            <form action="procesar_actualizar.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">


                                <td class="horizontal">
                                    <label class="control-label">Foto del Alumno</label>

                                    <br><br>
                                    <center>
                                        <img style="width:200px; height:200px;" src="<?php echo $row['archivo']; ?>">
                                    </center>
                                    <input type="file" name="archivo" value="<?php echo $row['archivo']; ?>">
                                    <br>
                                    <br>
                                    <label class="control-label">Firma Autógrafa</label>
                                    <center>
                                        <img style="width:200px; height:200px;" src="<?php echo $row['firma']; ?>">
                                    </center>
                                    <input type="file" name="firma" value="<?php echo $row['firma']; ?>">

                                </td>

                                <td class="horizontal">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="control-label" for="NumeroControl">Número de Control</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" type="text" name="NumeroControl" value="<?php echo $row['NumeroControl']; ?>">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="NumeroControl" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="CURP">CURP</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" type="text" name="CURP" value="<?php echo $row['CURP']; ?>" required="required">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="CURP" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Nombre">Nombre(s)</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" type="text" name="Nombre" value="<?php echo $row['Nombre']; ?>">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Nombre" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="PrimerApellido">Primer Apellido</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" type="text" name="PrimerApellido" value="<?php echo $row['PrimerApellido']; ?>">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="PrimerApellido" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="SegundoApellido">Segundo Apellido</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" type="text" name="SegundoApellido" value="<?php echo $row['SegundoApellido']; ?>">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="SegundoApellido" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="horizontal">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="IdGenero">Genero</label>
                                            <br><br>
                                            <select class="redondeado" style="width : 340px; heigth : 20px" required="required" id="IdGenero" name="IdGenero" class="form-control">

                                                <option hidden value="<?php echo $row['IdGenero']; ?> "> <?php echo $row['IdGenero']; ?></option>
                                                <option>--SELECT--</option>
                                                <option value="MUJER" id="250">MUJER</option>
                                                <option value="HOMBRE" id="251">HOMBRE</option>
                                            </select>

                                            <span class="field-validation-valid text-danger" data-valmsg-for="IdGenero" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Fecha">Fecha de Nacimiento</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" type="date" name="Fecha" value="<?php echo $row['Fecha']; ?>">

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
                                                include 'conexion.php';
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

                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="CorreoElectronico">CorreoElectrónico</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="CorreoElectronico" name="CorreoElectronico" type="text" value="<?php echo $row['CorreoElectronico']; ?> ">

                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="control-label" for="Estatus">Estatus</label>
                                            <br><br>
                                            Activo <input class="botons" id="Estatus" name="Estatus" <?php if ($row['Estatus'] == "Activo") {
                                                                                                            echo "checked";
                                                                                                        } ?> type="radio" value="Activo">

                                            Inactivo <input class="botons" id="Estatus" name="Estatus" <?php if ($row['Estatus'] == "Inactivo") {
                                                                                                            echo "checked";
                                                                                                        } ?> type="radio" value="Inactivo">


                                        </div>
                                    </div>

                                </td>

                        </div>

                </table>
                </center>
                <br>
                <br>
                <table>
                    <td style="width : 80%; heigth : 20px"></td>
                    <td style="width : 10%; heigth : 20px"> <a href="cataloogoalumnos.php" class="btn__borrarr">Cancelar</a></td>
                    <td style="width : 10%; heigth : 20px">
                        <a><input name="accion" class="btn__actu" type="submit" value="Actualizar" href="cataloogoalumnos.php"> </a>
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
                            header("Location: cataloogoalumnos.php");
                        }
                    }


?>



</body>

</html>