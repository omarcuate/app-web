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
    <link rel="stylesheet" href="estilos/plantilla3.css">
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


                    <li><a href=""> <img src="media/docs.png" alt="" width="15px"> Certificación</a>
                        <ul class="submenu">
                            <li><a href="..\certificado/emitircertificado.php"> <img src="media/anadir.png" width="15px"> Emitir Certificado 3.0</a></li>
                            <li><a href="..\portalCertificados/portalCertificados.php"> <img src="media/calen.png" width="15px"> Portal de Certificados</a></li>
                        </ul>
                    </li>


                    <li><a href=""> <img src="media/docs.png" alt="" width="15px"> Titulación</a>
                        <ul class="submenu">
                            <li><a href="..\titulo/emitirtitulo.php"> <img src="media/anadir.png" width="15px"> Emitir Título</a></li>
                            <li><a href="..\portalTitulos/portalTitulos.php"> <img src="media/calen.png" width="15px"> Portal de Titulos</a></li>


                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="navegacion">
            <ul>

                <li><a href="..\inicio/inicio.php"> <img src="media/icoMenu.png" width="45px"></a></li>
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
        <h2>Generación de Título Electrónico</h2>
        <br />
        <div class="container">
            <form action="#">
                <h3>Datos del Profesionista</h3>
                <br><br>
                <section>
                    <form autocomplete="off">
                        <div class="pat">
                            <input type="text" name="q" placeholder="Escribe el no. de Control, CURP o Nombre para buscar el Profesionista....">
                        </div>
                    </form>
                </section>
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Curp</span>
                            <input type="text" name="Curp" disabled type="text" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Primer Apellido</span>
                            <input type="apellido" name="Primer Apellido" disabled type="text" value="">
                        </div>
                        <div class="fat">
                            <span class="details">correo </span>
                            <input type="email" name="correo" disabled type="text" value="">
                        </div>
                    </div>
                    <div class="file">
                        <div class="fat">
                            <span class="details">Nombre</span>
                            <input type="text" name="Nombre" disabled type="text" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Segundo Apellido</span>
                            <input type="text" name="Segundo Apellido" disabled type="text" value="">
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <br>

        <!-- Datos del Título -->
        <div class="container">
            <h3>Datos del Título</h3>
            <br>
            <form action="#">
                <div class="">
                    <div class="folio">
                        <span class="details">Folio</span>
                        <br>
                        <input type="text" name="folio" type="text" value="">

                    </div>
                    <br>
                    <h4>Datos de la Institución</h4>
                    <div class="dat">
                        <div class=" file">
                            <div class="fat">
                                <span class="details">Clave de la institución</span>
                                <input type="text" name="Clave de la Institucion" disabled readonly="readonly" type="text" value="150852">
                            </div>
                        </div>

                        <div class=" file">
                            <div class="fat">
                                <span class="details">Nombre de la Institución</span>
                                <input type="text" name="Nombre de la Institucion" disabled readonly="readonly" type="text" value="UNIVERSIDAD ALFA LAMBDA">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>

        <!-- Datos de la Carrera -->
        <div class="container">
            <h3>Datos de Expedición del Título</h3>
            <form action="#">
                <div class="cred">
                    <div class="fart">
                        <div>
                            <span class="details">RVOE</span>
                            <input type="text" name="RVOE" readonly="readonly" disabled type="text" value="">
                        </div>
                        <div class="file">
                            <div class="fa">
                                <br>
                                <span class="details">Fecha de Inicio de la Carrera</span>
                                <input type="date" name="Fecha de Inicio de la Carrera" value="">
                            </div>
                        </div>

                    </div>

                    <div class="fart">
                        <span class="details">Clave</span>
                        <input type="text" name="Clave" readonly="readonly" disabled type="text" value="">
                    </div>

                    <div class="fart">
                        <div>
                            <span class="details">Nombre de la Carrera</span>
                            <input type="text" name="Nombre de la Carrera" readonly="readonly" disabled type="text" value="">
                        </div>
                        <div class="file">
                            <br>
                            <div class="fa">
                                <span class="details">Fecha de Terminación de la Carrera</span>
                                <input type="date" name="Fecha de Terminación de la Carrera" value="">
                            </div>
                        </div>

                    </div>
                    <div class="fart">
                        <span class="details">Autorización Reconocimiento </span>
                        <select class="opc1" name="text" value="" disabled>
                            <option value="">--Seleccionar--</option>
                            <option value="1">RVOE FEDERAL</option>
                            <option value="2">RVOE ESTATAL</option>
                            <option value="3">AUTORIZACI&#211;N FEDERAL</option>
                            <option value="4">AUTORIZACI&#211;N ESTATAL</option>
                            <option value="5">ACTA DE SESI&#211;N</option>
                            <option value="6">ACUERDO DE INCORPORACI&#211;N</option>
                            <option value="7">ACUERDO SECRETARIAL SEP</option>
                            <option value="8">DECRETO DE CREACI&#211;N</option>
                            <option value="9">OTRO</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>
        <br>
        <!-- Antecedentes -->
        <div class="container">
            <form action="#">
                <h3>Antecedentes</h3>
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Nivel de Estudios Antecedentes</span>
                            <select class="opc1" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="1">MAESTR&#205;A</option>
                                <option value="2">LICENCIATURA</option>
                                <option value="3">T&#201;CNICO SUPERIOR UNIVERSITARIO</option>
                                <option value="4">BACHILLERATO</option>
                                <option value="5">EQUIVALENTE A BACHILLERATO</option>
                                <option value="6">SECUNDARIA</option>
                            </select>
                        </div>

                        <div class="fat">
                            <span class="details">Número de Cédula</span>
                            <input type="apellido" name="Número de Cédula" type="text" value="">
                        </div>
                    </div>

                    <div class="file">
                        <div class="fat">
                            <span class="details">Nombre de la Institución de Procedencia</span>
                            <input type="text" name="Nombre de la Institución de Procedencia" type="text" value="">
                        </div>

                        <div class="fart">
                            <span class="details">Entidad Federativa de la Institución de Procedencia</span>
                            <select class="opc1" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="01">AGUASCALIENTES</option>
                                <option value="02">BAJA CALIFORNIA</option>
                                <option value="03">BAJA CALIFORNIA SUR</option>
                                <option value="04">CAMPECHE</option>
                                <option value="05">COAHUILA DE ZARAGOZA</option>
                                <option value="06">COLIMA</option>
                                <option value="07">CHIAPAS</option>
                                <option value="08">CHIHUAHUA</option>
                                <option value="09">CIUDAD DE M&#201;XICO</option>
                                <option value="10">DURANGO</option>
                                <option value="11">GUANAJUATO</option>
                                <option value="12">GUERRERO</option>
                                <option value="13">HIDALGO</option>
                                <option value="14">JALISCO</option>
                                <option value="15">M&#201;XICO</option>
                                <option value="16">MICHOAC&#193;N DE OCAMPO</option>
                                <option value="17">MORELOS</option>
                                <option value="18">NAYARIT</option>
                                <option value="19">NUEVO LE&#211;N</option>
                                <option value="20">OAXACA</option>
                                <option value="21">PUEBLA</option>
                                <option value="22">QUER&#201;TARO</option>
                                <option value="23">QUINTANA ROO</option>
                                <option value="24">SAN LUIS POTOS&#205;</option>
                                <option value="25">SINALOA</option>
                                <option value="26">SONORA</option>
                                <option value="27">TABASCO</option>
                                <option value="28">TAMAULIPAS</option>
                                <option value="29">TLAXCALA</option>
                                <option value="30">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                                <option value="31">YUCAT&#193;N</option>
                                <option value="32">ZACATECAS</option>
                                <option value="33">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            Aplica<input type="radio" name="boton">
                            No Aplica<input type="radio" name="boton" value="">
                        </div>

                    </div>
                    <div class="file">
                        <div class="fa">
                            <span class="details">Fecha de Inicio de la Carrera</span>
                            <input type="date" name="Fecha de Inicio de la Carrera" value="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <!--Datos de Expedición del Título-->
        <div class="container">
            <h3>Datos de Expedición del Título</h3>
            <form action="#">
                <div class="cred">
                    <div class="fart">
                        <div class="fa">
                            <span class="details">Fecha de Inicio de la Carrera</span>
                            <input type="date" name="Fecha de Inicio de la Carrera" value="">
                        </div>
                    </div>
                    <div class="fart">
                        <span class="details">Modalidad Titulacion</span>
                        <select class="opc1" name="text" value="">
                            <option value="">--Seleccionar--</option>
                            <option value="1">POR TESIS</option>
                            <option value="2">POR PROMEDIO</option>
                            <option value="3">POR ESTUDIOS DE POSGRADOS</option>
                            <option value="4">POR EXPERIENCIA LABORAL</option>
                            <option value="5">POR CENEVAL</option>
                            <option value="6">OTRO</option>
                        </select>
                    </div>

                    <div class="fart">
                        <span class="details">Lugar de Expedición</span>
                        <select class="opc1" name="text" value="">
                            <option value="">--Seleccionar--</option>
                            <option value="01">AGUASCALIENTES</option>
                            <option value="02">BAJA CALIFORNIA</option>
                            <option value="03">BAJA CALIFORNIA SUR</option>
                            <option value="04">CAMPECHE</option>
                            <option value="05">COAHUILA DE ZARAGOZA</option>
                            <option value="06">COLIMA</option>
                            <option value="07">CHIAPAS</option>
                            <option value="08">CHIHUAHUA</option>
                            <option value="09">CIUDAD DE M&#201;XICO</option>
                            <option value="10">DURANGO</option>
                            <option value="11">GUANAJUATO</option>
                            <option value="12">GUERRERO</option>
                            <option value="13">HIDALGO</option>
                            <option value="14">JALISCO</option>
                            <option value="15">M&#201;XICO</option>
                            <option value="16">MICHOAC&#193;N DE OCAMPO</option>
                            <option value="17">MORELOS</option>
                            <option value="18">NAYARIT</option>
                            <option value="19">NUEVO LE&#211;N</option>
                            <option value="20">OAXACA</option>
                            <option value="21">PUEBLA</option>
                            <option value="22">QUER&#201;TARO</option>
                            <option value="23">QUINTANA ROO</option>
                            <option value="24">SAN LUIS POTOS&#205;</option>
                            <option value="25">SINALOA</option>
                            <option value="26">SONORA</option>
                            <option value="27">TABASCO</option>
                            <option value="28">TAMAULIPAS</option>
                            <option value="29">TLAXCALA</option>
                            <option value="30">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                            <option value="31">YUCAT&#193;N</option>
                            <option value="32">ZACATECAS</option>
                            <option value="33">EXTRANJERO</option>
                        </select>
                    </div>
                </div>
                <div class="dat">
                    <div class="fil">
                        <div>
                            <span class="details">Fecha del Exámen Profesional</span><br><br>
                            Aplica<input type="radio" name="boton">
                            No Aplica<input type="radio" name="boton" value="">
                        </div>
                    </div>

                    <div class="fil">
                        <div>
                            <span class="details">Fecha Exención del Exámen Profesional</span><br><br>
                            Aplica<input type="radio" name="boton">
                            No Aplica<input type="radio" name="boton" value="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <!-- Datos Generales de Certificado -->
        <div class="container">
            <h3>Datos del Servicio Social</h3>
            <form action="#">
                <div class="dat">
                    <div class=" file">
                        <div class="fat">
                            <span class="details">¿Cumplio Servicio Social?</span>
                            <select class="opc1" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="1">Cumplió</option>
                                <option value="0">No cumplió</option>
                            </select>
                        </div>
                    </div>

                    <div class=" file">
                        <div class="fat">
                            <span class="details">Fundamento Legal del Servicio Social</span>
                            <select class="opc1" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="1">ART. 52 LRART. 5 CONST</option>
                                <option value="2">ART. 55 LRART. 5 CONST</option>
                                <option value="3">ART. 91 RLRART. 5 CONST</option>
                                <option value="4">ART. 10 REGLAMENTO PARA LA PRESTACI&#211;N DEL SERVICIO SOCIAL DE LOS ESTUDIANTES DE LAS INSTITUCIONES DE EDUCACI&#211;N SUPERIOR EN LA REP&#218;BLICA MEXICANA</option>
                                <option value="5">NO APLICA</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
        <br>
        <!-- Datos del Responsable -->
        <div class="container">
            <h3>Datos del Responsable</h3>
            <form action="#">
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Curp</span>
                            <input type="text" name="Curp" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Primer Apellido</span>
                            <input type="text" name="Primer Apellido" value="">
                        </div>
                        <div class="fat">
                            <span class="details">abrTitulo</span>
                            <input type="text" name="abrTitulo" value="">

                        </div>
                    </div>


                    <div class="file">
                        <div class="fat">
                            <span class="details">Nombre</span>
                            <input type="text" name="Nombre" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Segundo Apellido</span>
                            <input type="text" name="Segundo Apellido" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Cargo</span>
                            <select class="opc1" name="text" value="">
                                <option value="1">--Seleccionar--</option>
                                <option value="2">DIRECTOR</option>
                                <option value="3">SUBDIRECTOR</option>
                                <option value="4">RECTOR</option>
                                <option value="5">VICERRECTOR</option>
                                <option value="6">RESPONSABLE DE EXPEDICI&#211;N</option>
                                <option value="7">SECRETARIO GENERAL</option>
                                <option value="8">AUTORIDAD LOCAL</option>
                                <option value="9">AUTORIDAD FEDERAL</option>
                                <option value="10">DIRECTOR GENERAL</option>
                                <option value="11">RECTOR GENERAL</option>
                            </select>
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <br> <br>
        <div class="">
            <div class="">
                <button class="button" value="generar" name="button">Generar Titulo..</button>
            </div>
        </div>
        <br> <br>





















































































        <hr>




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