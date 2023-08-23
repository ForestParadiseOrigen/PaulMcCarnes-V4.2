 <?php

include("conexion.php");
$con=conectar();

$id =$_POST['id'];
$productName=$_POST['productName'];
$productPrice=$_POST['productPrice'];
$detailProductFK=$_POST['detailProductFK'];
$productImage=addslashes(file_get_contents($_FILES['productImage']['tmp_name']));



$sql="UPDATE producto SET id='$id',productName='$productName',productPrice='$productPrice',detailProductFK='$detailProductFK',productImage='$productImage' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:crud.php");
    }else {
        ?>
            <h1 class ="bad">ALGO SALIO MAL, AMIGO.</h1>
            <?php
    }
?>