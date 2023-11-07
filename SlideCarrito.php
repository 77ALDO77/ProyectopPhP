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
                    $total += $producto["precio"];
                    ?>
                    <div class="carrito-item">
                        <img src="Imagenes/ImgTeclados/<?php echo $producto["imagen"] ?>" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo"><?php echo $producto["nombre"]; ?></span>
                            <div class="selector-cantidad">
                                <i class="fa-solid fa-minus restar-cantidad" ></i>
                                <input type="text" value="1" class="carrito-item-cantidad" disabled>
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                            </div>
                            <span class="carrito-item-precio">S/ <?php echo $producto["precio"]; ?></span>
                        </div>
                        <button class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <?php } ?>
                <div class="carrito-total">
                    <div class="fila">
                        <strong class="msj">Tu Total</strong>
                        <span class="carrito-precio-total">
                            S/ <?php echo $total; ?>
                        </span>
                    </div>
                    <a class="btn-pagar" href="Carrito.php">Ir al Carrito <i class="fa-solid fa-bag-shopping"></i> </a>
                </div>
            </div>
        <?php } ?>
    </body>
    <script>
        // Funciones para sumar y restar cantidad

        // Función para sumar cantidad
        function sumarCantidad(event) {
            var buttonClicked = event.target;
            var selector = buttonClicked.parentElement;
            var cantidadInput = selector.querySelector('.carrito-item-cantidad');
            var cantidadActual = parseInt(cantidadInput.value);
            cantidadActual++;
            cantidadInput.value = cantidadActual;
        }

        // Función para restar cantidad
        function restarCantidad(event) {
            var buttonClicked = event.target;
            var selector = buttonClicked.parentElement;
            var cantidadInput = selector.querySelector('.carrito-item-cantidad');
            var cantidadActual = parseInt(cantidadInput.value);
            if (cantidadActual > 1) {
                cantidadActual--;
                cantidadInput.value = cantidadActual;
            }
        }

        // Agregar eventos a los botones sumar y restar cantidad
        var botonesSumarCantidad = document.querySelectorAll('.sumar-cantidad');
        botonesSumarCantidad.forEach(function (button) {
            button.addEventListener('click', sumarCantidad);
        });

        var botonesRestarCantidad = document.querySelectorAll('.restar-cantidad');
        botonesRestarCantidad.forEach(function (button) {
            button.addEventListener('click', restarCantidad);
        });
    </script>
</html>

