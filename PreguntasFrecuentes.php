<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preguntas Frecuentes</title>
        <link href="CSS/EstiloPreguntas.css" rel="stylesheet" type="text/css"/>
        <?php include('EncabezadoInicio.php'); ?>
    </head>
    <body>
        <div class="container">
            <h1>Preguntas Frecuentes</h1>
            <br/>
            <div id="faqs-container">
            </div>
        </div>

        <script>

            const faqData = [
                {
                    question: "Si llamo por teléfono o me contacto directamente, ¿Podré obtener algún descuento?",
                    answer: "No. Los precios publicados son nuestros mejores valores y sólo se aplican descuentos electrónicos con códigos válidos de alguna promoción. Si llamas o te comunicas por correo electrónico no obtendrás una atención distinta a la que recibe todo el resto de los clientes."
                },
                {
                    question: "¿Puedo cancelar con otra divisa?",
                    answer: "No. Todas las operaciones de TechnoGame son en soles."
                },
                {
                    question: "¿Los precios publicados incluyen IGV?",
                    answer: "Sí, absolutamente todos los precios publicados en Technogames incluyen el impuesto al valor agregado IGV."
                },
                {
                    question: "¿Cómo recibiré mi boleta o factura?",
                    answer: "La boleta o factura correspondiente te llegará junto con el producto dentro del paquete. Si por alguna razón no recibes tu boleta o factura junto con el producto, comunícate inmediatamente a través de nuestro sistema de Servicio al Cliente."
                },
                {
                    question: "¿Puedo ir al local, preguntar y ver directamente los productos?",
                    answer: "¡Por supuesto! Estaremos más que felices en recibirte y aclarar todas tus dudas y podrás comprar sin necesidad de colocar una orden por internet."},
                {
                    question: "Tengo problemas con el producto que compré en Technogame ¿Cómo pido ayuda?",
                    answer: "Recuerda que la mejor fuente de información para cualquier producto es la página web del fabricante. Ahí podrás encontrar información para el correcto funcionamiento. Si tienes problemas que no puedes solucionar, comunícate con nosotros a través de nuestro sistema de Servicio al Cliente y haremos todo lo posible por ayudarte."
                }
            ];

            const faqsContainer = document.getElementById('faqs-container');

            faqData.map(function (item) {
                let article = document.createElement('article');
                article.className = "faq-item";
                const markup = `
                <div class="item-question">
                    <span class="question-text">${item.question}</span>
                    <span class="arrows-container">
                        <span class="expand">▼</span>
                        <span class="close">▲</span>
                    </span>
                </div>
                <div class="item-answer">
                    <span class="answer-text">${item.answer}</span>
                </div>
                `;

                article.innerHTML = markup;
                faqsContainer.append(article);

            });
            
            const arrowsContainer = document.querySelectorAll('.arrows-container');
            
            arrowsContainer.forEach(function(item){
                item.addEventListener('click', function(e){
                    const parent = e.currentTarget.parentElement.parentElement;
                    parent.classList.toggle('show-answer');
                });
            });

        </script>
    </body>
    <foot>
        <?php include('PieInicio.php'); ?>
    </foot>
</html>