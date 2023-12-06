<?php
$Nombre=$_POST['Nombre'];
$dom=$_POST['Domicilio'];
$tel=$_POST['telefono'];
$mj=$_POST['mensaje'];

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$database="Base";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$database);
$EnterDataForm="INSERT INTO Tabla VALUES('$Nombre','$dom','$tel','$mj')";

mysqli_query($conn,$EnterDataForm);
mysqli_close($conn);

echo"Ya quedo tu registro mi amorssss";
?>