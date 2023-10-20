<?php

	$servidor = "127.0.0.1:3307";
	$usuario = "root";
	$clave = "smgm1304";
	$baseDeDatos = "ac_bodyshop_tallermec";
	
	$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8";>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <meta name="description" content="Proyecto web para generación de citas a un taller de pintura.">
        <title>Registro</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAA
        AAAAAAAAAjIyMAJGPjQBZWVkAVFRUAAsAhQA4ODgACQJSAHp6egAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAd3AAAAADMwBXdwAAABMQAFV3cAA
        AEwADBVV3" rel="icon" type="image/x-icon">
    </head>
    <body id="Top">
        <div class="container">
            <div class="box form-box">
                <header class="box-header">Registrarse</header>
                <form action="#" name="ac_bodyshop_tallermec" method="post">
                    <div class="field input">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Nombre">
                    </div>
                    
                    <div class="field input">
                        <label for="last-name">Apellido</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Apellido">
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="field input">
                        <label for="username">Nombre de usuario</label>
                        <input type="text" name="username" id="username" placeholder="Nombre de usuario">
                    </div>

                    <div class="field input">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                    </div>
					
					<div class="field input">
                        <label for="date">Fechas disponibles</label>
                        <input type="date" name="date" id="date" placeholder="XX/MM/AAAA">
                    </div>
                    
                    <div class="field input">
						<input type="submit" class="btn" name="submit" value="Confirmar">			
                    </div>
					

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

	<?php

		if(isset($_POST['submit'])){
			
				$nombre = $_POST['name'];
				$apellido = $_POST['last-name'];
				$correo = $_POST['email'];
				$nickname = $_POST['username'];
				$contrasena = $_POST['password'];
				$fecha = $_POST['date'];
				
				$insertarDatos = "INSERT INTO cliente_c (nombre_C, apellido_C, correo_C, nickname_C, contrasena_C, fechadisp_C) VALUES ('$nombre', '$apellido' , '$correo' ,'$nickname', '$contrasena', '$fecha')"; 	

				$ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);
		}

?>