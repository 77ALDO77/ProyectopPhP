<?php
    require_once './ConectaDB.php';
    $cn = getConexion();
?> 

<?php
if(isset($_REQUEST["accion"])){
    $accion=$_REQUEST["accion"];
}
if($accion=="add"){
    $cod=$_POST["nombre"];
    $nom=$_POST["domicilio"];
    $dni=$_POST["dni"];
    $email=$_POST["email"];
    $numero=$_POST["numero"];
    
    $tipoBien="Producto";
    $monto=$_POST["monto"];
    $descripcion=$_POST["descripcion"];
    
    $tipoReclamo="Queja";
    $detalle=$_POST["detalle"];
    $pedido=$_POST["pedido"];
    
    $foto=$_FILES["foto"];
    $nombreArchivo = $foto['name'];
    $tipoMIME = $foto['type'];
    $tamañoArchivo = $foto['size'];
    $nombreArchivoTemporal = $foto['tmp_name'];
    $errorSubida = $foto['error'];
        
    if ($errorSubida === UPLOAD_ERR_OK) {

        if ($tipoMIME === 'image/jpeg' || $tipoMIME === 'image/png') {
                
            $nombreArchivoDestino = 'imgsReclamos/'; 

            if (move_uploaded_file($nombreArchivoTemporal, $nombreArchivoDestino.$nombreArchivo)) {
                echo "El archivo se ha cargado y movido correctamente.";
            } else {
                echo "Hubo un error al cargar o mover el archivo.";
            }

        } else {
            echo "No es un archivo JPG ni PNG.";
        }
    } else {
        echo "Error al subir";
    }
    
echo $accion;

    $sql = "INSERT INTO Reclamos (NomApe, Domicilio, Dni,Email,Numero,"
            . "tipoBien,Monto,Descripcion,TipoReclamo,Detalle,Pedido) "
            . "VALUES (?, ?, ? ,? ,? ,? ,? ,?, ?, ?, ?)";
    $sentencia = $cn->prepare($sql);
    $tipoDatos = "sssssssssss"; 
    if ($sentencia) {
        // Vincular los parámetros y sus tipos de datos
        $sentencia->bind_param($tipoDatos,$cod, $nom, $dni,$email,$numero,
                $tipoBien,$monto,$descripcion,
                $tipoReclamo,$detalle,$pedido);

        // Ejecutar la sentencia
        if ($sentencia->execute()) {
            echo "Inserción exitosa";
        } else {
            echo "Error en la inserción: " . $sentencia->error;
        }

    } else {
        echo "Error en la preparación de la sentencia: " . $conexion->error;
    }
    
}

