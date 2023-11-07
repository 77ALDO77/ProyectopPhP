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
                    $sqlST="select Imagen from Productos where idCategoriaN2=1;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_column($result)){  
                        $imgs[]= $fila;
                    }
                ?>
                     
                <?php 
                    $sqlST="select Nombre from Productos where idCategoriaN2=1;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_column($result)){  
                        $nombres[]= $fila;
                    }
                ?>
                    
                <?php 
                    $sqlST="select Precio from Productos where idCategoriaN2=1;";
                    $result= mysqli_query($cn,$sqlST);
                    $Productos=[];
                    while($fila= mysqli_fetch_column($result)){  
                        $precios[]= $fila;
                    }
                ?>  
                    
                function rating(){
                    var rating="";
                    var star="<i class=\"fa-solid fa-star\"></i>";

                    for (var i = 1; i <=5; i++) {
                        rating=rating.concat(star);
                    }
                    return rating;
                }
                
                var consolas=<?php  echo json_encode($imgs); ?>;      
                var  nombreProduct=<?php  echo json_encode($nombres); ?>;
                var precioProduct=<?php  echo json_encode($precios); ?>;
                
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
                                            <img src="Imagenes/ImgConsolas/${consolas[i]}" alt=""/>
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
