<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Videojuegos</title>
    <style>
        /* Estilos CSS simples para mejorar la apariencia */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .producto {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            float: left;
        }
        .nombre {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include('EncabezadoInicio.php'); ?>
    
    <main>
    
        <h1>Bienvenido a la Tienda de Videojuegos</h1>

        <h2>Nuestros Productos Destacados:</h2>

        <?php
            // Array de productos con nombre, descripción y precio
            $productos = array(
                array("nombre" => "FIFA 22", "descripcion" => "Simulador de fútbol", "precio" => 60),
                array("nombre" => "Cyberpunk 2077", "descripcion" => "RPG de ciencia ficción", "precio" => 70),
                array("nombre" => "The Last of Us Part II", "descripcion" => "Aventura y acción", "precio" => 50)
            );

            // Función para mostrar productos
            function mostrarProductos($productos) {
                foreach ($productos as $producto) {
                    echo "<div class='producto'>";
                    echo "<p class='nombre'>{$producto['nombre']}</p>";
                    echo "<p>{$producto['descripcion']}</p>";
                    echo "<p>Precio: {$producto['precio']} USD</p>";
                    echo "<button>Agregar al Carrito</button>";
                    echo "</div>";
                }
            }

            // Llamar a la función para mostrar productos
            mostrarProductos($productos);
        ?>  
    </main>
    
</body>
</html>

