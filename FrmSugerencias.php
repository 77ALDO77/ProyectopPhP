<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sugerencias</title>
    <!<!-- Estilos CSS -->
    <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/PieInicio.css?uuid=<?php echo uniqid();?>" rel="stylesheet" type="text/css"/>
    <link href="CSS/StyleFrmSugerencias.css" rel="stylesheet" type="text/css"/>
    
    <!<!-- Para los iconos -->
    <script src="https://kit.fontawesome.com/c971f825af.js" crossorigin="anonymous"></script>
    
    <!<!-- Para las ventanas emergentes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.min.js" integrity="sha512-dbgWBkIauIf3iy96dqgzBD9ysKHp7mAuym+V7AqaNIuICxDBVm6nzvl1Yi+rdfnh25SdmYDw2JbFk/FOXf6Ycg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.min.css" integrity="sha512-IScV5kvJo+TIPbxENerxZcEpu9VrLUGh1qYWv6Z9aylhxWE4k4Fch3CHl0IYYmN+jrnWQBPlpoTVoWfSMakoKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <script type="text/javascript">
        function validar(){
            var nombre= document.forms[0]["name"].value;
        
            if(nombre=="" ){
                Swal.fire({
                  icon: 'error',
                  text: 'Datos invalidos',
                })
            }else{
                Swal.fire({
                  icon: 'success',
                  text: 'Informacion enviada',
                })

            }
            return false;

        }
        
    
    </script>
    
    <?php include('EncabezadoInicio.php'); ?>   
    
    <!-- CONTENIDO Formulario Reclamaciones-->
    <main> 

        <form class="form" method="post" action="ProcesaForms.php" onsubmit="return validar()">
            <div class="title-block">
                <h1 class="form_title">Formulario de Sugerencias</h1>
            </div>

            <p class="form_paragraph">Agradecemos que puedas dejarnos tus sugerencias</p><br><br>

            <div class="form_container">
                <input type="text" name="name" id="nombre" class="input" placeholder=" ">   
                <label for="nombre" class="label"><i class="fa-solid fa-user"></i> Nombres y Apellidos:</label>
            </div>

            <div class="form_container">
                <input type="email" name="email" id="email" class="input" placeholder=" " required="">   
                <label for="email" class="label"><i class="fa-solid fa-envelope"></i> Correo:</label>
            </div>

            <div class="form_container">
                <input type="text" id="numero" name="number" class="input" placeholder=" " required="">   
                <label for="numero" class="label"><i class="fa-solid fa-phone"></i> Celular:</label>
            </div>

            <div class="form_container">
                <textarea id="sugerencia" rows="4" cols="50" placeholder=""></textarea>  
                <label for="sugerencia" class="label"><i class="fa-solid fa-comment"></i> Detalle de la Sugerencia:
                </label>
                <input id="foto" type="file" name="Foto"  accept=".png,.jpg" onchange=""/>
            </div>

            <button class="btn"><i class="fa-solid fa-share"></i> Enviar</button>
        </form>
    </main> 
    

    <?php include('PieInicio.php'); ?>
    
</body>
</html>

