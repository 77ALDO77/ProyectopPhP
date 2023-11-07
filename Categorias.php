<?php
    require_once './ConectaDB.php';
    $cn = getConexion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="CSS/Categorias.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main id="bodyCate">
     <nav class="navCateg">
        <ul class="cont-ul">
            
            <?php 
                $sqlST="select Nombre from CategoriasN1;";
                $result= mysqli_query($cn,$sqlST);
                $cateN1=[];
                while($fila= mysqli_fetch_column($result)){  
                    $cateN1[]= $fila;
                }
            ?>
            
            <?php 
            function obtenerCategN2($idCategN1,$cn){
                $sqlST="select Nombre from CategoriasN2 where idCategoriaN1=".$idCategN1.";";
                $result= mysqli_query($cn,$sqlST);
                $cateN2=[];
                while($fila= mysqli_fetch_assoc($result)){  
                    $cateN2[]= $fila['Nombre'];
                }
                return $cateN2;
            }
            ?>

            <?php 
            function obtenerCategN3($idCategN2,$cn){
                $sqlST="select Nombre from CategoriasN3 where idCategoriaN2=".$idCategN2.";";
                $result= mysqli_query($cn,$sqlST);
                $cateN3=[];
                while($fila= mysqli_fetch_assoc($result)){  
                    $cateN3[]= $fila['Nombre'];
                }
                return $cateN3;
            }
            ?>
            
            
            
            <script type="text/javascript">
                //ARRAY de todos los items y subitems del MENU
                //var catPrim=["Gaming","Funko","Colecionables","Audio","Electronica"];
                var catPrim=<?php echo json_encode($cateN1); ?>;
                var catSec=[];
               <?php 
                   $array=[];
                   for ($i = 1; $i <= 5; $i++) {
                        $datos_db = obtenerCategN2($i,$cn);
                        $subarray = $datos_db;
                        $array[] = $subarray;

                        echo "catSec.push(" . json_encode($subarray) . ");\n";
                    }
                ?>
                    
//                 Por si no llega a funcionar lo que esta entre la linea 60 a la 71
//                 usemos este fragmento comentado   
//                var catPrim=["Gaming","Funko","Colecionables","Audio","Electronica"];
//                
//                var catSec=[
//                    [ /*Gaming*/ "Consolas","Juegos","Teclados","Mando","Streaming"],
//                    [ /*Funko*/ "Funko pop","Box Collector","Pop Keychain","Peluches","Exclusivos TechnoGame"],
//                    [ /*Colecionables*/ "Banpresto","Bandai","Jakks Pacific","Chibi"],
//                    [ /*Audio*/ "Parlantes","Parlanes Gamer","Audifonos","Audifonos gamer"],
//                    [ /*Electronica*/ "Smartphones","Smartwatch","Baterias Portatiles","TV Streaming"]
//                ]; 
                    
                 
                var catTerc=[
                    [ //Gaming
                        //Consolas
                        ["Playstation 5","Playstation 4","Nintendo Switch"],
                        //Juegos 
                        ["Assassins Creed Mirage","Call of Duty: Modern Warfare II","Super Mario RPG"],
                        //Teclados 
                        ["HyperX","Logitech G","Razer"],
                        //Mando 
                        ["Mando PS5","Mando PS4","Joy Con Switch"],
                        //Streaming 
                        ["Microfonos","CAmaras","Luces Led de colores"]
                    ],
                    [ //Funko
                        //Funko pop[nada]
                        //Box Collector
                        ["Marvel Collector","DC Colecctor","Teclados","Mando","Streaming"],
                        //Pop Keychain 
                        ["Minions","Boruto","Indiana Jones"]
                        //Peluches[nada]
                        //Exclusivos TechnoGame[nada]
                    ],
                    [ //Colecionables
                        //Banpresto
                        ["Attack on Titan","Bleach","Demon Slayer"],
                        //Bandai 
                        ["Star Wars","Disney","Saint Seiya"],
                        //Jakks Pacific
                        ["Sonic The HedgeHog","Crash Bandicoot","Donkey Kong"]
                        //Chibi[nada]
                    ],
                    [ //Audio
                        //Parlantes
                        ["Bose","JBL","Xiaomi"],
                        //Parlanes Gamer 
                        ["Bose","Google","Amazon"],
                        //Audifonos 
                        ["BlackSheep","JBL","Sonic"],
                        //Audifonos gamer 
                        ["Astro","Razer","Turtle Beach"]
                    ],
                    [ //Electronica
                        //Smartphones
                        ["Xiaomi"],
                        //Smartwatch 
                        ["Xiaomi"],
                        //Baterias Portatiles[nada]
                        //TV Streaming 
                        ["Roku reproductor","Amazon Fire TV Stick 4K"]
                    ]
                ];
                
                //variables para construccion html
                var msj="";
                var str1="",str2="",str3="",str4="",str5="";
                var i=0,j=0,k=0;
    
                for ( i = 0; i<catPrim.length ; i++) {
                    
                    str1= `<li class="el-first">${catPrim[i]}
                                    <ul class="ul-second">`;
                    msj= msj.concat(str1);
                    
                    for ( j = 0; j<catSec[i].length ; j++) {
                        
                        var link="";
                        switch(catSec[i][j]){
                            case "Teclados":
                                link="CatTeclados.php";
                                break;
                            case "Consolas":
                                link="CatConsolas.php";
                                break;
                            default:
                                link="#";
                        }                     
                        str2=`<li class="el-second">
                                    <a href="${link}">${catSec[i][j]}</a>
                                    <ul class="ul-third">`;
                        msj= msj.concat(str2);
                        
                        if(Array.isArray(catTerc[i]) && Array.isArray(catTerc[i][j])){
                            
                            for (k = 0; k < catTerc[i][j].length; k++) {
                                console.log(msj);
                                str3=`<li class="el">${catTerc[i][j][k] } </li>`;
                                msj= msj.concat(str3);
                            }
                        }
                            
                        str4= `</ul></li>`;
                        msj= msj.concat(str4);
                    }
                    str5= `</ul></li>`;
                    msj= msj.concat(str5);
                }
                document.write(msj);
                console.log(msj);
            </script>
        </nav>
    </main>
</body>

</html>