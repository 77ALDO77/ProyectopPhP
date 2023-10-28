<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
    <title>TECHNOGAME</title>
    
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
                   <img src="Imagenes/InicioSesion.png"/> <div>Mi Cuenta</div></a> 
                   <a style="font-size: 15px" href="Carrito.php" class="CarroCompra">
                   <img src="Imagenes/ImagenEncabezado/CarroCompra (2).png"/><div>Su Carrito</div> </a>
           </nav>
            
        </header>
           <?php include('Categorias.php'); ?>
      

</body>
</html>
