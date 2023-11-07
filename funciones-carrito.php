<?php
require_once './ConectaDB.php';
$cnx= getConexion();
function obtenerProducto(){
    global $cnx;
    $cadSQL="SELECT id, nombre, precio, imagen FROM productos where id=1";
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
function agregarProductoAlCarrito($cnx){
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = getConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $producto = obtenerProducto();
    $idProducto = $producto[0]['id']; 
    $sentencia = $bd->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto) VALUES (?, ?)");
    return $sentencia->execute([$idSesion, $idProducto]);
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
    $sentencia = $bd->prepare("SELECT productos.id, productos.nombre, productos.precio, productos.imagen
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

