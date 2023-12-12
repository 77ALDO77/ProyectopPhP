<?php
require_once './ConectaDB.php';

// Iniciar la sesión al principio del archivo
session_start();

$cn = getConexion();

// Verificar si se ha enviado una solicitud para cerrar sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cerrar_sesion"])) {
    // Destruir la sesión
    session_destroy();
    
    // Redirigir a la página de inicio de sesión
    header("Location: InicioSesion1.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && basename($_SERVER['PHP_SELF']) == 'verificarInicioSesion.php') {
    if (empty($_POST["correo"]) || empty($_POST["contraseña"])) {
        // Manejar el caso en que faltan campos obligatorios
        echo "Por favor, complete todos los campos.";
    } else {
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];

        // Verificar si las credenciales son correctas
        $checkCredentialsQuery = "SELECT COUNT(*) as contar FROM registrocuenta WHERE Correo = ? AND Contraseña = ?";
        $stmt = $cn->prepare($checkCredentialsQuery);
        $stmt->bind_param("ss", $correo, $contraseña);
        $stmt->execute();
        $stmt->bind_result($contar);
        $stmt->fetch();
        $stmt->close();

        if ($contar > 0) {
            // Credenciales correctas, ahora obtenemos el nombre
            $getNombreQuery = "SELECT Nombre FROM registrocuenta WHERE Correo = ?";
            $stmtNombre = $cn->prepare($getNombreQuery);
            $stmtNombre->bind_param("s", $correo);
            $stmtNombre->execute();
            $stmtNombre->bind_result($nombre);
            $stmtNombre->fetch();
            $stmtNombre->close();

            // Almacenar en la sesión
            $_SESSION['correo'] = $correo;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['usuario_iniciado'] = true;
            
            // Redirigir al usuario a index.php
            header("Location: index.php");
            exit;
        } else {
            header("Location: InicioSesion1.php");
            exit;
        }
    }
}

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['usuario_iniciado']) && $_SESSION['usuario_iniciado']) {echo '<script>';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo 'var botonMiCuenta = document.querySelector(".InicioSesion div");';
echo 'botonMiCuenta.innerHTML = "' . $_SESSION['nombre'] . '";';
echo '});';
echo '</script>';
echo '<form method="post" action="" style="position: absolute; top: 150px; right: 10px; z-index: 9999;">';
echo '<button type="submit" name="cerrar_sesion" style="background: #fff; border: 1px solid #ccc; padding: 5px 10px; font-size: 15px; font-weight: bold; cursor: pointer;">Cerrar Sesión</button>';
echo '</form>';



} else {
    // Resto del código si el usuario no ha iniciado sesión
}

$cn->close();
?>
