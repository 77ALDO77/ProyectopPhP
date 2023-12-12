<?php
    require_once './ConectaDB.php';
    $cn = getConexion();
?>

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
                    
                <?php 
                    $sqlST="select Imagen from Productos where idCategoriaN2=3;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_assoc($result)){  
                        $imgs[]= $fila["Imagen"];
                    }
                ?>
                    
                <?php 
                    $sqlST="select id from Productos where idCategoriaN2=3;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_assoc($result)){  
                        $ids[]= $fila["id"];
                    }
                ?> 
                    
                <?php 
                    $sqlST="select Nombre from Productos where idCategoriaN2=3;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_assoc($result)){  
                        $nombres[]= $fila["Nombre"];
                    }
                ?>
                    
                <?php 
                    $sqlST="select Precio from Productos where idCategoriaN2=3;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_assoc($result)){  
                        $precios[]= $fila["Precio"];
                    }
                ?>    
                
                function rating() {
                    var rating = "";
                    var star = "<i class=\"fa-solid fa-star\"></i>";
                    for (var i = 1; i <= 5; i++) {
                        rating = rating.concat(star);
                    }
                    return rating;
                }
                

                var teclados = <?php  echo json_encode($imgs); ?>;
                var idProductos = <?php  echo json_encode($ids); ?>;
                var nombreProduct =<?php  echo json_encode($nombres); ?> ;
                var precioProduct = <?php  echo json_encode($precios); ?>;

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
                                            <img src="Imagenes/ImgTeclados/${teclados[i]}" alt=""/>
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
