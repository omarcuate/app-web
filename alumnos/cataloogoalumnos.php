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
require 'consultas.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="media/ual.png" />
    <link rel="stylesheet" href="cssalumnos/estilo.css">
    <link rel="stylesheet" href="estilosalumnos/plantilla4alu.css">
    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <title>Cat&#225;logo de Alumnos</title>


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

    <div class="cargando">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>

    <?php
    include('../config/conexion.php');

    $consultar   = ("SELECT * FROM profesionista ORDER BY id DESC ");
    $queryAlumno = mysqli_query($conexion, $consultar);
    $cantidad     = mysqli_num_rows($queryAlumno);
    ?>
    <section class="zona1">
        <div class="container body-content">
            <div id="dvCapturar">
                <h2 class="botons">Catalogo de Alumnos</h2>
                <div class="contenedorCatalogo">

                    <div class="barra__buscador">
                        <!--buscar y crear un nuevo registro-->
                        <form class="formulario">

                            <a href="catalogoalumnosdos.php" class="btn"><img class=imgButton src="media/add.png"> Crear Nueva</a>
                        </form>

                    </div>
                    <strong>Total de Alumnos Registrados <span style="color: crimson"> ( <?php echo $cantidad; ?> )</span> </strong>
                </div>

                <br>
                <br>
                <fieldset>
                    <legend>Datos</legend>
                    <br>
                    <form action="cataloogoalumnos.php" class="formulario" method="POST">

                        <a style="width : 1%; heigth : 20px"></a>
                        <div class="dt-buttons">
                            <a class="btn__capturarcal" href="#" id="btnExportar"><span>Exportar a Excel</span></a>
                            <a style="width : 1%; heigth : 20px"></a>
                            
                        </div>

                        <!--////////////////////////////////////////////BUCADOR///////////////////////////////////////////////////////-->

                        <a style="width : 39%; heigth : 20px" class="btn__busc"></a>


                        <input type="text" name="buscar" placeholder="Buscar" class="input__text">

                        <input type="submit" class="btn" value="buscar">



                    </form>


                    <!--////////////////////////////////////////////BUCADOR///////////////////////////////////////////////////////-->

                    <table id="tabla">
                        <!--encabesado de la tabla-->
                        <thead>
                            <tr class="head">
                                <th>No. Control</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>F. de Registro</th>
                                <th>Carrera</th>
                                <th>Opciones</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include 'buscaralumno.php';

                            while ($row = mysqli_fetch_array($sql_query)) {
                            ?>
                                <tr>
                                    <td><?= $row['NumeroControl'] ?></td>
                                    <td><?= $row['Nombre'] ?></td>
                                    <td><?= $row['PrimerApellido'] ?></td>
                                    <td><?= $row['SegundoApellido'] ?></td>
                                    <td><?= $row['Fecha'] ?></td>
                                    <td><?= $row['CarreraId'] ?></td>


                                    <td><a href="actualizar.php?id=<?php echo $row['id']; ?>" class="btn__update"><img class=imgButton src="media/edit.png"> Editar</a>

                                        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn__delete"><img class=imgButton src="media/delete.png"> Eliminar</a>
                                    </td>



                                </tr>


                        </tbody>
                    <?php
                            }
                    ?>

                    </table>
                    <br>
                </fieldset>
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

    <!-- script para exportar a excel -->
    <script>
        const $btnExportar = document.querySelector("#btnExportar"),
            $tabla = document.querySelector("#tabla");

        $btnExportar.addEventListener("click", function() {
            let tableExport = new TableExport($tabla, {
                exportButtons: false, // No queremos botones
                filename: "Reporte de prueba", //Nombre del archivo de Excel
                sheetname: "Reporte de prueba", //Título de la hoja
            });
            let datos = tableExport.getExportData();
            let preferenciasDocumento = datos.tabla.xlsx;
            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
        });
    </script>


</body>

</html>