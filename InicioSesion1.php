<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <link href="CSS/InicioSesion.css" rel="stylesheet" type="text/css"/>
        <?php include('EncabezadoInicio.php'); ?>
    </head>
    <body>
        <div class="formulario">
            
                 <h1>Inicio de Sesión</h1>
            <form method="post">
                <div class="username">
                    <input type="text" required>
                    <label>Correo electrónico</label> 
                </div> 
                <div class="contrasena">
                    <input type="password" required> 
                    <label>Contraseña<label>
                </div>
                <div class="recordar">¿Olvido su contraseña?</div>
                <input type="submit" value="Iniciar Sesión">
                <input type="submit" value="Crear una cuenta">
             
            </form>   
    </body>
        </div>
         <footer><?php include('PieInicio.php'); ?></footer>
</html>
