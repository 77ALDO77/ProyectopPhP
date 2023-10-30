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
        <div class="product-container">
            <div class="item">
            <div class="product-image">
                <img src="Imagenes/Imagenes_Prdct/image1.jpg" alt="" class="img-item">
            </div>
            <div class="product-details">
                <h2 class="titulo-item">Razer Huntsman Mini Mecánico Chroma Teclado - Blanco</h2>
                <span class="precio-item">S/499.90</span>
                <p class="description">Ingrese a una nueva dimensión mortal con el Razer Huntsman Mini, un teclado para juegos al 60 % con interruptores ópticos Razer de última generación.
                    Altamente portátil e ideal para configuraciones simplificadas, es hora de experimentar una actuación ultrarrápida en nuestro factor de forma más compacto hasta el momento.</p>
                <p>Características:</p>
                <ul>
                    <li>DISPONIBILIDAD: DISPONIBLE</li>
                    <li>SKU 1080535</li>
                    <!-- Agrega más características si es necesario -->
                </ul>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
                </div>
                </div>
        <!--</div>-->
        <!--<div class="item">
            <div class="fe">
                <span class="titulo-item">Razer Huntsman Mini Mecánico Chroma Teclado - Blanco</span>
                <img src="Imagenes/Imagenes_Prdct/image1.jpg" alt="" class="img-item">
                <span class="precio-item">S/499.90</span>
                <button class="boton-item">Agregar al Carrito</button>
                 </div>
            </div>-->
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
        <script>
            var carritoVisible = false;

//Espermos que todos los elementos de la pàgina cargen para ejecutar el script
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function ready(){
    
    //Agregremos funcionalidad a los botones eliminar del carrito
    var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
    for(var i=0;i<botonesEliminarItem.length; i++){
        var button = botonesEliminarItem[i];
        button.addEventListener('click',eliminarItemCarrito);
    }

    //Agrego funcionalidad al boton sumar cantidad
    var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
    for(var i=0;i<botonesSumarCantidad.length; i++){
        var button = botonesSumarCantidad[i];
        button.addEventListener('click',sumarCantidad);
    }

     //Agrego funcionalidad al buton restar cantidad
    var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
    for(var i=0;i<botonesRestarCantidad.length; i++){
        var button = botonesRestarCantidad[i];
        button.addEventListener('click',restarCantidad);
    }

    //Agregamos funcionalidad al boton Agregar al carrito
    var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
    for(var i=0; i<botonesAgregarAlCarrito.length;i++){
        var button = botonesAgregarAlCarrito[i];
        button.addEventListener('click', agregarAlCarritoClicked);      
    }

    //Agregamos funcionalidad al botón comprar
    document.getElementsByClassName('btn-pagar')[0].addEventListener('click',pagarClicked)
}
//Eliminamos todos los elementos del carrito y lo ocultamos
function pagarClicked(){
    alert("Gracias por la compra");
    //Elimino todos los elmentos del carrito
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    while (carritoItems.hasChildNodes()){
        carritoItems.removeChild(carritoItems.firstChild);
    }
    actualizarTotalCarrito();
    ocultarCarrito();
}
//Funciòn que controla el boton clickeado de agregar al carrito
function agregarAlCarritoClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName('precio-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;
    console.log(imagenSrc);

    agregarItemAlCarrito(titulo, precio, imagenSrc);

    hacerVisibleCarrito();
}

//Funcion que hace visible el carrito
function hacerVisibleCarrito(){
    carritoVisible = true;
    var carrito = document.getElementsByClassName('carrito')[0];
    carrito.style.marginRight = '0';
    carrito.style.opacity = '1';
    var items =document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '60%';
}

//Funciòn que agrega un item al carrito
function agregarItemAlCarrito(titulo, precio, imagenSrc){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

    //controlamos que el item que intenta ingresar no se encuentre en el carrito
    var nombresItemsCarrito = itemsCarrito.getElementsByClassName('carrito-item-titulo');
    for(var i=0;i < nombresItemsCarrito.length;i++){
        if(nombresItemsCarrito[i].innerText===titulo){
            alert("El item ya se encuentra en el carrito");
            return;
        }
    }

    var itemCarritoContenido = `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>
                <div class="selector-cantidad">
                    <i class="fa-solid fa-minus restar-cantidad"></i>
                    <input type="text" value="1" class="carrito-item-cantidad" disabled>
                    <i class="fa-solid fa-plus sumar-cantidad"></i>
                </div>
                <span class="carrito-item-precio">${precio}</span>
            </div>
            <button class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `;
    item.innerHTML = itemCarritoContenido;
    itemsCarrito.append(item);

    //Agregamos la funcionalidad eliminar al nuevo item
     item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemCarrito);

    //Agregmos al funcionalidad restar cantidad del nuevo item
    var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
    botonRestarCantidad.addEventListener('click',restarCantidad);

    //Agregamos la funcionalidad sumar cantidad del nuevo item
    var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
    botonSumarCantidad.addEventListener('click',sumarCantidad);

    //Actualizamos total
    actualizarTotalCarrito();
}
//Aumento en uno la cantidad del elemento seleccionado
function sumarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual++;
    selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
    actualizarTotalCarrito();
}
//Resto en uno la cantidad del elemento seleccionado
function restarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual--;
    if(cantidadActual>=1){
        selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
        actualizarTotalCarrito();
    }
}

//Elimino el item seleccionado del carrito
function eliminarItemCarrito(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    //Actualizamos el total del carrito
    actualizarTotalCarrito();

    //la siguiente funciòn controla si hay elementos en el carrito
    //Si no hay elimino el carrito
    ocultarCarrito();
}
//Funciòn que controla si hay elementos en el carrito. Si no hay oculto el carrito.
function ocultarCarrito(){
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    if(carritoItems.childElementCount==0){
        var carrito = document.getElementsByClassName('carrito')[0];
        carrito.style.marginRight = '-100%';
        carrito.style.opacity = '0';
        carritoVisible = false;
    
        var items =document.getElementsByClassName('contenedor-items')[0];
        items.style.width = '100%';
    }
}
//Actualizamos el total de Carrito
function actualizarTotalCarrito(){
    //seleccionamos el contenedor carrito
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
    var total = 0;
    //recorremos cada elemento del carrito para actualizar el total
    for(var i=0; i< carritoItems.length;i++){
        var item = carritoItems[i];
        var precioElemento = item.getElementsByClassName('carrito-item-precio')[0];
        //quitamos el simobolo peso y el punto de milesimos.
        var precio = parseFloat(precioElemento.innerText.replace('S/',''));
        var cantidadItem = item.getElementsByClassName('carrito-item-cantidad')[0];
        console.log(precio);
        var cantidad = cantidadItem.value;
        total = total + (precio * cantidad);
    }
    total = Math.round(total * 100)/100;

    document.getElementsByClassName('carrito-precio-total')[0].innerText = 'S/'+total.toLocaleString("es");

}
        </script>
    </body>
    <?php include('PieInicio.php'); ?>
</html>
