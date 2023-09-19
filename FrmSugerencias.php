<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sugerencias</title>
    <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/PieInicio.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/StyleFrmSugerencias.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/c971f825af.js" crossorigin="anonymous"></script>
    
</head>

<body>
    
   <header class="Encabezado">
       <a href="index.php" class="Logo">
            <img src="Imagenes/LogoTechnoGame.jpeg" alt="Logo de la compañia"/>
            <h2 class="NombreTienda">TECHNOGAME</h2></a>

       <nav  class="OpcionesEncabezado">
               <a href="#" class="Inicio">Inicio</a>
               <a href="#" class="Comunidad">Comunidad</a>
               <a href="#" class="Reservar">Reservar</a>
               <a href="#" class="Ofertas">Ofertas</a>
               <a href="#" class="Contacto">Contacto</a>
               <a href="#" class="Servicio al cliente">Servicio al cliente</a>
               <a href="#" class="Comunidad">Sobre nosotros</a>

       </nav>
    </header>
    
    <!-- CONTENIDO Formulario Reclamaciones-->
    <main> 

        <form class="form" action="ProcesaForms.php" method="POST">
            <div class="title-block">
                <h1 class="form_title">Formulario de Sugerencias</h1>
            </div>

            <p class="form_paragraph">Agradecemos que puedas dejarnos us sugerencias</p><br><br>

            <div class="form_container">
                <input type="text" id="nombre" class="input" placeholder=" " required="">   
                <label for="nombre" class="label"><i class="fa-solid fa-user"></i> Nombres y Apellidos:</label>
            </div>

            <div class="form_container">
                <input type="email" id="email" class="input" placeholder=" " required="">   
                <label for="email" class="label"><i class="fa-solid fa-envelope"></i> Correo:</label>
            </div>

            <div class="form_container">
                <input type="text" id="numero" class="input" placeholder=" " required="">   
                <label for="numero" class="label"><i class="fa-solid fa-phone"></i> Celular:</label>
            </div>

            <div class="form_container">
                <textarea id="sugerencia" rows="4" cols="50" placeholder="" required=" "></textarea>  
                <label for="sugerencia" class="label"><i class="fa-solid fa-comment"></i> Detalle de la Sugerencia:</label>
            </div>

            <button class="btn"><i class="fa-solid fa-share"></i> Enviar</button>
        </form>
    </main> 
    
      <footer >
        <div class="PieDePagina">
            <div class="contacto">
                <h3><a href="#">CONTÁCTENOS</a></h3>
                <hr></hr>
                <h4><strong><h4>Redes Sociales</h4></strong></h4>
                <hr></hr> 
                <h4><p><strong>Teléfono</strong></p></h4>
                <ul>
                    <li>(+51) 964593567</li>
                </ul>
                <hr> </hr>
                <h4><p><strong>Horarios</strong></p></h4>
                <ul><li>Lun-Sab: 8:00 am - 22:00 pm</li></ul>
                <hr></hr> 
                <h4><p><strong>Email</strong></p></h4>
                <ul>  
                    <li>TechnoGame@gmail.com</li
                    </ul>
               
            </div>

            <div class="enlaces-importantes">
                <h3>ENLACES IMPORTANTES</h3>
                <hr> </hr>
                <h4><a href="FrmReclamos.php">Libro de reclamaciones</a></h4>
                <hr></hr>
                <h4><a href="FrmSugerencias.php">Sugerencias</a></h4>
            </div> 

            <div class="Informacion">
                <h3><strong>INFORMACIÓN</strong></h3>
                <hr></hr>
                <h4><strong><a href="#">Nosotros</a></strong></h4>
                 <hr></hr>  
                <h4><strong><a href="#">Nuestras tiendas</a></strong></h4>
                <ul>
                <li>Plaza Norte</li>
                <li>Mega Plaza</li>
                <li>Real Plaza</li>
                </ul>
                <hr></hr>
                <h4><strong><a href="#">¿Cómo comprar?</a></strong></h4>
                <hr></hr>
                <h4><strong><a href="#">Preguntas frecuentes</a></strong></h4>
            </div>
        </div>
        
    </footer>  
    
</body>
</html>

