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
    <title>Cat&#225;logo de Certificados Generados por Lotes</title>
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

            <div class="container">

                <h2 class="text-center">
                    Cat&#225;logo de Certificados Generados por Lotes
                </h2>
                <hr>
                <br><br>


                <div class="row">
                    <div class="col-md-7">
                        <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data" />
                        <div class="file-input text-center">
                            <input type="file" name="dataCliente" id="file-input" class="file-input__input" />
                            <label class="file-input__label" for="file-input">
                                <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                                <span>Elegir Archivo Excel</span></label>
                        </div>
                        <div class="text-center mt-5">
                            <input type="submit" name="subir" class="btn-enviar" value="Subir Excel" />
                        </div>
                        </form>
                    </div>

                    <div class="col-md-5">
                        <?php

                        include('conexion.php');
                        $sqlClientes = ("SELECT * FROM profesionista ORDER BY id ASC");
                        $queryData   = mysqli_query($conexion, $sqlClientes);
                        $total_client = mysqli_num_rows($queryData);
                        ?>

                        <h6 class="text-center">
                            Lista de Clientes <strong>(<?php echo $total_client; ?>)</strong>
                        </h6>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FolioControl</th>
                                    <th>Correo</th>
                                    <th>Celular</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($data = mysqli_fetch_array($queryData)) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++; ?></th>
                                        <td><?php echo $data['nombre']; ?></td>
                                        <td><?php echo $data['correo']; ?></td>
                                        <td><?php echo $data['celular']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>







        </section>
    </body>

</html>