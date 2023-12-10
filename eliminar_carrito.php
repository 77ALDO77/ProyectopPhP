<?php
session_start();
require_once './ConectaDB.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idProducto = $_POST["idProducto"];
    $accion = $_POST["accion3"];

    if ($accion === "eliminarProducto") {
        $exito = quitarProductoDelCarrito($idProducto);

        if ($exito) {
            $carritoActualizado = obtenerInformacionCarrito();
            echo json_encode(["success" => true, "carrito" => $carritoActualizado]);
        } else {
            echo json_encode(["error" => "Error al intentar eliminar el producto del carrito"]);
        }
    }
}

function quitarProductoDelCarrito($idProducto)
{
    $bd = getConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();

    $sentencia = $bd->prepare("DELETE FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
    $sentencia->bind_param("si", $idSesion, $idProducto);
    $resultado = $sentencia->execute();

    $sentencia->close();
    $bd->close();

    // Agrega el mensaje de depuración
    error_log("Producto eliminado. Resultado: " . var_export($resultado, true));

    return $resultado;
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

