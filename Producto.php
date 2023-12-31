<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Producto - Tienda en línea</title>
        <link href="CSS/estilo-Producto.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php include('EncabezadoInicio.php'); ?>
    </head>
    <body>
        <?php
        require_once './funciones-carrito.php';
        ?>
        <?php foreach ($resultado as $producto) { ?>
            <div class="product-container">
                <div class="item">
                    <div class="product-image">
                        <img src="Imagenes/ImgProductos/<?php echo $producto["imagen"] ?>" alt="" class="img-item">
                    </div>
                    <div class="product-details">
                        <h2 class="titulo-item"><?php echo $producto["nombre"]; ?></h2>
                        <span class="precio-item">S/ <?php echo $producto["precio"]; ?></span>
                        <p class="description">Ingrese a una nueva dimensión mortal con el Razer Huntsman Mini, un teclado para juegos al 60 % con interruptores ópticos Razer de última generación.
                            Altamente portátil e ideal para configuraciones simplificadas, es hora de experimentar una actuación ultrarrápida en nuestro factor de forma más compacto hasta el momento.</p>
                        <p>Características:</p>
                        <ul>
                            <li>DISPONIBILIDAD: DISPONIBLE</li>
                            <li>SKU 1080535</li>
                        </ul>
                    </div>

                    <form id="agregarProductoForm" method="post">
                        <input type="hidden" value="agregarProductoAlCarrito" name="accion1"/>
                        <input type="hidden" value="<?php echo $producto['id']; ?>" name="id"/>
                        <button class="boton-item" type="submit">Agregar al Carrito</button>
                    </form>
                    <form id="ProductoCertificado" action="generarCertificado.php" method="GET">
                        <button type="submit" class="boton-item">Ver Certificado</button>
                    </form>

                </div>
            </div>
        <?php } ?>
        <div class="inferior">
            <div class="tabs">
                <div class="tab" onclick="openTab('details')">Detalles</div>
                <div class="tab" onclick="openTab('video')">Video</div>
                <div class="tab" onclick="openTab('reviews')">Reseñas</div>
            </div>
            <!-- Contenido de las pestañas -->
            <div id="details" class="tab-content">
                <h3>Detalles del producto</h3>
                <p>
                    <?php
                    $titulo = "Razer Huntsman Mini";
                    $descripcion = "Ingrese a una nueva dimensión mortal con el Razer Huntsman Mini, un teclado para juegos al 60 % con interruptores ópticos Razer de última generación. Altamente portátil e ideal para configuraciones simplificadas, es hora de experimentar una actuación ultrarrápida en nuestro factor de forma más compacto hasta el momento.";

                    $factorForma = "60% FACTOR DE FORMA*";
                    $factorFormaDescripcion = "El Razer Huntsman Mini no tiene la fila de funciones, el grupo de inicio y el teclado numérico de un teclado tradicional de tamaño completo, pero no pierde funcionalidad porque aún se puede acceder a todas estas entradas a través de funciones secundarias y accesos directos. Ideal para configuraciones minimalistas o más pequeñas donde el espacio en el escritorio es una prioridad, su construcción compacta también significa que se desplaza bien y es más fácil de colocar cuando se juega, lo que le permite jugar con mayor comodidad.";

                    $teclasDescripcion = "Diseñadas para una mayor durabilidad, las teclas de este teclado para juegos al 60 % tienen una textura de primera calidad que nunca se degradará a un acabado brillante ni perderá la etiqueta con el uso intenso. Para una referencia más sencilla al ejecutar comandos y teclas de acceso rápido, también se han agregado funciones secundarias impresas al costado.";

                    $preajustes = "PREAJUSTES DE MEMORIA E ILUMINACIÓN A BORDO";
                    $preajustesDescripcion = "Lleve su configuración a cualquier lugar mientras almacena y activa hasta 5 perfiles de teclado sin necesidad de software, y personalícelo aún más con un conjunto precargado de efectos de iluminación Razer Chroma RGB.";

                    $tipoC = "TIPO C DESMONTABLE";
                    $tipoCDescripcion = "Desempaque, conecte y juegue con el mínimo esfuerzo para todas sus fiestas LAN y torneos. Un pestillo de cable asegura que permanezca conectado de forma segura durante el juego.";

                    $construccion = "CONSTRUCCIÓN DE ALUMINIO";
                    $construccionDescripcion = "La carcasa de este teclado para juegos al 60 % es lo suficientemente resistente como para soportar largas horas de uso intenso y regular, y tiene un acabado mate limpio.";

                    $impulsadoPor = "IMPULSADO POR";
                    $impulsadoPorDescripcion = "Disfruta de una mayor inmersión con efectos de iluminación dinámicos que ocurren mientras juegas en más de 150 títulos integrados con Chroma, como Fortnite, Apex Legends, Warframe y más.";
                    ?>
                </p>
                <div>
                    <h1><?php echo $titulo; ?></h1>
                    <p><?php echo $descripcion; ?></p>

                    <h2><?php echo $factorForma; ?></h2>
                    <p><?php echo $factorFormaDescripcion; ?></p>

                    <h2>Teclas DoubleShot PBT con Funciones Secundarias Impresas en el Lado</h2>
                    <p><?php echo $teclasDescripcion; ?></p>

                    <h2><?php echo $preajustes; ?></h2>
                    <p><?php echo $preajustesDescripcion; ?></p>

                    <h2><?php echo $tipoC; ?></h2>
                    <p><?php echo $tipoCDescripcion; ?></p>

                    <h2><?php echo $construccion; ?></h2>
                    <p><?php echo $construccionDescripcion; ?></p>

                    <h2><?php echo $impulsadoPor; ?></h2>
                    <p><?php echo $impulsadoPorDescripcion; ?></p>
                </div>
            </div>

            <div id="video" class="tab-content">
                <h3>Razer Huntsman Mini</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BpFhsXHFMlQ?si=n6TOihkDz43U0mcL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div id="reviews" class="tab-content">
                <h3>Reseñas del producto</h3>
                <p>Aquí van las reseñas de los clientes...</p>
            </div>
        </div>
        <!--<div class="item">
                <span class="titulo-item">Razer Huntsman Mini Mecánico Chroma Teclado - Blanco</span>
                <img src="Imagenes/Imagenes_Prdct/image1.jpg" alt="" class="img-item">
                <span class="precio-item">S/499.90</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>-->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var form = document.getElementById("agregarProductoForm");
                form.addEventListener("submit", function (event) {
                    event.preventDefault(); // Evitar el comportamiento predeterminado de enviar el formulario

                    var formData = new FormData(form);

                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "funciones-carrito.php", true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                // Manejar la respuesta del servidor si es necesario
                                console.log(xhr.responseText);
                            } else {
                                // Manejar errores de la solicitud si es necesario
                                console.error('Ha ocurrido un error');
                            }
                        }
                    };
                    xhr.send(formData);
                });
            });
        </script>
        <script>
            function openTab(tabName) {
                var i;
                var tabContent = document.getElementsByClassName('tab-content');
                var tabs = document.getElementsByClassName('tab');
                for (i = 0; i < tabContent.length; i++) {
                    tabContent[i].style.display = 'none';
                }
                for (i = 0; i < tabs.length; i++) {
                    tabs[i].classList.remove('active');
                }
                document.getElementById(tabName).style.display = 'block';
                event.currentTarget.classList.add('active');
            }
        </script>
    </body>
    <?php include('PieInicio.php'); ?>
</html>
