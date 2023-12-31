<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito de Compra</title>
        <link href="CSS/StyleCarrito.css" rel="stylesheet" type="text/css"/>
       <?php include('EncabezadoInicio.php'); ?>
    </head>

    <body>
        <?php
            include_once "funciones-carrito.php";
            $productosEnCarrito = obtenerProductosEnCarrito();
            $subtotal = 0;
            $total = 0;
        ?>
        <div class="container">
            <?php if (count($productosEnCarrito) <= 0) { ?>
                <h2 class="title-carro">CARRITO DE COMPRA</h2>
                <div class="container-carro">
                    <div class="articulos-carro">
                        <h2>No hay artículos seleccionados</h2>
                        <a class="btnvolver" href="index.php">VOLVER A LA PÁGINA DE INICIO</a>
                    </div>
                </div>
            <?php } else { ?>
                <h2 class="title-carro">CARRITO DE COMPRA</h2>
                <div class="container-carro">
                    
                    <?php foreach ($productosEnCarrito as $producto) { 
                        $subtotalProducto = $producto["precio"] * $producto["cantidad"];
                        $subtotal += $subtotalProducto;
                        $total += $subtotalProducto;
                    ?>
                        <div class="carrito-item">
                            <img src="Imagenes/ImgProductos/<?php echo $producto["imagen"] ?>" width="80px" alt="">
                            <div class="carrito-item-detalles">
                                <span class="carrito-item-titulo1"><?php echo $producto["nombre"]; ?></span>
                                <span class="carrito-item-cantidad">Cantidad: <?php echo $producto["cantidad"]; ?></span>
                                <span class="carrito-item-precio1">S/ <?php echo $subtotalProducto; ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
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
                    <div class="precio-total">S/<?php echo $total; ?></div>
                </div>
                <a class="btncomprar" href="FrmPago.php">COMPRAR</a>
                <a class="btnseguircomprando" href="CatTeclados.php">SEGUIR COMPRANDO</a> 
            </div>
        </div>
        <?php include('PieInicio.php'); ?>
    </body>
   <?php include('PieInicio.php'); ?>
</html>
