<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link href="CSS/CrearCuenta.css" rel="stylesheet" type="text/css"/>
    <?php include('EncabezadoInicio.php'); ?>
</head>
<body>
    <div class="formulario">
        <h1>CREAR CUENTA</h1>
        <form method="post">
            <div class="username">
                <input type="text" required>
                <label>Ingresar su Nombre</label>
            </div>
            <div class="LastName">
                <input type="text" required>
                <label>Ingresar su Apellido</label>
            </div>
            <div class="Mail">
                <input type="text" required>
                <label>Ingresar su Correo</label>
            </div>
             <div class="Telefono">
                <input type="text" required>
                <label>Telefono</label>
            </div>
            <div class="contrasena">
                <input type="password" id="password" required>
                <label>Ingrese su contraseña</label>
                <input type="checkbox" id="showPassword">
            </div>
                   <form method="post">
            <input class="CrearCuenta" type="submit" value="Crear una cuenta" formaction="#">
        </form>
        </form>
 
    </div>
    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordCheckbox = document.getElementById("showPassword");

        showPasswordCheckbox.addEventListener("change", function() {
            if (showPasswordCheckbox.checked) {
                passwordInput.type = "text"; // Muestra la contraseña :D
            } else {
                passwordInput.type = "password"; // No muestra la contraseña :D
            }
        });
    </script>

    <footer><?php include('PieInicio.php'); ?></footer>
</body>
</html>


