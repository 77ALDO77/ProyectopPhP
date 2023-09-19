<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sugerencias</title>
</head>
<body>
    <h1>Formulario de Sugerencias</h1>
    <p>Por favor, déjanos tus sugerencias:</p>
    
    <form action="ProcesaForms.php" method="POST">
        <div class="form_container">
          
            <input type="text" id="nombre" class="input" required="">   
            <label for="nombre" class="label">Nombres y Apellidos:</label>
            <span class="form_line"></span>
        </div>
        
        <div class="form_container">
          
            <input type="email" id="email" class="input" required="">   
            <label for="email" class="label">Correo:</label>
            <span class="form_line"></span>
        </div>
        
        <div class="form_container">
          
            <input type="text" id="numero" class="input" required="">   
            <label for="numero" class="label">Celular:</label>
            <span class="form_line"></span>
        </div>
        
        <div class="form_container">
          
            <textarea id="sugerencia" rows="4" cols="50" required=""></textarea>  
            <label for="sugerencia" class="label">Detalle de la Sugerencia:</label>
            <span class="form_line"></span>
        </div>
        
        <button class="btn">Enviar</button>
    </form>
</body>
</html>

