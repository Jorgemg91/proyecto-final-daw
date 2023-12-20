<?php

   include("conexion.php");
 
   
   if(isset($_POST['enviar'])) {
        if(
            strlen($_POST['nombre']) >=1 &&
            strlen($_POST['email']) >=1 &&
            strlen($_POST['telefono']) >=1 &&
            strlen($_POST['servicio']) >=1 &&
            strlen($_POST['fecha']) >=1 &&
            strlen($_POST['hora']) >=1 
          ) {
                $nombre =trim($_POST['nombre']);
                $email =trim($_POST['email']);
                $telefono =trim($_POST['telefono']);
                $servicio =trim($_POST['servicio']);
                $fecha =trim($_POST['fecha']);
                $hora =trim($_POST['hora']);
                // $fecha = date("d/m/y");

                $consulta = "INSERT INTO clientes(nombre, email, telefono, servicio, fecha, hora)
                    VALUES('$nombre', '$email', '$telefono', '$servicio', '$fecha', '$hora')";

                $resultado = mysqli_query($conex2, $consulta);

                if($resultado) {
                    ?>
                   <script>
                        swal('Gracias por confiar en nosotros', 'Su cita se completó correctamente','success');
                   </script>
                    
                                                                          <!-- <h3 class="enviado">Gracias por confiar en nosotros, cita solicitada</h3> -->
                    <?php
                    
                    exit;
                } else {
                    ?>
                    <script>
                        swal('Lo sentimos', 'Hubo un error, pruebe a solicitar de nuevo su cita','success');
                    </script>
                    <?php
                }
        } else {
            ?>
            <h3 class="error">*Para obtener una cita, debe rellenar todos los campos*</h3>
            <?php
        }
   }


?>