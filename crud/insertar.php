<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$rolUsuarioFK=$_POST['rolUsuario'];
$clave=$_POST['clave'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO usuarios VALUES('$codigo','$rolUsuarioFK','$clave','$nombres','$apellidos','$correo','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
?>