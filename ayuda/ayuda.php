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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú despegable</title>
    <link rel="stylesheet" href="estilos/plantilla3.css">
    <link rel="stylesheet" href="estilos/estilosayu.css">

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
        <div>
            <h2>Ayuda y Soporte Online</h2>
            <br>
            <h4>Manuales</h4>
        </div>
        <nav class="nav">
            <ul class="list">

                <li class="list__item">
                    <div class="list__button">
                        <img src="img/menu.png" class="list__img" width="15px">
                        <a href="#" class="nav__link">
                            <h1>Perfil</h1>
                        </a>
                    </div>
                </li>

                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="img/menu.png" class="list__img" width="15px">
                        <a href="#" class="nav__link">
                            <h1>Interfaz</h1>
                        </a>
                        <img src="img/arrow.svg" class="list__arrow">
                    </div>

                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Inicio.pdf" class="nav__link nav__link--inside">Inicio</a>
                        </li>

                    </ul>
                </li>

                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="img/menu.png" class="list__img" width="15px">
                        <a href="#" class="nav__link">
                            <h1>Catalogos</h1>
                        </a>
                        <img src="img/arrow.svg" class="list__arrow">
                    </div>

                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Institucion.pdf" class="nav__link nav__link--inside">Datos de la Institución</a>
                        </li>

                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Expedicion.pdf" class="nav__link nav__link--inside">Datos de Expedición</a>
                        </li>

                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Carreras.pdf" class="nav__link nav__link--inside">Carreras</a>
                        </li>

                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Asignaturas.pdf" class="nav__link nav__link--inside">Asignaturas</a>
                        </li>

                        <li class="list__inside">
                            <a href="..\ayuda/manuales/Manual de usuario - Alumnos.pdf" class="nav__link nav__link--inside">Alumnos</a>
                        </li>
                    </ul>

                </li>


                <!--<li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="img/menu.png" class="list__img" width="15px">
                        <a href="#" class="nav__link">
                            <h1>Certificacion</h1>
                        </a>
                        <img src="img/arrow.svg" class="list__arrow">
                    </div>

                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Emitir Certificacion</a>
                        </li>


                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside"> Portal de Certificados</a>
                        </li>

                    </ul>
                </li>

                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="img/menu.png" class="list__img" width="15px">
                        <a href="#" class="nav__link">
                            <h1>Titulacion</h1>
                        </a>
                        <img src="img/arrow.svg" class="list__arrow">
                    </div>

                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Emitir Titulo</a>
                        </li>


                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Proceso para el envió de los títulos electrónicos a la DGP</a>
                        </li>

                    </ul>
                </li>-->
            </ul>
        </nav>
        <br>
        <br>

        <hr>
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <img src="img/ual.png">
                        <small>&copy;2022 Software de títulos y certificados electrónicos</small>

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


    <script src="main.js"></script>
</body>

</html>