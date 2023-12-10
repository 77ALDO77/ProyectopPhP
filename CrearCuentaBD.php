<?php
require_once './ConectaDB.php';
$cn = getConexion();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["CrearCuenta"])) {
    $nombre = mysqli_real_escape_string($cn, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($cn, $_POST["apellido"]);
    $correo = mysqli_real_escape_string($cn, $_POST["correo"]);
    $Ntelefono = mysqli_real_escape_string($cn, $_POST["Ntelefono"]);
    $contraseña = mysqli_real_escape_string($cn, $_POST["contraseña"]);

    if (empty($nombre) || empty($apellido) || empty($correo) || empty($Ntelefono) || empty($contraseña)) {
        
    } else {
        $checkEmailQuery = "SELECT COUNT(*) as contar FROM registrocuenta WHERE Correo = ?";
        $stmt = $cn->prepare($checkEmailQuery);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->bind_result($contar);
        $stmt->fetch();
        $stmt->close();

        if ($contar > 0) {
            echo '<p style="position: absolute; top: 32%;color: red; width: 100%; text-align: center; padding: 10px">La cuenta ya está creada</p>';
        } else {
            $sql = "INSERT INTO registrocuenta (Nombre, Apellido, Correo, Telefono, Contraseña) VALUES (?, ?, ?, ?, ?)";
            $stmtInsert = $cn->prepare($sql);
            $stmtInsert->bind_param("sssss", $nombre, $apellido, $correo, $Ntelefono, $contraseña);

            if (strlen($Ntelefono) === 9 && is_numeric($Ntelefono)) {
                if ($stmtInsert->execute()) {
                    echo '<script>window.location.href = "InicioSesion1.php";</script>';
                    exit;
                } else {
                    echo "Error al insertar datos: " . $stmtInsert->error;
                }
            } else {
                echo '<p style="position: absolute; top: 32%;color: red; width: 100%; text-align: center; padding: 10px">El número de teléfono debe tener exactamente 9 dígitos</p>';
            }

            $stmtInsert->close();
        }
    }
}

$cn->close();
?>
