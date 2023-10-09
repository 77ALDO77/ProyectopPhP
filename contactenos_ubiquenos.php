<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactenos</title>
        <link href="CSS/EstiloContactenos_Ubiquenos.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/PieInicio.css" rel="stylesheet" type="text/css"/>
        <?php include('EncabezadoInicio.php'); ?> 
    </head>
    <body>

        <main>
            <div id="contenedor-cont_ubic">

                <div id="contacto"><center><h2>Contáctenos</h2></center></div>
                <div class="contenedoredes">           
                    <div class="redes">
                        <h2 class="title-redes">Redes sociales</h2>
                        <p class="info_redes">¿Tienes alguna pregunta o inquietud? ¡Conéctate con nosotros en nuestras redes sociales y obtén respuestas rápidas y personalizadas! 
                            Nuestro equipo está listo para atenderte y proporcionarte la información que necesitas. Únete a nuestra comunidad en las redes sociales y descubre una
                            nueva forma de interactuar con nosotros. ¡Esperamos conocerte pronto!</p>

                        <div class="contenedorimagen">

                            <div class="itemImg"><a href="https://www.facebook.com"  class="enlace-imagen">
                                    <img src="Imagenes/Logo_de_Facebook.png" alt="Facebook"/>
                                </a></div>

                            <div class="itemImg"><a href="https://www.youtube.com" class="enlace-imagen">
                                    <img src="Imagenes/LogoYoutube.png" alt="Youtube"/>
                                </a></div>

                            <div class="itemImg"><a href="https://www.instagram.com" class="enlace-imagen">
                                    <img src="Imagenes/LogoInstagram.jpg" alt="Instagram"/>
                                </a></div>


                            <div class="itemImg"><a href="https://www.twitter.com" class="enlace-imagen">
                                    <img src="Imagenes/LogoTwitter.jpg" alt="Twitter"/>
                                </a></div>
                        </div>           
                    </div>

                    <div class="contenedorcontacto">
                        <div class="contenedortelefono">
                            <h2 class="title-contacto">Teléfono</h2>
                            <p class="info-contacto">¿Necesitas ayuda? Llámanos. Nuestro equipo estará encantado de atenderte en horario laboral. 
                                Si nos contactas fuera de ese horario, nuestro bot te proporcionará información básica hasta que estemos disponibles para asistirte.</p>
                            <div class="telefono">
                                <div><img src="Imagenes/LogoTelefono.png" alt=""/></div>
                                <div class="numero"><h4>(+51)964593567</h4></div>
                            </div>

                            <div class="contenedorhorario">
                                <h2 class="title-contacto">Horario</h2>
                                <p class="info-contacto">¡Estamos a tu disposición! Nuestro equipo está disponible para atenderte en el siguiente horario:</p>
                                <p class="horario">Lunes a Sábado: 8:00 AM - 10:00 PM<p>
                            </div>

                            <div class="contenedorcorreo">
                                <h2 class="title-correo">Correo Electrónico</h2>
                                <p class="info-contacto">¿Quieres contactarnos por correo electrónico? Estamos listos para recibir tus mensajes y responder a tus consultas. 
                                    ¡Escríbenos y uno de nuestros empleados se encargará de atender tu solicitud!</p>

                                <div class="correo">
                                    <div><img src="Imagenes/LogoCorreo.png" alt=""/></div>
                                    <div class="mail">
                                        <h4>TechnoGame@gmail.com</h4>
                                    </div>

                                </div>
                            </div>
                            <!<!-- Contenedor Tiendas -->
                            <div id="Contenedor-tiendas">
                                <div id="titulotiendas"><h2>Nuestras tiendas</h2></div>
                                <ul id="Listatiendas">
                                    <li>
                                        <div class="tienda" id="plaza-norte">
                                            <h3>Plaza Norte</h3>
                                            <p>Centro Comercial Plaza Norte, Segundo Piso</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tienda" id="mega-plaza">
                                            <h3>Mega Plaza</h3>
                                            <p>Centro Comercial Mega Plaza</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tienda" id="real-plaza">
                                            <h3>Real Plaza</h3>
                                            <p>Centro Comercial Real Plaza Primer piso</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tienda" id="mall-santaanita">
                                            <h3>Mall Aventura Santa Anita</h3>
                                            <p>Centro Comercial Mall Aventura Santa Anita</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tienda" id="plaza-sur">
                                            <h3>Mall del Sur</h3>
                                            <p>Centro Comercial Mall del Sur, segundo Piso</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tienda" id="jockey-plaza">
                                            <h3>Jockey Plaza</h3>
                                            <p>Centro Comercial Jockey Plaza</p>
                                        </div>
                                    </li>
                                    <?php require_once './mainmapa.php' ?>
                                </ul>
                                </nav>
                            
                           </main>
                            <script>
                                // Obtén una referencia al elemento de la tienda "Plaza Norte" y al mapa de Plaza Norte.
                                const mapaInicio = document.getElementById("mapa-inicio");
                                const plazaNorteTienda = document.getElementById("plaza-norte");
                                const mapaPlazaNorte = document.getElementById("mapa-plaza-norte");
                                const MegaPlazaTienda = document.getElementById("mega-plaza");
                                const mapaMegaPlaza = document.getElementById("mapa-mega-plaza");
                                const RealPlazaTienda = document.getElementById("real-plaza");
                                const mapaRealPlaza = document.getElementById("mapa-real-plaza");
                                const MallSATienda = document.getElementById("mall-santaanita");
                                const mapaMallSA = document.getElementById("mapa-mall-santaanita");
                                const plazaSurTienda = document.getElementById("plaza-sur");
                                const mapaPlazaSur = document.getElementById("mapa-plaza-sur");
                                const jockeyplazaTienda = document.getElementById("jockey-plaza");
                                const mapaJockeyPlaza = document.getElementById("mapa-jockey-plaza");

                                // Agrega un controlador de eventos para el clic en "Plaza Norte".
                                plazaNorteTienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "block";
                                    mapaMegaPlaza.style.display = "none";
                                    mapaRealPlaza.style.display = "none";
                                    mapaMallSA.style.display = "none";
                                    mapaPlazaSur.style.display = "none";
                                    mapaJockeyPlaza.style.display = "none";
                                });
                                MegaPlazaTienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "none";
                                    mapaMegaPlaza.style.display = "block";
                                    mapaRealPlaza.style.display = "none";
                                    mapaMallSA.style.display = "none";
                                    mapaPlazaSur.style.display = "none";
                                    mapaJockeyPlaza.style.display = "none";
                                });
                                RealPlazaTienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "none";
                                    mapaMegaPlaza.style.display = "none";
                                    mapaRealPlaza.style.display = "block";
                                    mapaMallSA.style.display = "none";
                                    mapaPlazaSur.style.display = "none";
                                    mapaJockeyPlaza.style.display = "none";
                                });
                                MallSATienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "none";
                                    mapaMegaPlaza.style.display = "none";
                                    mapaRealPlaza.style.display = "none";
                                    mapaMallSA.style.display = "block";
                                    mapaPlazaSur.style.display = "none";
                                    mapaJockeyPlaza.style.display = "none";
                                });
                                plazaSurTienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "none";
                                    mapaMegaPlaza.style.display = "none";
                                    mapaRealPlaza.style.display = "none";
                                    mapaMallSA.style.display = "none";
                                    mapaPlazaSur.style.display = "block";
                                    mapaJockeyPlaza.style.display = "none";
                                });
                                jockeyplazaTienda.addEventListener("click", () => {
                                    // Muestra el mapa de Plaza Norte.
                                    mapaInicio.style.display = "none";
                                    mapaPlazaNorte.style.display = "none";
                                    mapaMegaPlaza.style.display = "none";
                                    mapaRealPlaza.style.display = "none";
                                    mapaMallSA.style.display = "none";
                                    mapaPlazaSur.style.display = "none";
                                    mapaJockeyPlaza.style.display = "block";
                                });
                            </script>    
                            </div>
                            
                            </body>
                            <footer class="pie-inicio">
                                <?php include('PieInicio.php'); ?>
                                </footer>
                            </html>
