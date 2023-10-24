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
                
                function rating(){
                    var rating="";
                    var star="<i class=\"fa-solid fa-star\"></i>";

                    for (var i = 1; i <=5; i++) {
                        rating=rating.concat(star);
                    }
                    return rating;
                }
                
                var consolas=["PS5_1","PS5_2","PS5_3","PS5_4",
                              "X1","X2","PS4","SD1",
                              "N1","N2","N3","N4"];
                          
                var  nombreProduct=[
                    "PlayStation 5 Consola (ranura disco) + God of War Ragnarok",
                    "PlayStation 5 con ranura de disco + FC 24",
                    "PlayStation 5 Consola – Edición Spider-Man 2",
                    "PlayStation VR2 + Horizon: Call of the Mountain",
                    
                    "Xbox Series X Consola 1 TB + Diablo IV", 
                    "Xbox Series X Consola 1 TB",
                    "PlayStation 4 Consola 1TB + God of War Ragnarok",
                    "Steam Deck Consola Portátil - 64 GB",
                    
                    "Nintendo Switch OLED Consola – Edición Mario Red", 
                    "Nintendo Switch OLED Consola - Edición Zelda Tears of the Kingdom",
                    "Nintendo Switch Lite Consola (Azul)",
                    "Nintendo Switch Consola (Joy-Con Rojo/Azul Neón)"
                ];
                
                var precioProduct=[
                    "S/3599.90","S/3499.90","S/3999.90","S/3899.90",
                    "S/2899.90","S/2899.90","S/2399.90","S/3499.90",
                    "S/2199.90","S/2099.90","S/1199.90","S/1749.90"
                ];
                
                let numpro=0;
                var prod="";
                for (var i = 0; i < consolas.length; i++) {
                    movida = "flip-left";
                    
                    if(numpro%2==0){
                        movida="flip-up";
                    }else if(numpro%3==0){
                        movida="zoom-in-up";
                    }
                    
                    
                    prod=`<div class="product">
                                <div class="productImg" data-aos="${movida}" data-aos-duration="500">
                                    <a href="#">
                                        <div class="image">
                                            <img src="Imagenes/ImgConsolas/${consolas[i]}.jpg" alt=""/>
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
        
        
        
        <?php include('PieInicio.php'); ?>
        
        <script>
          AOS.init();
        </script>
    </body>
</html>
