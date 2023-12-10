<?php
require_once './ConectaDB.php';
$cnx= getConexion();
function obtenerProducto(){
    global $cnx;
    $id = $_POST['id'];
    $cadSQL="SELECT id, nombre, precio, imagen FROM productos where id=$id";
    $registros= mysqli_query($cnx, $cadSQL);
    $resultado=[];
    while($row= mysqli_fetch_assoc($registros)){
        $resultado[]= $row;
    }
    return $resultado;
}
if(isset($_REQUEST["accion"])){
    $accion= $_REQUEST["accion"];
    if($accion=="obtenerProducto"){
        $resultado= obtenerProducto();
        require_once './Producto.php';
    }
}

function agregarProductoAlCarrito($cnx) {
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = getConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $producto = obtenerProducto();
    $idProducto = $producto[0]['id']; 
    
    // Verificar si el producto ya está en el carrito
    if (productoYaEstaEnCarrito($idProducto)) {
        // Si está en el carrito, incrementar la cantidad y actualizar el total
        $sentencia = $bd->prepare("UPDATE carrito_usuarios SET cantidad = cantidad + 1, total = (SELECT Precio FROM productos WHERE id = ?) * (cantidad + 1) WHERE id_sesion = ? AND id_producto = ?");
        $sentencia->execute([$idProducto, $idSesion, $idProducto]);
    } else {
        // Si no está en el carrito, insertar el nuevo producto con total calculado
        $sentencia = $bd->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto, cantidad, total) VALUES (?, ?, 1, (SELECT Precio FROM productos WHERE id = ?))");
        $sentencia->execute([$idSesion, $idProducto, $idProducto]);
    }
}
if (isset($_REQUEST["accion1"])) {
    $accion = $_REQUEST["accion1"];
    if ($accion == "agregarProductoAlCarrito") {
        $producto = obtenerProducto();
        $idProducto = $producto[0]['id'];
        if (!productoYaEstaEnCarrito($idProducto)) {
            agregarProductoAlCarrito($idProducto);
        }
    }
}

function iniciarSesionSiNoEstaIniciada(){
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}
function productoYaEstaEnCarrito($idProducto)
{
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}
function obtenerIdsDeProductosEnCarrito()
{
    global $cnx;
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $cnx->prepare("SELECT id_producto FROM carrito_usuarios WHERE id_sesion = ?");
    $sentencia->bind_param("s", $idSesion);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $resultados = [];
    while ($fila = $resultado->fetch_assoc()) {
        $resultados[] = $fila['id_producto'];
    }
    return $resultados;
}
function obtenerProductosEnCarrito()
{
    $bd = getConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT productos.id, productos.nombre, productos.precio, productos.imagen,cantidad
     FROM productos
     INNER JOIN carrito_usuarios
     ON productos.id = carrito_usuarios.id_producto
     WHERE carrito_usuarios.id_sesion = ?");
    $idSesion = session_id();
    $sentencia->bind_param("s", $idSesion);
    $sentencia->execute();
    $resultado = $sentencia->get_result(); // Utilizar get_result para obtener los resultados
    $resultados = [];
    while ($fila = $resultado->fetch_assoc()) {
        $resultados[] = $fila;
    }
    return $resultados;
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

