<?php 

?>
<!-- LOGIN.PHP ESTÀ CAUSANDO CONFLICTO CON EL ENVÌO DE DATOS DE FULL CALENDAR (BOTÓN SUBMIT????)
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8";>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <meta name="description" content="Proyecto web para generación de citas a un taller de pintura.">
        <title>Iniciar sesión</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAA
        AAAAAAAAAjIyMAJGPjQBZWVkAVFRUAAsAhQA4ODgACQJSAHp6egAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAd3AAAAADMwBXdwAAABMQAFV3cAA
        AEwADBVV3" rel="icon" type="image/x-icon">
    </head>
    <body id="Top">
        <div class="container">
            <div class="box form-box">
                <header class="box-header">Iniciar sesión</header>
					<form action="validacionUSERPASS.php" method="post">
                    <div class="field input">				
                        <label for="username">Nombre de usuario</label>
                        <input type="text" name="username" id="username" placeholder="Nombre de usuario">
                    </div>
                    
                    <div class="field input">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                    </div>
                    
                    <div class="field input">
                        <input type="submit" class="btn" name="submit" value="Iniciar sesión" href="../html/Citas2.html">
                    </div>

                    <div class="link">
                        ¿No tienes una cuenta? <a href="Registro.php" id="registro">Regístrate ahora</a>

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>