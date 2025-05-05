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
    <link rel="stylesheet" href="estilos/plantilla2.css">
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
        <h2>Crear Certificado Electrónico</h2>
        <br />
        <div class="container">
            <form action="#">
                <span>Datos del Alumno</span>
                <br><br>
                <section>
                    <form autocomplete="off">
                        <div class="pat">
                            <input type="text" name="q" placeholder="Escribe el no. de Control, CURP o Nombre para buscar el Alumno...">
                        </div>
                    </form>
                </section>

                <br> <br> <br>

                <div class="user-details">

                    <div class="">
                        <center>
                            <img style="width:200px; height:200px;" />
                        </center>


                        <br />
                        <center>
                            <img style="width:200px; height:200px;" />
                        </center>

                    </div>
                    <div class="imput-box">

                        <div class="fat">
                            <span class="details">Número Control</span>
                            <input type="text" name="Número Control" value="">
                        </div>

                        <div class="fat">Nombre</span>
                            <input type="text" name="Nombre" value="">
                        </div>

                        <div class="fat">
                            <span class="details">Segundo apellido</span>
                            <input type="text" name="Segundo apellido" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Fecha de nacimiento</span>
                            <input type="date" name="fecha" value="">
                            <span class="text">Campo Requerido </span>
                        </div>
                    </div>
                    <div class="imput-box">

                        <div class="fat">
                            <span class="details">Curp</span>
                            <input type="text" name="Curp" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Nombre Primer Apellido</span>
                            <input type="text" name="Nombre Primer Apellido">
                        </div>
                        <div class="opc">
                            <span class="details">Genero</span>
                            <select class="opc" name="menu" value="">
                                <option value="1">--Seleccionar--</option>
                                <option value="2">Hombre</option>
                                <option value="3">Mujer</option>
                            </select>
                        </div>


                    </div>
                </div>
            </form>


        </div>
        <br />
        <!-- Datos Generales de Certificado -->
        <div class="container">
            <form action="#">
                <span>Datos Generales de Certificado</span>
                <br> <br>
                <hr>
                <br> <br>
                <div class="folio">
                    <div class="fsolio">
                        <span class="details">Folio</span>
                        <br>
                        <input type="text" name="folio" value="">

                    </div>
                </div>
                <br> <br>
                <hr>
                <br>
                <span class="">Datos de la Institucion</span>
                <br> <br>
                <div class="dat">

                    <div class=" file">
                        <div class="fat">
                            <span class="details">Clave de la Institucion</span>
                            <input type="text" name="Clave de la Institucion" value="">
                        </div>

                        <div class="fat">
                            <span class="details">Clave Campus</span>
                            <input type="text" name="Clave Campus" value="">
                        </div>

                        <div class="opc">
                            <span class="details">Entidad Federativa</span>
                            <select class="opc" name="text" value="">
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

                    <div class=" file">
                        <div class="fat">
                            <span class="details">Nombre de la Institucion</span>
                            <input type="text" name="Nombre de la Institucion" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Campus</span>
                            <input type="text" name="Campus" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Identificador de la Institución que emite el Documento Electrónico </span>
                            <input type="text" name="Identificador de la Institución que emite el Documento Electrónico" value="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>

        <!-- Datos del Responsable -->
        <div class="container">
            <form action="#">
                <span>Datos del Responsable</span>
                <br> <br>
                <hr>
                <br> <br>
                <div class="opc">
                    <select class="opc" name="menu" value="">
                        <option value="1">--Seleccionar--</option>
                        <option value="2">IZCOATL JAFET ARRIAGA LOPEZ</option>
                    </select>
                </div>
                <br> <br>
                <hr>
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
                        <div class="opc">
                            <span class="details">Cargo</span>
                            <select class="opc" name="menu" value="">
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


                    <div class="file">
                        <div class="fat">
                            <span class="details">Nombre</span>
                            <input type="text" name="Nombre" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Segundo Apellido</span>
                            <input type="text" name="Segundo Apellido" value="">
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <br>

        <!--Datos de Expedicion-->
        <div class="container">

            <form action="#">
                <span>Datos de Expedicion</span>
                <br> <br>
                <hr>
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Tipo Certificacion</span>
                            <input type="text" name="Tipo Certificacion" value="">
                        </div>
                        <div class="opc">
                            <span class="details">Entidad Federativa</span>
                            <select class="opc" name="text" value="">
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

                    <div class="file">
                        <div class="fat">
                            <label>Fecha </label>
                            <input type="date" name="fecha" value="">
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <br>
        <!-- Datos del Rvoe-->
        <div class="container">
            <form action="#">
                <span class="details">Datos del Rvoe</span>
                <br> <br>
                <hr>
                <br>
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Número</span>
                            <input type="text" name="Número" value="">
                        </div>
                    </div>

                    <div class="file">
                        <div>
                            <div class="fat">
                                <span class="details">Fecha Expedicion</span>
                                <input type="date" name="fecha" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <span>Datos de la Carrera</span>
                <br> <br>
                <hr>
                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Carrera</span>
                            <input type="text" name="Carrera" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Nombre Carrera</span>
                            <input type="text" name="Nombre Carrera" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Clave Plan</span>
                            <input type="text" name="Clave Plan" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Calificación Mínima (sin decimales)</span>
                            <input type="text" name="Calificación Mínima" value="">
                        </div>
                        <div class="fat">
                            <span class="details">Calificación Mínima Aprobatoria (dos decimales)</span>
                            <input type="text" name="Calificación Mínima Aprobatoria" value="">
                        </div>
                    </div>

                    <div class="file">
                        <div class="fat">
                            <span class="details">Clave Carrera</span>
                            <input type="text" name="Clave Carrera" value="">
                        </div>
                        <div class="opc">
                            <span class="details">Tipo Periodo</span>
                            <select class="opc" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="1">SEMESTRE</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">CUATRIMESTRE</option>
                                <option value="4">TETRAMESTRE</option>
                                <option value="5">TRIMESTRE</option>
                                <option value="6">MODULAR</option>
                                <option value="7">ANUAL</option>
                            </select>
                            <br>
                        </div>
                        <br> <br>
                        <div class="opc">
                            <span class="details">Nivel de Estudios</span>
                            <select class="opc" name="text" value="">
                                <option value="">--Seleccionar--</option>
                                <option value="1">DOCTORADO</option>
                                <option value="2">ESPECIALIDAD</option>
                                <option value="3">T&#201;CNICO SUPERIOR UNIVERSITARIO</option>
                                <option value="4">PROFESIONAL ASOCIADO</option>
                                <option value="5">MAESTR&#205;A</option>
                                <option value="6">LICENCIATURA</option>
                            </select>
                        </div>
                        <br>
                        <div class="fat">
                            <br>
                            <span class="details">Calificación Máxima (sin decimales)</span>
                            <input type="text" name="Calificación Máxima " value="">
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <br>
        <!--Asignaturas-->
        <div class="container">
            <form action="#">
                <div class="dat">
                    <div class="fat">
                        <span>Asignaturas</span>
                    </div>

                    <div class="">
                        <button class="btn1" value="Capturar Calificaciónes" name="button">Capturar Calificaciónes</button>
                    </div>
                </div>
                <br>

                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Total de Asignaturas del Plan de Estudios</span>
                            <input type="text" name="Total de Asignaturas del Plan " value="">
                        </div>

                    </div>
                    <div class="file">
                        <div class="fat">
                            <span class="details">Total de Asignaturas CursadasTotal de Asignaturas Cursadas por el Alumno</span>
                            <input type="text" name="Total de Asignaturas Cursadas" value="">
                        </div>

                    </div>
                </div>

                <div class="cred">
                    <div class="fart">
                        <div class="fat">
                            <span class="details">Total de Créditos</span>
                            <input type="text" name="Total de Créditos" value="">
                        </div>
                    </div>
                    <div class="fart">
                        <div class="fat">
                            <span class="details">Créditos Obtenidos</span>
                            <input type="text" name="Créditos Obtenidos" value="">
                        </div>
                    </div>
                    <div class="fart">
                        <div class="fat">
                            <span class="details">Número de Ciclos</span>
                            <input type="text" name="Número de Ciclos" value="">
                        </div>
                    </div>
                </div>

                <div class="dat">
                    <div class="file">
                        <div class="fat">
                            <span class="details">Promedio</span>
                            <input type="text" name="Promedio" value="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br> <br>
        <div class="">
            <button class="btn2" value="Guardar Certificado" name="button">Guardar Certificado</button>
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