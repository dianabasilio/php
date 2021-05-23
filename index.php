<?php

require_once('conexion.php');
$device= $_POST['device_label'];
$Tempe= $_POST['Temperatura'];
$Hume= $_POST['Humedad'];
$conn = new conexion();

$query="SELECT * FROM device_state WHERE idDevice='$device'";
$select= mysqli_query($conn->conectardb(),$query);
if($select->num_rows){
    $query="UPDATE device_state SET temperatura=$Tempe, humedad=$Hume WHERE idDevice='$device'";
    $update= mysqli_query($conn->conectardb(),$query);
    
    
    $query="INSERT INTO devicehistoric(idDevice,variable,valor,fecha) VALUES('$device','temperatura','$Tempe',NOW())";
    $insert= mysqli_query($conn->conectardb(),$query);
    
    $query="INSERT INTO devicehistoric(idDevice,variable,valor,fecha) VALUES('$device','humedad','$Hume',NOW())";
    $insert= mysqli_query($conn->conectardb(),$query);
    echo "***Datos Registrados** <BR> ";
    echo "Datos ingresados correctamente! [Serie='$device',Temperatura='$Tempe',Humedad='$Hume'] ";
}
else{

    echo "***No Existe tarjeta** <BR> ";

}


?>