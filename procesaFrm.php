<?php
if(isset($_REQUEST["accion"])){
    $accion=$_REQUEST["accion"];
}
if($accion=="add"){
    $cod=$_POST["nombre"];
    $nom=$_POST["domicilio"];
    $pre=$_POST["dni"];
    $pre=$_POST["emil"];
    $pre=$_POST["numero"];
    
    $pre=$_POST["monto"];
    $pre=$_POST["descripcion"];
    $pre=$_POST["pedido"];
  
    $foto=$_FILES["foto"];
    $nombreArchivo = $foto['name'];
    $tipoMIME = $foto['type'];
    $tamañoArchivo = $foto['size'];
    $nombreArchivoTemporal = $foto['tmp_name'];
    $errorSubida = $foto['error'];
        
    if ($errorSubida === UPLOAD_ERR_OK) {

        if ($tipoMIME === 'image/jpeg' || $tipoMIME === 'image/png') {
                
            $nombreArchivoDestino = 'images/'; 

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
}
echo $accion;

