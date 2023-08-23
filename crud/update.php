 <?php

include("conexion.php");
$con=conectar();

$codigo =$_POST['codigo'];
$clave=$_POST['clave'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];



$sql="UPDATE usuarios SET clave='$clave',nombres='$nombres',apellidos='$apellidos',correo='$correo',telefono='$telefono' WHERE codigo ='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:crud.php");
    }
?>