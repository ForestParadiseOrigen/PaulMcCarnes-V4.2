<?php

include("conexion.php");
$con=conectar();

$codigo =$_GET['id'];

$sql="DELETE FROM usuarios  WHERE codigo ='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>
