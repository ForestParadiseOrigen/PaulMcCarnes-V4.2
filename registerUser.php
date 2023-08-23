<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paul McCarnes</title>
    <link rel="ICON" href="ASSETS/IMG/ICONO PAUL.ico">
    <link rel="stylesheet" href="ASSETS/CSS/styles.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--TIPOGRAFIA DE LA PAGINA-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <section class="YT">
        <div class="circulo"></div>    
        <div class="YTC"><!--TEXTO DE LA CABEZERA SUPERIOR-->
            <h2>¿Ya tienes una cuenta?<br> <span>¡Detente!</span></h2>
            <br>
            <p>Dale a este boton para que puedas ingresar normalmente!</p>
            <a href="Login.html">¡Ingresarme!</a>
            <a href="index.html">Tal vez... no</a>
        </div>
            <div class="contento">

                <form action="registerForm.php" class="form" name="form" method="post">
                    <input class="casillita" type="text" name="telefono" placeholder="Numero telefonico" required>
                    <br><br>
                    <input class="casillita" type="text" name="correo" placeholder="Correo electronico" required>
                    <input class="casillita" type="text" name="codigo" placeholder="Numero de documento" required>
                    <br><br>
                    <input class="casillitaa" type="text" class="fomr-input" name="nombres" placeholder="Nombres" required>
                    <input class="casillitaa" type="text" class="fomr-input" name="apellidos" placeholder="Apellidos" required>
                    <input class="casillitaa" type="password" class="fomr-input" name="clave" placeholder="Contraseña" required>
                    <br><br>
                    <input class="boton" type="submit" name="btn-enviar" value="Siguiente">
                    <input class="boton" type="reset" name="btn-cancelar" value="Cancelar">
                </form>
            </div>
    </section>
</body>
</html>