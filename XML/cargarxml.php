<?php
include('..\login/login/conexion.php');

$name=$_POST['txtname'];
$apelli=$_POST['txtApellido'];
$pais=$_POST['pais'];

if($name != "" && $apelli != "")
{
    $xml = new DomDocument('1.0', 'UTF-8');
    $root = $xml->createElement('personas');
    $root = $xml->appendChild($root);
    
    $user=$xml->createElement('user');
    $user =$root->appendChild($user);
    
    $nom=$xml->createElement('nombre',$name);
    $nom =$user->appendChild($nom);
    
    $apellidonode=$xml->createElement('apellido',$apelli);
    $apellidonode=$user->appendChild($apellidonode);
    
    $paisnode=$xml->createElement('pais',$pais);
    $paisnode=$user->appendChild($paisnode);
    
    $xml->formatOutput = true;


if(isset($_REQUEST['enviar'])){//si ha pulsado el boton enviar
    if($archivo=fopen($_REQUEST['txtname'].".xml","w+")){//si creo el archivo con el nombre del archivo ingresado
       
        
        fclose($archivo);//cierra el archivo ingresado

}
}
}
?>
