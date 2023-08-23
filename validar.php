<?php
$codigo=$_POST['codigo'];
$clave=$_POST['clave'];
session_start();
$_SESSION['codigo']=$codigo;

$conexion=mysqli_connect("localhost","root","","paul");

$consulta="SELECT*FROM usuarios where codigo='$codigo'and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas){
    header("location:ControlPanel.html");
}else{
    ?>
    <?php
    include("Login.html");
    ?>
    <h1 class ="bad"> ERROR EN LA AUTENTIFICACION</h1>
    <?php
}

/* 
    if($filas ['rolUsuarioFK']==1){//Admin
        header("location:ControlPanel.html");
    
    }else if($filas['rolUsuarioFK']==0){//Cliente
            header("location:userArea.html");
    }
    else{
        ?>
        <?php
        include("Login.html");
        ?>
        <h1 class ="bad"> ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }   
    
*/
mysqli_free_result($resultado);
mysqli_close($conexion);