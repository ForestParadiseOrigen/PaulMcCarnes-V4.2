<?php

include("conexion.php");
$con=conectar();

$id =$_GET['id'];

$sql="DELETE FROM producto WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }else {
        ?>
            <h1 class ="bad">ALGO SALIO MAL, AMIGO.</h1>
            <?php
    }
?>
