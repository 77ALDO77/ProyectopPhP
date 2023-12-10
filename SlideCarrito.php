<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="CSS/StyleSlideCarrito.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once "funciones-carrito.php";
        $sentencia = obtenerProductosEnCarrito();
        if (count($sentencia) <= 0) {
            ?>
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>
                <div class="carrito-item">
                    <div class="container">
                        <h1 class="carrito-item-titulo">
                            Todavía no hay productos
                        </h1>
                        <h2 class="carrito-item-precio">
                            Visita la tienda para agregar productos a tu carrito
                        </h2>
                    </div>
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            S/ 0.00
                        </span>
                    </div>
                    <a class="btn-pagar" href="Carrito.php">Ir al Carrito <i class="fa-solid fa-bag-shopping"></i> </a>
                </div>
            </div>
        <?php } else { ?>
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>
                <?php
                $total = 0;
                foreach ($sentencia as $producto) {
                    $subtotal = $producto["precio"] * $producto["cantidad"];
                    $total += $subtotal;
                    ?>
                    <div class="carrito-item" data-id-producto="<?php echo $producto["id"]; ?>">

                        <img src="Imagenes/ImgTeclados/<?php echo $producto["imagen"] ?>" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo"><?php echo $producto["nombre"]; ?></span>
                            <div class="selector-cantidad">
                                <form id="formRestarCantidad" action="#" method="post">
                                    <input type="hidden" name="idProducto" value="<?php echo $producto["id"]; ?>">
                                    <input type="hidden" name="accion" value="restarCantidad">
                                    <button type="button" class="restar-cantidad" onclick="restarCantidad('<?php echo $producto["id"]; ?>')">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </form>
                                <input type="text" value="<?php echo $producto["cantidad"]; ?>" class="carrito-item-cantidad" readonly>
                                <form id="formSumarCantidad" action="#" method="post">
                                    <input type="hidden" name="idProducto" value="<?php echo $producto["id"]; ?>" >
                                    <input type="hidden" name="accion" value="sumarCantidad">
                                    <button type="button" class="sumar-cantidad" onclick="sumarCantidad('<?php echo $producto["id"]; ?>')">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </form>
                            </div>
                            <span class="carrito-item-precio">S/ <?php echo number_format($subtotal, 2); ?></span>
                        </div>

                        <form id="formEliminarProducto" action="#" method="post">
                            <input type="hidden" name="idProducto" value="<?php echo $producto["id"]; ?>" >
                            <input type="hidden" name="accion3" value="eliminarProducto">
                            <button type="button" class="btn-eliminar" onclick="eliminarProducto('<?php echo $producto["id"]; ?>')">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </div>
                <?php } ?>
                <div class="carrito-total">
                    <div class="fila">
                        <strong class="msj">Tu Total</strong>
                        <span class="carrito-precio-total">
                            S/ <?php echo number_format($total, 2); ?>
                        </span>
                    </div>
                    <a class="btn-pagar" href="Carrito.php">Ir al Carrito <i class="fa-solid fa-bag-shopping"></i> </a>
                </div>
            </div>
        <?php } ?>
    </body>
</html>

