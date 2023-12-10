<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>TECHNOGAME</title>
        <?php include('VerificarInicioSesion.php'); ?>
        <style>
            #carritoContainer {
                position: fixed;
            }
        </style>
        <script>
            var carritoAbierto = false;
            
            function cargarSlideCarrito() {
                if (!carritoAbierto) {
                    var carritoContainer = document.getElementById('carritoContainer');
                    var xhttp = new XMLHttpRequest();

                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4) {
                            if (this.status === 200) {
                                carritoContainer.innerHTML = this.responseText;
                                carritoAbierto = true;

                                // Agrega mensajes de depuración
                                console.log('Respuesta del servidor:', this.responseText);

                                iniciar();  // Llama a iniciar después de cargar el carrito

                                // Verifica si se debe cerrar y abrir el carrito
                                if (this.responseText.includes('"closeCart": true')) {
                                    ocultarCarrito();
                                    setTimeout(() => {
                                        cargarSlideCarrito();
                                    }, 300); // Espera 300 milisegundos antes de abrir el carrito nuevamente
                                }
                            } else {
                                console.error('Error al cargar el carrito:', this.statusText);
                            }
                        }
                    };

                    xhttp.open("GET", "SlideCarrito.php", true);
                    xhttp.send();
                }
            }

            function ocultarCarrito() {
                var carritoContainer = document.getElementById('carritoContainer');
                carritoContainer.innerHTML = '';
                carritoAbierto = false;
            }
            

            function restarCantidad(idProducto) {
                // Manejar la resta de cantidad sin recargar la página
                // Evitar la acción predeterminada del formulario
                event.preventDefault();
                fetch('actualizar_carrito.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `idProducto=${idProducto}&accion=restarCantidad`
                })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log('Cantidad restada con éxito');

                                // Actualizar la interfaz con la nueva cantidad
                                actualizarInterfazCarrito(data.carrito);
                            } else {
                                console.error('Error al restar la cantidad');
                            }
                        })
                        .catch(error => {
                            console.error('Error de red:', error);
                        });
            }

            function sumarCantidad(idProducto) {
                event.preventDefault();
                fetch('actualizar_carrito.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `idProducto=${idProducto}&accion=sumarCantidad`
                })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log('Cantidad sumada con éxito');
                                actualizarInterfazCarrito(data.carrito);
                            } else {
                                console.error('Error al sumar la cantidad');
                            }
                        })
                        .catch(error => {
                            console.error('Error de red:', error);
                        });
            }

            function eliminarProducto(idProducto) {
                fetch('eliminar_carrito.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `idProducto=${idProducto}&accion3=eliminarProducto`
                })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);  // Agrega esto para ver la respuesta en la consola

                            if (data.success) {
                                console.log('Producto eliminado con éxito');

                                // Actualiza la interfaz con el carrito actualizado
                                actualizarInterfazCarrito(data.carrito);
                            } else {
                                console.error('Error al eliminar el producto');
                            }
                        })
                        .catch(error => {
                            console.error('Error de red:', error);
                        });
            }
            function cargarYMostrarCarrito() {
                fetch('funciones-carrito.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'accion=agregarProductoAlCarrito'
                })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);  // Agrega esto para ver la respuesta en la consola

                            if (data.success) {
                                console.log('Producto registrado con éxito');

                                // Actualiza la interfaz con el carrito actualizado
                                actualizarInterfazCarrito(data.carrito);
                            } else {
                                console.error('Error al eliminar el producto');
                            }
                        })
                        .catch(error => {
                            console.error('Error de red:', error);
                        });
            }
            function iniciar() {
                console.log('Iniciar función ejecutada');

                // Agregar eventos a los botones sumar y restar cantidad
                document.querySelectorAll('.sumar-cantidad').forEach(function (button) {
                    button.addEventListener('click', function () {
                        sumarCantidad(button.dataset.idProducto);
                    });
                    console.log('Evento de sumar cantidad agregado');
                });

                document.querySelectorAll('.restar-cantidad').forEach(function (button) {
                    button.addEventListener('click', function () {
                        restarCantidad(button.dataset.idProducto);
                    });
                    console.log('Evento de restar cantidad agregado');
                });

                document.querySelectorAll('.btn-eliminar').forEach(function (button) {
                    button.addEventListener('click', function () {
                        eliminarProducto(button.dataset.idProducto);
                    });
                    console.log('Evento de eliminar producto agregado');
                });
            }

            function actualizarInterfazCarrito(carrito) {
                var carritoContainer = document.getElementById('carrito');
                carritoContainer.innerHTML = '';

                if (carrito.length <= 0) {
                    // Mostrar mensaje si el carrito está vacío
                    var mensajeVacio = document.createElement('div');
                    mensajeVacio.className = 'carrito';
                    mensajeVacio.innerHTML = `
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
            `;
                    carritoContainer.appendChild(mensajeVacio);
                } else {
                    // Mostrar productos en el carrito
                    var total = 0;

                    var carritoItemContainer = document.createElement('div');
                    carritoItemContainer.className = 'carrito';

    // Mover el encabezado fuera del bucle
                    carritoItemContainer.innerHTML = `
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>
    `;

                    carrito.forEach(function (producto) {
                        var subtotal = producto.Precio * producto.cantidad;  // Calcular el subtotal para este producto
                        total += subtotal;

                        var nuevoElemento = document.createElement('div');
                        nuevoElemento.className = 'carrito-item';
                        nuevoElemento.setAttribute('data-id-producto', producto.id);
                        nuevoElemento.innerHTML = `
            <div class="carrito-item" data-id-producto="${producto.id}">
                <img src="Imagenes/ImgTeclados/${producto.Imagen}" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">${producto.Nombre}</span>
                    <form>
                        <div class="selector-cantidad">
                            <button class="fa-solid fa-minus restar-cantidad" onclick="restarCantidad(${producto.id})"></button>
                            <input type="text" value="${producto.cantidad}" class="carrito-item-cantidad" readonly>
                            <button class="fa-solid fa-plus sumar-cantidad" onclick="sumarCantidad(${producto.id})"></button>
                        </div>
                    </form>
                    <span class="carrito-item-precio">S/${subtotal.toFixed(2)}</span>
                    <form>
                        <input type="hidden" name="idProducto" value="${producto.id}">
                        <input type="hidden" name="accion" value="eliminarProducto">
                        <button type="button" class="btn-eliminar" onclick="eliminarProducto('${producto.id}')">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </form>
                </div>
            </div>
        `;
                        carritoItemContainer.appendChild(nuevoElemento);
                    });

                    var carritoTotal = document.createElement('div');
                    carritoTotal.className = 'carrito-total';
                    carritoTotal.innerHTML = `
        <div class="fila">
            <strong class="msj">Tu Total</strong>
            <span class="carrito-precio-total">S/ ${total.toFixed(2)}</span>
        </div>
        <a class="btn-pagar" href="Carrito.php">Ir al Carrito <i class="fa-solid fa-bag-shopping"></i> </a>
    `;
                    carritoItemContainer.appendChild(carritoTotal);

                    carritoContainer.appendChild(carritoItemContainer);
                }
            }
        </script>
    </head>
    <body>
        <header class="Encabezado">
            <a href="index.php" class="Logo">
                <img src="Imagenes/LogoTechnoGame.jpeg" alt="Logo de la compañia"/>
                <h2 class="NombreTienda">TECHNOGAME</h2></a>

            <nav class="OpcionesEncabezado">         
                <a style="font-size: 15px" href="index.php" class="Inicio">Inicio</a>
                <a style="font-size: 15px" href="Comunidad.php" class="Comunidad">Comunidad</a>
                <a style="font-size: 15px" href="#" class="Reservar">Reservar</a>
                <a style="font-size: 15px" href="Ofertas.php" class="Ofertas">Ofertas</a>
                <a style="font-size: 15px" href="contactenos_ubiquenos.php" class="Contacto">Contacto</a>
                <a style="font-size: 15px" href="#" class="Servicio al cliente">Servicio al cliente</a>
                <a style="font-size: 15px" href="Nosotros.php" class="Comunidad">Sobre nosotros</a>
                <a style="font-size: 15px" href="InicioSesion1.php" class="InicioSesion">
                    <?php
                    // Verifica si el usuario ha iniciado sesión
                    if (isset($_SESSION['nombre'])) {
                        echo '<a style="font-size: 15px" href="#" class="InicioSesion">';
                        echo '<img src="Imagenes/InicioSesion.png"/><div>' . $_SESSION['nombre'] . '</div>';
                        echo '</a>';
                    } else {
                        echo '<a style="font-size: 15px" href="InicioSesion1.php" class="InicioSesion">';
                        echo '<img  src="Imagenes/InicioSesion.png"/><div >Mi Cuenta</div>';
                        echo '</a>';
                    }
                    ?>
                    <a style="font-size: 15px" href="Carrito.php" class="CarroCompra">
                        <img src="Imagenes/ImagenEncabezado/CarroCompra (2).png" onmouseover="cargarSlideCarrito()" value="obtenerProductosEnCarrito"><div>Su Carrito</div> </a>
            </nav>
        </header>
        <?php include('Categorias.php'); ?>

        <div id="carritoContainer"></div>

        <script>
            function cerrarSesion() {
                window.location.href = 'InicioSesion1.php';
            }
        </script>

    </body>
</html>
