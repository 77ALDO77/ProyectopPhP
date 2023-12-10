<?php
session_start();
require_once './ConectaDB.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idProducto = $_POST["idProducto"];
    $accion = $_POST["accion"];
    if ($accion === "sumarCantidad" || $accion === "restarCantidad") {
        $nuevaCantidad = ($accion === "sumarCantidad") ? obtenerNuevaCantidadSumar($idProducto) : obtenerNuevaCantidadRestar($idProducto);
        actualizarCantidadEnCarrito($idProducto, $nuevaCantidad);
        $carritoActualizado = obtenerInformacionCarrito();
        echo json_encode(["success" => true, "carrito" => $carritoActualizado]);
    } else {
        echo json_encode(["error" => "Acción no válida"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido"]);
}

function obtenerNuevaCantidadSumar($idProducto) {
    // Lógica para obtener la nueva cantidad al sumar
    $cantidadActual = obtenerCantidadActual($idProducto);
    return $cantidadActual + 1;
}

function obtenerNuevaCantidadRestar($idProducto) {
    // Lógica para obtener la nueva cantidad al restar
    $cantidadActual = obtenerCantidadActual($idProducto);
    return ($cantidadActual > 1) ? $cantidadActual - 1 : 1;
}

function obtenerCantidadActual($idProducto) {
    // Lógica para obtener la cantidad actual de la base de datos
    $cn = getConexion();
    $stmt = $cn->prepare("SELECT cantidad FROM carrito_usuarios WHERE id_producto = ?");
    $stmt->bind_param("i", $idProducto);
    $stmt->execute();
    $stmt->bind_result($cantidad);
    $stmt->fetch();
    $stmt->close();

    // Agrega esta línea para depurar
    error_log("Cantidad Actual: " . $cantidad);

    return ($cantidad !== null && is_numeric($cantidad)) ? $cantidad : 0;
}
function actualizarCantidadEnCarrito($idProducto, $nuevaCantidad) {
    // Lógica para actualizar la cantidad y el total en la base de datos
    $cn = getConexion();
    
    // Obtener el precio del producto
    $stmtPrecio = $cn->prepare("SELECT Precio FROM productos WHERE id = ?");
    $stmtPrecio->bind_param("i", $idProducto);
    $stmtPrecio->execute();
    $stmtPrecio->bind_result($precio);
    $stmtPrecio->fetch();
    $stmtPrecio->close();

    // Calcular el nuevo total
    $nuevoTotal = $nuevaCantidad * $precio;

    // Actualizar la cantidad y el total en la tabla carrito_usuarios
    $stmt = $cn->prepare("UPDATE carrito_usuarios SET cantidad = ?, total = ? WHERE id_producto = ?");
    $stmt->bind_param("idi", $nuevaCantidad, $nuevoTotal, $idProducto);
    $stmt->execute();

    $stmt->close();
    $cn->close();
}
function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}
function obtenerInformacionCarrito()
{
    $bd = getConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();

    $sentencia = $bd->prepare("SELECT p.id, p.Nombre, p.Precio, p.Imagen,c.cantidad, c.total
                              FROM carrito_usuarios c
                              INNER JOIN Productos p ON c.id_producto = p.id
                              WHERE c.id_sesion = ?");
    $sentencia->bind_param("s", $idSesion);
    $sentencia->execute();
    $resultado = $sentencia->get_result();

    $carrito = array();

    while ($fila = $resultado->fetch_assoc()) {
        $carrito[] = $fila;
    }

    $sentencia->close();
    $bd->close();

    return $carrito;
}
?>
