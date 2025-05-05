<form id="form1" name="form1" method="post" action="">
Nombre del Archivo: <input type="text" name="nombre" /><br />

<TituloElectronico name="titulo" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="https://www.siged.sep.gob.mx/titulos/" xsi:schemaLocation="https://www.siged.sep.gob.mx/titulos/ schema.xsd" version="1.0" folioControl="15010037"></TituloElectronico>
<input type="submit" name="enviar" value="Enviar" /><br />
</form> 

<?php
include('..\login/login/conexion.php');
if(isset($_REQUEST['enviar'])){//si ha pulsado el boton enviar
    if($archivo=fopen($_REQUEST['nombre'].".xml","w+")){//si creo el archivo con el nombre del archivo ingresado
        
        fwrite($archivo,$_REQUEST['titulo']);//escribe en el archivo creado el codigo embed ingresado
        fclose($archivo);//cierra el archivo ingresado
    }
} 
//Y si deseas mostrar el archivo generado (alternativo) 
if(isset($_REQUEST['enviar'])){//una vez que haya pulsado el boton
    $nombre=$_REQUEST['nombre'].".xml";//el nombre del archivo creado
    if(is_file($nombre)){//si existe el archivo
        echo "<b>".$nombre."</b><br>";//mostramos el nombre del archivo creado
        $archivo=fopen($nombre,"r");//habrimos el archivo
        fpassthru($archivo);//mostramos todo el contenido del archivo
    }
} 

?>