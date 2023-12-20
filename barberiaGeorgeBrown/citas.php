<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/style.css" type="text/css">
    <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Patua+One&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>barbería George Brown</title>
</head>
<body>

    <header class="header">
        <div class="contenedor contenedor-header">
            <div class="logo izquierda">
                <a href="index.html"><img src="imagenes/logo.jpg" alt="logo de barberia"></a>
            </div>
            <nav class="menu derecha">
                <a href="servicios.html">Servicios</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="registro.php">Registro</a>
            </nav>
        </div>

    </header>
    <main class="main-citas">
        <div class="contenedor-citas">
            <form  method="POST" action="">

                <div class="formulario-citas">

                    <h2 class="citas-titulo">Elige tu cita</h2>
                    <a href="registro.php"><p class="enlaceadescuento">Registrate si aún no lo has hecho para recibir un DESCUENTO DE 10€ en cualquiera de nuestros servicios</p></a>

                    <div class="input-wrapper">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                    </div>
                    <div class="input-wrapper">
                        <label for="email">Correo</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-wrapper">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" name="telefono" placeholder="Teléfono">
                    </div>
                    <div class="input-servicios">
                        <label for="">Servicio</label>
                        <div class="input-radio">
                            
                            <p> Corte de Barba</p> <input type="radio" name="servicio" value="corte de barba">
                            <p>Corte de Cabello</p><input type="radio" name="servicio" value="corte de cabello">
                            <p>Corte de barba + corte de pelo</p><input type="radio" name="servicio" value="corte de barba + corte de pelo">
                            <p>Tinte de barba</p> <input type="radio" name="servicio" value="tinte de barba">
                            <p>Tinte de cabello</p><input type="radio" name="servicio" value="tinte de cabello">
                            <p>Tratamiento capilar</p><input type="radio" name="servicio" value="tratamiento capilar">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <input class="fecha-hora" type="date" name="fecha" placeholder="Fecha" id="fecha" max="2024-06-30">
                        <input class="fecha-hora" type="time" name="hora" placeholder="hora" id="hora" min="09:30" max="19:00" step="1800" value="11:00">
                        <p>* Recuerde, nuestro horario es L-V: 09:00h a 19:00h y sábados de 10:00h a 14:00h *</p>
                    </div>

                    <input class="boton-registrar" type="submit" name="enviar" value="solicitar cita" onclick="captura()">
                </div>

            </form>
        </div>
    </main>


    <?php
        include('php/reservar.php');
    ?>

    
</body>
</html>