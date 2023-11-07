<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/CatTeclados.css" rel="stylesheet" type="text/css"/>
        <!<!-- Animaciones de la cuadrilla de productos -->

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://kit.fontawesome.com/c971f825af.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('EncabezadoInicio.php'); ?>
        <div class="productContainer">

            <script type="text/javascript">
                function rating() {
                    var rating = "";
                    var star = "<i class=\"fa-solid fa-star\"></i>";
                    for (var i = 1; i <= 5; i++) {
                        rating = rating.concat(star);
                    }
                    return rating;
                }

                var teclados = ["H1", "H2", "H3", "H4",
                    "L1", "L2", "L3", "L4",
                    "R1", "R2", "R3", "R4"];
                var idProductos = ["1", "2", "3", "4",
                    "5", "6", "7", "8",
                    "9", "10", "11", "12"];
                var nombreProduct = [
                    "Hyperx Alloy Origins 60 Teclado Mecánico - Switch Aqua",
                    "Hyperx Alloy MKW100 Teclado Mecánico RBG - Switch RED",
                    "HyperX Teclado Alloy Core RGB",
                    "HyperX Teclado Alloy Origins 60 BK",
                    "Logitech G713 TKL Aurora Teclado Mecánico RGB Lineal - Blanco",
                    "Logitech G413 TKL Teclado Mecánico - Negro",
                    "Logitech Mecánico G413 SE Teclado - Negro",
                    "Logitech G Pro Teclado Mecánico - League of Legends",
                    "Razer Huntsman V2 TKL Purple Switch Teclado - Negro",
                    "Razer Huntsman Mini Mecánico Chroma Teclado - Blanco",
                    "Razer Blackwidow V3 Halo Infinite Mech Teclado Green Switch",
                    "Razer Cynosa V2 Membrana SP Chroma Black"
                ];
                var precioProduct = [
                    "S/359.90", "S/289.90", "S/179.90", "S/359.90",
                    "S/499.90", "S/279.90", "S/299.90", "S/499.90",
                    "S/684.90", "S/499.90", "S/599.90", "S/179.90"
                ];

                let numpro = 0;
                var detalleProd = "";
                var prod = "";
                for (var i = 0; i < teclados.length; i++) {
                    movida = "flip-left";
                    if (numpro % 2 == 0) {
                        movida = "flip-up";
                    } else if (numpro % 3 == 0) {
                        movida = "zoom-in-up";
                    }

                    if (nombreProduct[i] == "Razer Huntsman Mini Mecánico Chroma Teclado - Blanco") {
                        detalleProd = "Producto.php";
                    } else {
                        detalleProd = "#";
                    }
                    prod = `<div class="product">
                                <div class="productImg" data-aos="${movida}" data-aos-duration="500">
                                    <a href="${detalleProd}">
                                        <div class="image">
                                            <img src="Imagenes/ImgTeclados/${teclados[i]}.png" alt=""/>
                                        </div>
                                    </a>
                                </div>
                                <div class="productInfo">
                                    <div><span class="status">Disponible</span></div>
                                    <div><p class="productName">${nombreProduct[i]}</p></div>
                                    <div class="rating">${rating()}</div>
                                    <div><span class="price">${precioProduct[i]}</span></div>
                                </div>
                                <form action="Producto.php" method="post">
    <input type="hidden" value="obtenerProducto" name="accion"/>
    <input type="hidden" value="${idProductos[i]}" name="id"/>
    <button class="btndetalles" type="submit">Detalles</button>
</form>
        <form onsubmit="agregarAlCarrito(event, ${idProductos[i]})">
        <input type="hidden" value="agregarProductoAlCarrito" name="accion1"/>
        <input type="hidden" value="${idProductos[i]}" name="id"/>
        <button class="btnagregar" type="submit">Agregar al Carrito</button>
    </form>
                          </div>`;
                    document.write(prod);
                }
            </script>
        </div>    
        <script>
            function agregarAlCarrito(event, id) {
        event.preventDefault();
        const formData = new FormData();
        formData.append('accion1', 'agregarProductoAlCarrito');
        formData.append('id', id);

        fetch('funciones-carrito.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log(data); // Maneja la respuesta según sea necesario
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
            AOS.init();
        </script>
    </body>
    <?php include('PieInicio.php'); ?>
</html>
