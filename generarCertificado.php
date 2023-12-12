<?php
require_once './ConectaDB.php';


$cn = getConexion();


$cadSQL="select codigo,nombre,precio,cantidad,certificado,fecha from certificado";
$registros=mysqli_query($cn, $cadSQL);

if(mysqli_num_rows($registros)>0){
    $resultados=[];
    while($row= mysqli_fetch_assoc($registros)){
        $resultados[]=$row;
    }
       // print_r($resultados);
}
    
mysqli_close($cn);

function generarCertificado($fila) {
    $firma = "TechnoGame";
    $imgPath = "./image/certificado.png";
    $font = "./fonts/Roboto/Roboto-Bold.ttf";

    $image = imagecreatefrompng($imgPath);
    
    try {
        $fontColor = imagecolorallocate($image, 51, 89, 255); // RGB
        imagettftext($image, 0, 0, 0, 0, $fontColor, $font, $imgPath);

        // Resto del código de generación de certificado...
        $fontColor = imagecolorallocate($image, 0, 0, 255);

        // Centrar el texto del certificado
        $text = $fila["certificado"];
        $fontSize = "20";

        // Obtener ancho y alto del texto
        $textWidth = imagettfbbox($fontSize, 0, $font, $text);
        $textWidth = $textWidth[2] - $textWidth[0];
        $imageWidth = imagesx($image); // Ancho de img

        $positionX = ($imageWidth - $textWidth) / 2;
        imagettftext($image, $fontSize, 0, $positionX, 300, $fontColor, $font, $text);

        imagettftext($image, $fontSize, 0, $positionX, 350, $fontColor, $font, $fila["nombre"]);
        imagettftext($image, 14, 0, 200, 600, $fontColor, $font, $fila["fecha"]);
        imagettftext($image, 14, 0, 750, 600, $fontColor, $font, $firma);

        $outputPath = "./certificado/" . $fila["codigo"] . "certificado.png";
        imagepng($image, $outputPath);

        // Destruir la imagen
        imagedestroy($image);

        // Mostrar la imagen generada
        echo '<div style="text-align: center">';
        echo "<img src=" . $outputPath . ">";
        echo '</div>';
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

foreach ($resultados as $fila) {
    generarCertificado($fila);
}
?>
