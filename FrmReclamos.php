<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/PieInicio.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/StyleFrmReclamos.css" rel="stylesheet" type="text/css"/>
    <title>Libro de Reclamaciones</title>
</head>
<body>
       
    <header>
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
                <h1 class="form_title">Libro de Reclamaciones</h1>
            </div>
            
            <fieldset class="field">
               
                    <legend class="legend">Datos del consumidor reclamante</legend><br>
            
                <div class="form_container">
                    <input type="text" id="nombre" class="input" placeholder=" " required="">   
                    <label for="nombre" class="label"><i class="fa-solid fa-user"></i> Nombres y Apellidos:</label>
                </div>

                <div class="form_container">
                    <input type="text" id="domicilio" class="input" placeholder=" " required="">   
                    <label for="domicilio" class="label"><i class="fa-solid fa-envelope"></i> Domicilio:</label>
                </div>

                <div class="form_container">
                    <input type="text" id="dni" class="input" placeholder=" " required="">   
                    <label for="dni" class="label"><i class="fa-solid fa-envelope"></i> DNI:</label>
                </div>

                <div class="form_container">
                    <input type="email" id="email" class="input" placeholder=" " required="">   
                    <label for="email" class="label"><i class="fa-solid fa-envelope"></i> Correo:</label>
                </div>

                <div class="form_container">
                    <input type="text" id="numero" class="input" placeholder=" " required="">   
                    <label for="numero" class="label"><i class="fa-solid fa-phone"></i> Celular:</label>
                </div>

            </fieldset><br>
            
            <fieldset>
                <legend class="legend">Identificación del bien contratado</legend>
                <label for="tipoBien" class="selectLbl"><i class="fa-solid fa-phone"></i> Tipo de Bien:</label><br>
                <select id="tipoBien" class="select">
                    <option selected="selected" value="">Seleccione</option>
                    <option value="Producto">PRODUCTO</option>
                    <option value="Servicio">SERVICIO</option>
                </select><br><br>

                <br><div class="form_container">
                    <input type="text" id="monto" class="input" placeholder=" " required="">   
                    <label for="monto" class="label"><i class="fa-solid fa-phone"></i> Monto Reclamado(S/.):</label>
                </div>

                <div class="form_container">
                    <input type="text" id="descripcion" class="input" placeholder=" " required="">   
                    <label for="descripcion" class="label"><i class="fa-solid fa-phone"></i> Descripción:</label>
                </div>

            </fieldset><br> 
            
            <fieldset>
                <legend class="legend">Detalle de la relamación y pedido del consumidor</legend>
                <label for="tipoReclamo" class="selectLbl"><i class="fa-solid fa-phone"></i> Tipo de Reclamación:</label><br>
                <select id="tipoReclamo" class="select">
                    <option selected="selected" value="">Seleccione</option>
                    <option value="Reclamo">RECLAMO</option>
                    <option value="Queja">QUEJA</option>
                </select><br><br>

                <br><div class="form_container">
                    <input type="text" id="detalle" class="input" placeholder=" " required="">   
                    <label for="detalle" class="label"><i class="fa-solid fa-phone"></i> Detalle:</label>
                </div>

                <div class="form_container">
                    <input type="text" id="pedido" class="input" placeholder=" " required="">   
                    <label for="pedido" class="label"><i class="fa-solid fa-phone"></i> Pedido:</label>
                </div>

                
            </fieldset><br>
            
 

            <div class="btnRow">
                
                <button class="btn"><i class="fa-solid fa-share"><span></span>
                    
                    </i> Enviar Hoja de Reclamación</button>
                <button class="btn" onclick="window.print();"><span></span>
                    <i class="fa-solid fa-share"></i> Imprimir</button>
                
            </div>
            
        </form>
    </main>
    
    
    <footer>
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
                <h4><a href="FrmReclamaciones.php">Libro de reclamaciones</a></h4>
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

