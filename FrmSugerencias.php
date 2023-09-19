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
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="sugerencia">Sugerencia:</label><br>
        <textarea id="sugerencia" name="sugerencia" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

