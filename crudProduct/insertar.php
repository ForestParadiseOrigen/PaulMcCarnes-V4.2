<?php
include("conexion.php");
$con=conectar();

$productName=$_POST['productName'];
$productPrice=$_POST['productPrice'];
$detailProductFK=$_POST['detailProductFK'];
$productImage=addslashes(file_get_contents($_FILES['productImage']['tmp_name']));

$sql="INSERT INTO producto VALUES('$id','$productName','$productPrice','$detailProductFK','$productImage')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registerComplete.html");
    
}else {
}
?>