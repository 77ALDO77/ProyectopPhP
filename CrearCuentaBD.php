<?php
$cn = getConexion();

if (!empty($_POST["CrearCuenta"])) { 
    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["correo"]) || empty($_POST["Ntelefono"]) || empty($_POST["contraseña"])) {
      
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $Ntelefono = $_POST["Ntelefono"];
        $contraseña = $_POST["contraseña"];

        $sql = "INSERT INTO registrocuenta (Nombre, Apellido, Correo, Telefono, Contraseña) VALUES ('$nombre', '$apellido', '$correo', '$Ntelefono', '$contraseña')";

        if (strlen($Ntelefono) === 9 && is_numeric($Ntelefono)) { //Strler verifica la cant de números e is_numeric verifica el tipo 
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

$cn->close();
?>