
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
        <h1>INICIO DE SESIÓN</h1>
        <form method="post" action="verificarInicioSesion.php">
            <div class="username">
                <input type="text" name="correo" required>
                <label>Correo electrónico</label>
            </div>
            <div class="contrasena">
                <input type="password" name="contraseña" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvidó su contraseña?</div>
        
            <input class="IniciarSesion" type="submit" value="Iniciar Sesión">
        </form>

        <form method="post" action="CrearCuenta.php">
            <input class="CrearCuenta" type="submit" value="Crear una cuenta">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["correo"]) || empty($_POST["contraseña"])) {
                // Manejar el caso en que faltan campos obligatorios
                echo '<p style="position: absolute; top: 32%; color: red; width: 100%; text-align: center; padding: 10px">Por favor, complete todos los campos.</p>';
            }
        }
        ?>
    </div>
    <footer><?php include('PieInicio.php'); ?></footer>
</body>
</html>
