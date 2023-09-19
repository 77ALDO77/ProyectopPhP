<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
</head>
<body>
    <h1>Libro de Reclamaciones</h1>
    <p>Por favor, ingresa tu reclamación:</p>
    
    <form action="procesar_reclamacion.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        
        <label for="reclamacion">Reclamación:</label><br>
        <textarea id="reclamacion" name="reclamacion" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Enviar Reclamación">
    </form>
</body>
</html>

