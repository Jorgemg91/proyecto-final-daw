<?php

   include("conexion.php");
   
   if(isset($_POST['registro'])) {
        if(
            strlen($_POST['nombre']) >=1 &&
            strlen($_POST['apellido']) >=1 &&
            strlen($_POST['email']) >=1 &&
            strlen($_POST['telefono']) >=1 &&
            strlen($_POST['contraseña']) >=1
          ) {
                $nombre =trim($_POST['nombre']);
                $apellido =trim($_POST['apellido']);
                $email =trim($_POST['email']);
                $telefono =trim($_POST['telefono']);
                $contraseña =trim($_POST['contraseña']);
                $fecha = date("d/m/y");

//VALIDACION DE CORREO EXISTENTE
            
                $validar = "SELECT * FROM datos WHERE email = '$email' || telefono = '$telefono'";
                $validando = $conex-> query($validar);
                if($validando->num_rows>0){
                    ?>
                    <script>
                        swal('Usuario ya registrado', 'Lo sentimos, pero este usuario ya esta registrado en nuestra base de datos','error');
                   </script>
                    <?php
                } else {

                $consulta = "INSERT INTO datos(nombre, apellido, email, telefono, contraseña, fecha)
                    VALUES('$nombre', '$apellido', '$email', '$telefono', '$contraseña', '$fecha')";

                $resultado = mysqli_query($conex, $consulta);

                if($resultado) {
                    ?>
                    <script>
                        swal('Registro completado', 'Enhorabuena, ahora dispone de 10€ de descuento para utilizar en cualquiera de nuestros servicios','success');
                   </script>
                    <?php
                } else {
                    ?>
                    <script>
                        swal('Error al registrar', 'Lo sentimos hubo un error, intentelo de nuevo','error');
                   </script>
                    <?php
                }
                }
        } else {
            ?>
            <h3 class="error">*Debe rellenar todos los campos*</h3>
            <?php
        }
   }


?>