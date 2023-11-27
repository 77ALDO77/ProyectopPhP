<?php
require_once './ConectaDB.php';
$cn = getConexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            // Credenciales correctas, redirige al usuario a index.php
            session_start();
            $_SESSION['correo'] = $correo;
            header("Location: index.php");
            exit;
        } else {
           header("Location: InicioSesion1.php");
        }
    }
}

$cn->close();
?>
