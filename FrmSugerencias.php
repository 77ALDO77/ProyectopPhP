<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sugerencias</title>
    <link href="CSS/StyleFrmSugerencias.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    
        <div class="form_group">
            <form class="form" action="ProcesaForms.php" method="POST">
                <h1 class="form_title">Formulario de Sugerencias</h1>
                <p class="form_paragraph">Por favor, déjanos tus sugerencias:</p>
            
                <div class="form_container">
                    <input type="text" id="nombre" class="input" placeholder=" " required="">   
                    <label for="nombre" class="label">Nombres y Apellidos:</label>
                </div>

                <div class="form_container">
                    <input type="email" id="email" class="input" placeholder=" " required="">   
                    <label for="email" class="label">Correo:</label>
                </div>

                <div class="form_container">
                    <input type="text" id="numero" class="input" placeholder=" " required="">   
                    <label for="numero" class="label">Celular:</label>
                </div>

                <div class="form_container">
                    <textarea id="sugerencia" rows="4" cols="50" placeholder="" required=" "></textarea>  
                    <label for="sugerencia" class="label">Detalle de la Sugerencia:</label>
                </div>

                <button class="btn">Enviar</button>
            </form>
        </div>
</body>
</html>

