<?php
require_once './ConectaDB.php';

$cn = getConexion();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link href="CSS/EstiloPreguntas.css" rel="stylesheet" type="text/css"/>
        <?php include('EncabezadoInicio.php'); ?>

    </head>
    <body>

        <div class="container">

            <h1 class="heading">Preguntas Frecuentes</h1>

            <div class="accordion-container">

                <div class="accordion active">
                    
                    <?php
                    $sql = "select * from PreguntasFrecuentes";
                    $result = mysqli_query($cn, $sql);
                    
                    $i = 0;
                    
                    while($data=mysqli_fetch_array($result)){
                        if($i==0){
                            
                    ?>
                    
                    <div class="accordion-heading">
                        <h3><?php echo $data['pregunta']; ?></h3>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <p class="accordion-content">
                       <?php  echo $data['respuesta']; ?> 
                    </p>
                </div>
                
                <?php
                        } else {
                ?>

                <div class="accordion">
                    <div class="accordion-heading">
                        <h3 id="heading<?php echo $data['id']; ?>"><?php echo $data['pregunta']; ?></h3>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <p class="accordion-content">
                        <?php  echo $data['respuesta']; ?>
                    </p>
                </div>
                
                    <?php } $i++;} ?>
                </div>
            </div>
                
        <script>

            let accordions = document.querySelectorAll('.accordion-container .accordion');

            accordions.forEach(acco => {
                acco.onclick = () => {
                    accordions.forEach(subAcco => {
                        subAcco.classList.remove('active')
                    });
                    acco.classList.add('active');
                }
            })

        </script>


    </body>
    <foot>
        <?php include('PieInicio.php'); ?>
    </foot>
</html>