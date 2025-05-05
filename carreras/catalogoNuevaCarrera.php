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
    <link rel="stylesheet" href="css/estilosboton.css">
    <link rel="stylesheet" href="css/estilosbotonactualizar.css">
    <link rel="stylesheet" href="estilos/plantilla3.css">
    <link rel="stylesheet" href="estilos/catalogocarreras.css">
    <script src="select.js"></script>
    <script src="jquery.min.js"></script>
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


                <h2 class="botons">Crear Registro</h2>
                <div class="form-register">
                    <form action="registroCarreras.php" method="post" enctype="multipart/form-data">

                        <br>

                        <center>
                            <table>

                                <td class="horizontal">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="idCarrera "><b>id de la carrera</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" class="form-control text-box single-line" id="idCarrera " name="idCarrera " type="text" autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="NombreCarreraCertificados"><b>Nombre de la Carrera para Certificados</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="NombreCarreraCertificados" name="NombreCarreraCertificados" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="NombreCarreraCertificados" data-valmsg-replace="true"></span>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="calificacionMinimaAprobatoria"><b>Calificaci&#243;n M&#237;nima Aprobatoria (dos decimales)</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="calificacionMinimaAprobatoria" name="calificacionMinimaAprobatoria" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="calificacionMinimaAprobatoria" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="calificacionMaxima"><b>Calificación M&#225;xima (sin decimales)</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="calificacionMaxima" name="calificacionMaxima" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="calificacionMaxima" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="IdTipoPeriodo"><b>Tipo Periodo</b></label>
                                            <input id="IdTipoPeriodo" name="IdTipoPeriodo" type="hidden" value="" />
                                            <input id="TipoPeriodo" name="TipoPeriodo" type="hidden" value="" />
                                            <br><br>
                                            <select class="redondeado" style="width : 540px; heigth : 20px" required="required" id="ddlTipoPeriodo" class="form-control" onchange="AsignarTipoPeriodo(); return false;">
                                                <option value="">--Seleccionar--</option>
                                                <option value="1">SEMESTRE</option>
                                                <option value="2">BIMESTRE</option>
                                                <option value="3">CUATRIMESTRE</option>
                                                <option value="4">TETRAMESTRE</option>
                                                <option value="5">TRIMESTRE</option>
                                                <option value="6">MODULAR</option>
                                                <option value="7">ANUAL</option>
                                            </select>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="IdTipoPeriodo" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="NumeroRVOECertificados"><b>N&#250;mero de RVOE para Certificados</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="NumeroRVOECertificados" name="NumeroRVOECertificados" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="NumeroRVOECertificados" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="FechaExpedicionRVOE"><b>Fecha de Expedici&#243;n del RVOE</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="FechaExpedicionRVOE" name="FechaExpedicionRVOE" type="date" value="" data-role="datepicker" role="combobox" aria-expanded="false" aria-owns="FechaExpedicionRVOE_dateview" autocomplete="off" aria-disabled="false" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="Estatus"><b>Estatus </b></label>
                                            <br><br>
                                            Activo <input checked="checked" class="botons" id="Estatus" name="Estatus" type="radio" value="True">
                                            Inactivo <input checked="checked" class="botons" id="Estatus" name="Estatus" type="radio" value="False">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Estatus" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="horizontal">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="cveCarrera"><b>Clave de la Carrera</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id=" cveCarrera" name="cveCarrera" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="cveCarrera" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="NombreCarreraTitulos"><b>Nombre de la Carrera para Titulos</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="NombreCarreraTitulos" name="NombreCarreraTitulos" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="NombreCarreraTitulos" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="calificacionMinima"><b>Calificación M&#237;nima (sin decimales)</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="calificacionMinima" name="calificacionMinima" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="calificacionMinima" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="ClavePlan"><b>Clave del Plan</b></label>
                                            <br><br>
                                            <input class="redondeado" style="width : 500px; heigth : 20px" id="ClavePlan" name="ClavePlan" required="required" type="text" value="" autocomplete="off">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="ClavePlan" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label" for="IdNivel"><b>Nivel</b></label>
                                                <input id="IdNivel" name="IdNivel" type="hidden" value="" />
                                                <input id="Nivel" name="Nivel" type="hidden" value="" />
                                                <br><br>
                                                <select class="redondeado" style="width : 540px; heigth : 20px" required="required" id="ddlNivel" class="form-control" onchange="AsignarNivel(); return false;">
                                                    <option value="">--Seleccionar--</option>
                                                    <option value="1">DOCTORADO</option>
                                                    <option value="2">ESPECIALIDAD</option>
                                                    <option value="3">TÉCNICO SUPERIOR UNIVERSITARIO</option>
                                                    <option value="4">PROFESIONAL ASOCIADO</option>
                                                    <option value="5">MAESTRÍA</option>
                                                    <option value="6">LICENCIATURA</option>
                                                </select>
                                                <span class="field-validation-valid text-danger" data-valmsg-for="IdNivel" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="NumeroRVOE "><b>N&#250;mero de RVOE para Titulos</b></label>
                                                <br><br>
                                                <input class="redondeado" style="width : 500px; heigth : 20px" id="NumeroRVOE" name="NumeroRVOE" type="text" value="" autocomplete="off">

                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="idAutorizacionReconocimiento"><b>Tipo de Autorización<b></label>
                                                <input id="idAutorizacionReconocimiento" name="idAutorizacionReconocimiento" type="hidden" value="" />
                                                <input id="autorizacionReconocimiento" name="autorizacionReconocimiento" type="hidden" value="" />
                                                <br><br>
                                                <select class="redondeado" style="width : 540px; heigth : 20px" required="required" id="ddlAutorizacion" class="form-control" onchange="AsignarAutorizacion(); return false;">
                                                    <option value="">--Seleccionar--</option>
                                                    <option value="1">RVOE FEDERAL</option>
                                                    <option value="2">RVOE ESTATAL</option>
                                                    <option value="3">AUTORIZACIÓN FEDERAL</option>
                                                    <option value="4">AUTORIZACIÓN ESTATAL</option>
                                                    <option value="5">ACTA DE SESIÓN</option>
                                                    <option value="6">ACUERDO DE INCORPORACIÓN</option>
                                                    <option value="7">ACUERDO SECRETARIAL SEP</option>
                                                    <option value="8">DECRETO DE CREACIÓN</option>
                                                    <option value="9">OTRO</option>
                                                </select>

                                                <span class="field-validation-valid text-danger" data-valmsg-for="idAutorizacionReconocimiento" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <br><br><br><br>


                                </td>

                </div>
                </table>
                </center>
                <br>
                <br>
                <table>
                    <td style="width : 80%; heigth : 20px"></td>
                    <td style="width : 10%; heigth : 20px"> <a href="catalogoCarreras.php" class="btn__borrarr">Cancelar</a></td>
                    <td style="width : 10%; heigth : 20px">
                        <a><input name="accion" class="btn__actu" type="submit" value="Guardar Cambios" href="catalogoCarreras.php"> </a>
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