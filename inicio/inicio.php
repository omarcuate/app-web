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
    <link rel="stylesheet" href="estilos/estiloini.css">
    <title>menu</title>
</head>

<body>
    <header>
        <div>

            <nav class="navegacion">
                <ul class="menu">
                    

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
        <div> <img class="logoin" src="media/UA.png"> </div>

        <div class="botons">

            <div class="contenedor" id="uno">
                <a href="..\institucion/datos-institucion.php"><img src="media/banco.png" class="icon"></a>
                <p class="texto">Institucion</p>
            </div>

            <div class="contenedor" id="dos">
                <a href="..\expedicion/datos-expedicion.php"><img src="media/mapa.png" class="icon"></a>
                <p class="texto">Expedicion</p>

            </div>

            <div class="contenedor" id="tres">
                <a href="..\carreras/catalogocarreras.php"><img src="media/menu.png" class="icon"></a>
                <p class="texto">Carreras</p>

            </div>

            <div class="contenedor" id="cuatro">
                <a href="..\asignaturas/catalogoAsignatuas.php"><img src="media/libro.png" class="icon"></a>
                <p class="texto">Asignaturas</p>

            </div>

            <div class="contenedor1" id="sinco">
                <a href="..\alumnos/cataloogoalumnos.php"><img src="media/grupo.png" class="icon"></a>
                <p class="texto">Alumnos</p>

            </div>


            <div class="contenedor1" id="ocho">
                <a href="..\ayuda/ayuda.php"><img src="media/nube.png" class="icon"></a>
                <p class="texto">Ayuda</p>

            </div>

            <div class="contenedor1" id="nueve">
                <a href="..\perfil/editarperfil.php"><img src="media/usuario.png" class="icon"></a>
                <p class="texto">Perfil</p>

            </div>

            <div class="contenedor1" id="trece">
                <a href="..\login/login/salir.php"><img src="media/cerrar.png" class="icon"></a>
                <p class="texto">Cerrar Sesion</p>

            </div>
        </div>

        <div class="tex1">
            <p>Estado Actual del Sistema <b>Producción</b></p>
        </div>

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