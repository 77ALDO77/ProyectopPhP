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
    <?php include('EncabezadoInicio.php'); ?>   
    
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
    

    <?php include('PieInicio.php'); ?>
    
</body>
</html>

