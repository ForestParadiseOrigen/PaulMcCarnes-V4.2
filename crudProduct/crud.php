<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!--CRUD DE PROSUCTOS-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">                                    
                                    <input type="text" class="form-control mb-3" name="productName" placeholder="Nombre del producto">
                                    <input type="number" class="form-control mb-3" name="productPrice" placeholder="Precio del producto">
                                    <input type="text" class="form-control mb-3" name="detailProductFK" placeholder="Detalles del producto">
                                    <input type="file" class="form-control mb-3" name="productImage" placeholder="Imagen del producto">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del producto</th>
                                        <th>Precio del producto</th>
                                        <th>Detalle del producto</th>
                                        <th>Imagen del producto</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['productName']?></th>
                                                <th><?php  echo $row['productPrice']?></th> 
                                                <th><?php  echo $row['detailProductFK']?></th>
                                                <th><?php  echo $row['productImage']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>