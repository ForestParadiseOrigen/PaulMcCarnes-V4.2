<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$clave=$_POST['clave'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO usuarios VALUES('$codigo','$clave','$nombres','$apellidos','$correo','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registerComplete.html");
    
}else {
    ?>
        <h1 class ="bad">ALGUNO DE LOS DATOS INGRESADOS YA EXISTEN</h1>
        <?php
}
?>