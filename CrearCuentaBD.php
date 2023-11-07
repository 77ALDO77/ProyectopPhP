<?php
require_once './ConectaDB.php';
$cn = getConexion();


if (!empty($_POST["CrearCuenta"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["Ntelefono"]) or empty($_POST["contraseña"])) {
        // Manejar el caso en que faltan campos obligatorios
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $Ntelefono = $_POST["Ntelefono"];
        $contraseña = $_POST["contraseña"];

        // Verificar si el correo ya existe en la base de datos
        $checkEmailQuery = "SELECT Correo FROM registrocuenta WHERE Correo = '$correo'";
        $result = $cn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
            echo '<p style="position: absolute; top: 32%;color: red; width: 100%; text-align: center; padding: 10px">La cuenta ya está creada</p>';
        } else {
            // Si el correo no existe, procede con la inserción
            $sql = "INSERT INTO registrocuenta (Nombre, Apellido, Correo, Telefono, Contraseña) VALUES ('$nombre', '$apellido', '$correo', '$Ntelefono', '$contraseña')";

            if (strlen($Ntelefono) === 9 && is_numeric($Ntelefono)) {
                if ($cn->query($sql)) {
                    echo '<script>window.location.href = "InicioSesion1.php";</script>';
                    exit;
                } else {
                    echo "Error al insertar datos: " . $cn->error;
                }
            } else {
                echo '<p style="position: absolute; top: 32%;color: red; width: 100%; text-align: center; padding: 10px">El número de teléfono debe tener exactamente 9 dígitos</p>';
            }
        }
    }
}

$cn->close();
?>
