<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito de Compra</title>
        <link href="CSS/StyleCarrito.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php include('EncabezadoInicio.php'); ?>
    <body>
        <div class="container">
            <h2 class="title-carro">CARRITO DE COMPRA</h2>
            <div class="container-carro">
                <div class="articulos-carro">
                    <h2>No hay articulos seleccionados</h2>
                    <div class="btnvolver" href="Inicio.php">VOLVER A LA PÁGINA DE INICIO</div>
                </div>
            </div>
            <div class="container-metodopago">
                <h2 class="title-metodopago">Métodos de Pago</h2>
                <div class="descrip-metodopago">Aceptamos los siguientes métodos de pago seguro:</div>
                <div class="icono-metodopago">
                    <img src="Imagenes/ImagenesCarrito/payment_visa.png" alt=""/>
                    <img src="Imagenes/ImagenesCarrito/payment_mastercard.png" alt=""/>
                    <img src="Imagenes/ImagenesCarrito/payment_pagoefectivo.png" alt=""/>
                </div>
            </div>
            <div class="container-compra">
                <div class="total">
                <div>Total a pagar</div>
                <div class="precio-total">S/ 0.00</div>
                </div>
                <div class="btncomprar">COMPRAR</div>
                <div class="btnseguircomprando">SEGUIR COMPRANDO</div>
            </div>
        </div>
    </body>
    <?php include('PieInicio.php'); ?>
</html>
