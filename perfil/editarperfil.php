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
        <h1>Mi Perfil</h1>
        <div class="container">
            <form action="#">
                <div class="user-details">
                    <div class="perfile">
                        <center>
                            <span>¡No olvides guardar cambios!</span> <br><br>
                            <img src="https://d500.epimg.net/cincodias/imagenes/2016/03/16/lifestyle/1458143779_942162_1458143814_noticia_normal.jpg" style="width:300px; height:250px;" />
                        </center>
                        <input type="file" name="archivo" value="image/*" accept=".png,.jpeg,.jpg"> <br><br>
                        <div class="">
                            <p class="auto"> Contraseña <a class="color" href="#">[ Cambiar Contraseña ]</a></p> <br>
                            <div class="fooder"> Autenticacion de dos factores</div><br>
                            <p class="auto"><a class="color" href="#">¿Que es esto?</a></p><br>
                            <p class="auto"> Estado Actual:Deshabilitado <a class="color" href="#">[Habilitar]</a></p>
                        </div>
                    </div>
                    <div class="imput-box">
                        <div class="fat">
                            <span class="details">Usuario: </span>
                        </div>
                        <div class="fat">
                            <span class="details">Nombre Completo*</span>
                            <br>
                        </div>

                        <div class="fat">
                            <span class="details">Teléfono*</span>
                            <input type="tel" name="telefono" value="">
                        </div>

                        <div class="fat">E-mail Alternativo</span>
                            <input type="email" name="correo" value="">
                        </div>

                        <div class="fat">
                            <span class="details">Sitio Web</span>
                            <input type="web" name="direccion" value="">
                        </div>
                        <div class="">
                            <button class="btn2" value="Guardar" name="button">Guardar</button>
                        </div>
                    </div>
                    <div class="imput-box">

                    </div>

                </div>
            </form>


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