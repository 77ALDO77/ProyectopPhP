<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/CatTeclados.css" rel="stylesheet" type="text/css"/>
        <!<!-- Animaciones de la cuadrilla de productos -->
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://kit.fontawesome.com/c971f825af.js" crossorigin="anonymous"></script>
   <?php include('EncabezadoInicio.php'); ?>
    </head>
    <body>
            
        <?php include('EncabezadoInicio.php'); ?>
        <div class="productContainer">
<<<<<<< HEAD
            
=======
            <script type="text/javascript">
            </script>
>>>>>>> 52edd5ce25ee69283bd02f65ee03c09eebe8b32f
            <script type="text/javascript">
                
                function rating(){
                    var rating="";
                    var star="<i class=\"fa-solid fa-star\"></i>";

                    for (var i = 1; i <=5; i++) {
                        rating=rating.concat(star);
                    }
                    return rating;
                }
                
                var teclados=["H1","H2","H3","H4",
                              "L1","L2","L3","L4",
                              "R1","R2","R3","R4"];
                          
                var  nombreProduct=[
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
                
                var precioProduct=[
                    "S/359.90","S/289.90","S/179.90","S/359.90",
                    "S/499.90","S/279.90","S/299.90","S/499.90",
                    "S/684.90","S/499.90","S/599.90","S/179.90"
                ];
                
                let numpro=0;
                var detalleProd="";
                var prod="";
                for (var i = 0; i < teclados.length; i++) {
                    movida = "flip-left";
                    
                    if(numpro%2==0){
                        movida="flip-up";
                    }else if(numpro%3==0){
                        movida="zoom-in-up";
                    }
                    
                    if(nombreProduct[i]=="Razer Huntsman Mini Mecánico Chroma Teclado - Blanco"){
                         detalleProd="Producto.php";
                    }else{detalleProd="#";}
                    
                    prod=`<div class="product">
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
                          </div>`;
        
                    
                    document.write(prod);
                }
            
            </script>
            
        </div>  
        <script>
          AOS.init();
        </script>
    </body>
    <?php include('PieInicio.php'); ?>
</html>
