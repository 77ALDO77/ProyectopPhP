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
       
    <?php include('EncabezadoInicio.php'); ?>
    
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
    
    
    <?php include('PieInicio.php'); ?>
    
</body>
</html>

