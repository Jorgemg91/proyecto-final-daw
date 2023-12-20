<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Patua+One&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>barbería George Brown</title>
</head>
<body>

    <header>
        <div class="contenedor contenedor-header">
            <div class="logo izquierda">
                <a href="index.html"><img src="imagenes/logo.jpg" alt="logo de barberia"></a>
            </div>
            <nav class="menu derecha">
                <a href="citas.php">Citas</a>
                <a href="servicios.html">Servicios</a>
                <a href="nosotros.html">Nosotros</a>

            </nav>
        </div>

    </header>
     

    
        <div class="contenedor-formulario">
            <form class="formulario" method="POST" action="">

                <h2 class="registrate-titulo">Registrate con nosotros</h2>
                <p class="descuento">Recibe un descuento de 10€ al registrarte por primera vez</p>

                <div class="input-wrapper">
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="apellido" placeholder="Apellido">
                </div>
                <div class="input-wrapper">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-wrapper">
                    <input type="tel" name="telefono" placeholder="Telefono">
                </div>
                <div class="input-wrapper">
                    <input type="password" name="contraseña" placeholder="Contraseña">
                </div>

                <input class="boton-registrar" type="submit" name="registro" value="Registrar">

            </form>
        </div>


        <?php
          include('php/registrar.php');
        ?>
   
    </body>


</html>