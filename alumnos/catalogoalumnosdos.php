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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosalumnos/plantillaalu.css">
    <link rel="stylesheet" href="cssalumnos/estilosboton.css">
    <title>menu</title>
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


                <h2 class="botons">Alumnos</h2>
                <div class="form-register">
                    <form action="registroalumnos.php" method="post" enctype="multipart/form-data">

                        <br>

                        <center>
                            <table>
                                <td class="horizontal">
                                    <label class="control-label">Foto del Alumno</label>
                                    <br><br>
                                    <center>
                                        <img id="img-upload-Foto" style="width:200px; height:200px;" src="media/usuario.png">
                                    </center>
                                    <input type="file" id="archivo" name="archivo" accept=".png,.jpeg,.jpg" required>
                                    <br>
                                    <br>
                                    <label class="control-label">Firma Autógrafa</label>
                                    <center>
                                        <img id="img-upload-Foto" style="width:200px; height:200px;" src="media/firma.png">
                                    </center>
                                    <input type="file" id="firma" name="firma" accept=".png,.jpeg,.jpg" required>

                                </td>
                                <td class="horizontal">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="control-label" for="NumeroControl">Número de Control</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="NumeroControl" name="NumeroControl" type="text" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="NumeroControl" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="CURP">CURP</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="CURP" name="CURP" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="CURP" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Nombre">Nombre(s)</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="Nombre" name="Nombre" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Nombre" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="PrimerApellido">Primer Apellido</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="PrimerApellido" name="PrimerApellido" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="PrimerApellido" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="SegundoApellido">Segundo Apellido</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="SegundoApellido" name="SegundoApellido" type="text" value="" autocomplete="off">
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
                                                <option value="">--Seleccionar--</option>
                                                <option value="Mujer" id="250">MUJER</option>
                                                <option value="Hombre" id="251">HOMBRE</option>
                                            </select>

                                            <span class="field-validation-valid text-danger" data-valmsg-for="IdGenero" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Fecha">Fecha de Nacimiento</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" name="Fecha" type="date">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Fecha" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="col-md-6" style="width:5px;">
                                        <div class="form-group">
                                            <label class="control-label" for="CarreraId">Carrera</label>
                                            <br><br>

                                            <select class="redondeado" style="width : 340px; heigth : 20px" required="required" name="CarreraId" class="form-control">

                                                <option value="">--Seleccionar--</option>
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

                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="CorreoElectronico">Correo Electrónico</label>
                                            <br><br>
                                            <input class="redondeado" style="width : 300px; heigth : 20px" class="form-control text-box single-line" id="CorreoElectronico" name="CorreoElectronico" type="text" value="" autocomplete="off">

                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Estatus">Estatus</label>
                                            <br><br>
                                            Activo <input class="botons" checked="checked" id="Estatus" name="Estatus" type="radio" value="Activo" required>
                                            Inactivo <input class="botons" id="Estatus" name="Estatus" type="radio" value="Inactivo" required>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Estatus" data-valmsg-replace="true"></span>
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
                    <td style="width : 10%; heigth : 20px"> <a href="cataloogoalumnos.php" class="btn__delete">Cancelar</a></td>
                    <td style="width : 10%; heigth : 20px">
                        <a><input name="accion" class="btn__update" type="submit" value="Guardar Cambios" href="cataloogoalumnos.php"> </a>
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



    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 0);
        })
    </script>



</body>

</html>