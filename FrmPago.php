<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de pago</title>
        <link href="CSS/EstiloPago.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php include('EncabezadoInicio.php'); ?>
    <body>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $card_number = $_POST["card_number"];
            $expiration_date = $_POST["expiration_date"];
            $security_code = $_POST["security_code"];
            $amount = $_POST["amount"];
            $currency = $_POST["currency"];

            // Here you can add your payment processing logic
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="card_number">Número de tarjeta:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiration_date">Fecha de vencimiento:</label>
            <input type="text" id="expiration_date" name="expiration_date" required>

            <label for="security_code">Código de seguridad:</label>
            <input type="number" id="security_code" name="security_code" required>

            <label for="amount">Monto:</label>
            <input type="number" id="amount" name="amount" required>

            <label for="currency">Moneda:</label>
            <select id="currency" name="currency">
                <option value="$">Dólares americanos</option>
                <option value="S/">Soles peruanos</option>
                <option value="€">Euros</option>
                <option value="$CA">Dólares canadienses</option>
                <option value="$AU">Dólares australianos</option>
                <option value="$NZ">Dólares neozelandeses</option>
                <option value="$HK">Dólares de Hong Kong</option>
                <option value="$SG">Dólares de Singapur</option>
                <option value="$MX">Pesos mexicanos</option>
                <option value="$AR">Pesos argentinos</option>
                <option value="$CL">Pesos chilenos</option>
                <option value="$CO">Pesos colombianos</option>
                <option value="$BR">Reales brasileños</option>
                <option value="$VEF">Bolívares venezolanos</option>
                <option value="$UYU">Pesos uruguayos</option>
                <option value="$PYG">Guaraníes paraguayos</option>
                <option value="$PEN" selected>Soles peruanos (PEN)</option>	  
            </select>

            <input type="submit" value="Pagar">
        </form>

    </body>
    <foot>
        <?php include('PieInicio.php'); ?>
    </foot>
</html>
