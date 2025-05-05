<?php
include('conexion.php');

$id=$_POST['id'];

    

    $NumeroControl=$_POST['NumeroControl'];
    $CURP=$_POST['CURP'];
    $Nombre=$_POST['Nombre'];
    $PrimerApellido=$_POST['PrimerApellido'];
    $SegundoApellido=$_POST['SegundoApellido'];
    $IdGenero=$_POST['IdGenero'];
    $Fecha= date ('d-m-y');
    $CarreraId=$_POST['CarreraId'];
    $CorreoElectronico=$_POST['CorreoElectronico'];
    $Estatus=$_POST['Estatus'];

$actualizar = "UPDATE alumnosual SET  NumeroControl ='$NumeroControl', CURP ='$CURP', Nombre ='$Nombre', PrimerApellido  ='$PrimerApellido',SegundoApellido ='$SegundoApellido', IdGenero ='$IdGenero', Fecha ='$Fecha', CarreraId ='$CarreraId', CorreoElectronico='$CorreoElectronico', Estatus ='$Estatus' WHERE id='$id'";

    $resultado = mysqli_query($conexion,$actualizar);
    

    if (!$resultado) {
    echo "No se pudieron actualizar los datos";
}
	else{
    header("Location: cataloogoalumnos.php");

}
