<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="media/ual.png" />
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/botontitulo.css">
    <link rel="stylesheet" href="estilos/plantilla3.css">
    <script src="mostrar.js"></script>
    <title>Cat&#225;logo de Certificados Generados</title>
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



    <body>

        <section class="zona1">
            <div class="container body-content">
                <div id="dvCapturar">

                    <div class="container body-content">
                        <div id="dvCapturar"><br>
                            <h2 class="botons">Cat&#225;logo de Certificados Generados</h2>
                            <div class="contenedorCatalogo">
                                <div class="barra__buscador">
                                    <!--buscar y crear un nuevo registro-->
                                    <form class="formulario">
                                        <a href="#" class="btn"><img class=imgButton src="media/add.png">Generar Nuevo T&#237;tulo</a>
                                        <a href="cargaMasiva.php" class="masiva"><img class=imgButton src="media/list.png">Carga Masiva</a>
                                    </form>
                                </div>
                            </div>
                            <hr />

                            <!--check box-->
                            <div class="caja_filtro">
                                <div class="filtro">
                                    <p>Filtros de B&#250;squeda</p><br>

                                    <div class="box_group">
                                        <label>
                                            <input type="radio" value="1" id="rdEstatus" name="rdEstatus" />
                                            <span class="text">Documento Pendiente por Firmar.</span>
                                        </label>
                                    </div>

                                    <div class="box_group">
                                        <input type="radio" value="2" id="rdEstatus" name="rdEstatus" />
                                        <span class="text">Documento Firmado y pendiente por timbrar.</span>
                                        </label>
                                    </div>


                                    <div class="box_group">
                                        <label>
                                            <input type="radio" value="3" id="rdEstatus" name="rdEstatus" />
                                            <span class="text">Documento Timbrado y pendiente por autorizar.</span>
                                        </label>
                                    </div>


                                    <div class="box_group">
                                        <label>
                                            <input type="radio" value="4" id="rdEstatus" name="rdEstatus" />
                                            <span class="text">Documento Autorizado por la DGP.</span>
                                        </label>
                                    </div>

                                    <div class="box_group">
                                        <label>
                                            <input type="radio" value="5" id="rdEstatus" name="rdEstatus" />
                                            <span class="text">Cancelados</span>
                                        </label>
                                    </div>

                                    <div class="box_group">
                                        <label>
                                            <input type="radio" value="6" id="rdEstatus" name="rdEstatus" checked="checked" />
                                            <span class="text">Todos los Estatus</span>
                                        </label>
                                    </div>


                                    <div class="box-date">
                                        <div class="form-date">
                                            Fecha Inicial: <input class="inputdate" style="width : 170px; heigth : 20px" class="form-control text-box single-line" id="fechaExpedicionRevoe" name="fechaExpedicionRevoe" type="date" placeholder="dd-mm-yyyy">
                                        </div>

                                        <div class="form-date">
                                            Fecha Final: <input class="inputdate" style="width : 170px; heigth : 20px" id="fechaExpedicionRevoe" name="fechaExpedicionRevoe" type="date" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>



                                    <button id="mostarFiltros" onclick="toggle()">Más Filtros (Click sobre este texto)</button>

                                    <div id="masFiltros" style="display: none;">
                                        <div class="box_oculto">
                                            <label class="tex-oculto" for="txtSerieFolio">Folio:</label><br>
                                            <input type="text" style="width : 95%; heigth : 20px" name="txtSerieFolio" id="txtSerieFolio" class="input-oculto" />
                                        </div>

                                        <div class="box_oculto">
                                            <label class="tex-oculto" for="txtAlumno">Alumno:</label> <br>
                                            <input type="text" style="width : 95%; heigth : 20px" name="txtAlumno" id="txtAlumno" class="input-oculto" />
                                        </div>


                                        <div class="box_oculto">
                                            <label class="tex-oculto" for="txtEmail">Email:</label><br>
                                            <input type="text" style="width : 95%; heigth : 20px" name="txtEmail" id="txtEmail" class="input-oculto" />
                                        </div>
                                    </div>

                                    <div class="box_buscar">
                                        <a href="#" class="btn_buscar"> Buscar Documentos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="indicador">
                        <h4>Indicadores de estatus</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <span><i class="red_color"></i> Pendiente por Firmar.</span>
                            </div>
                            <div class="col-md-12">
                                <span><i class="orange_color"></i> Firmado y pendiente por timbrar.</span>
                            </div>
                            <div class="col-md-12">
                                <span><i class="yellow_color"></i> Timbrado y pendiente por autorizar.</span>
                            </div>
                            <div class="col-md-12">
                                <span><i class="green_color"></i> Autorizado por la DGP.</span>
                            </div>
                            <div class="col-md-12">
                                <span><i class="black_color"></i> Cancelados.</span>
                            </div>
                        </div>
                    </div>
                </div>


                <fieldset>
                    <legend>Datos</legend>

                    <!-- botones de timbrado

                    <div class="row" style="margin-bottom:50px;">
                        <br />
                        <div class="e-firmar-titulo col-md-4">
                            <a href="#" class="btn btn-circle btn-sm btn-danger" onclick="FirmarDocumentos(); return false;"><i class="fa fa-pencil"></i> Firmar Doc. Seleccionados</a>

                        </div>
                        <div class="e-timbrar-titulos col-md-4">
                            <a href="#" class="btn btn-circle btn-sm btn-warning" onclick="TimbrarDocumentosMasivamente(); return false;"><i class="fa fa-key"></i> Timbrar a DGP Doc. Seleccionados</a>
                        </div>
                        <div class="e-solicitar-firma-titulos col-md-4" style="text-align:right;">
                            <a href="#" class="btn btn-circle btn-sm btn-info" onclick="EnviarSolicitudFirmar(); return false;"><i class="fa fa-send-o"></i> Solicitar Firma de Documentos </a>
                        </div>
                    </div>-->


                    <div class="row">
                        <div class="col-md-12">
                            <table id="ls" class="display order-column dt-responsive compact" cellspacing="0" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="e-firmar-titulo">
                                            <input class="e-firmar-titulo" type="checkbox" checked="checked" onclick="Checkdocumentos(this.checked);" /> <span style="color:red;font-weight:bold;">Firmar</span>
                                        </th>
                                        <th class="e-timbrar-titulos">
                                            <input class="e-timbrar-titulos" type="checkbox" checked="checked" onclick="CheckdocumentosCargar(this.checked);" /> <span style="color:orange;font-weight:bold;">Timbrar DGP</span>
                                        </th>
                                        <th>
                                            FOLIO_CONTROL
                                        </th>
                                        <th>
                                            Nombre del Profesionista
                                        </th>
                                        <th>CURP</th>
                                        <th>
                                            Fecha Emisión
                                        </th>
                                        <th>Estatus del Título</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </fieldset><br>
                <hr>

                <footer class="pie-pagina">
                    <div class="grupo-1">
                        <div class="box">
                            <figure>
                                <img src="../media/ual.png">
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