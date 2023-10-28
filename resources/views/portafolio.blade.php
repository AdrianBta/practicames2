<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Potafolio</title>
    <link rel="stylesheet" href="assets/estilo.css">
</head>
<body>
    <!--menu encabezado-->

    <div class="contenedor-header">
        <header>
            <div class="logo">
                 <a href="#">Adrian</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#proyectos" onclick="seleccionar()">PROYECTOS</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                 </ul>
                </nav>
                <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </header>
        </div>

    <!--seccion inicio-->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="assets/img/Imagen de WhatsApp 2023-09-24 a las 15.30.09.jpg" alt="">
            </div>
            <h1>Adrian Bautista Cortes</h1>
            <h2>Hola que tal!!!, Soy Adrian</h2>
            <h3>No hay exito si no hay tormento</h3>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-regular fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!--seccion sobre mi-->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <p><span>Hola, Soy Adrian Bautista Cortes.</span>
            tengo 21 años naci en el 2002 mi fecha de cumpleaños 
            es el 11 de febrero, Actualmente soy estudiante de la universidad Tecnologia de la Huasteca Hidalguense.
            Estoy estudiando la carrera de Ingenieria en desarrollo y gestion de software. En mis tiempos libres, me gusta
            ver peliculas, escuchar musica, jugar videojuegos, tambien me gusta ir a correr al parque ecologico en las mañanas
            y algunas veces en las tardes me encanta salir a pasear en la moto siento que es una buena manera de ir a conocer lugares
            y gente nueva por los lugares que uno desea. Creo firmente en la importancia de la educacion y la innovacion de las tecnologias. 
            Siempre estoy dispuesto a aprender y conocer cosas nuevas. 
            <div class="fila">
                <!--datos personales-->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            11-02-2002
                        </li>
                        <li>
                            <strong>Telefono</strong>
                            7713496764
                        </li>
                        <li>
                            <strong>Email</strong>
                            cortes11022002abc@gmail.com
                        </li>
                        <li>
                            <strong>Direccion</strong>
                            Tepoxtequito Santa Monica
                        </li>
                    </ul>
                </div>
            </div>
            </p>
        </div>
        <div class="contenido-seccion">
            <div class="galeria">
                <div class="proyecto">
                    <img src="assets/img/descarga.jpeg" alt="">
                    <div class="overlay">
                        <h3>Desarrollo web</h3>
                        <p>Como programador me gusta mas en la aparte de fronted me gusta diseñar y el estilo visual</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/img/descarga.png" alt="">
                    <div class="overlay">
                        <h3>Articulos</h3>
                        <p>Con la poco esperiencia que tengo e aprendido sobre algunos articulos sobre Devops y tambien en el articulo 27000</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/img/1_34XEjSN0PJUVgbNy2YGVFw.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudiante</h3>
                        <p>como estudiante quisiera aprender mas cosas sobre la 
                            programacion quiero dar todo lo mejor de mi en la universidad y lo voy a lograr 
                        </p>
                    </div>
                </div>
    </section>

    <!--seccion Proyectos-->
    <section id="proyectos" class="proyectos">
        <div class="contenido-seccion">
            <h2>Proyectos</h2>
            <p><span>Proyectos</span>
                Estos son algunas proyectos que he creado recientemente
                o estan por realizarse 
            <div class="galeria">
                <div class="proyecto">
                    <img src="assets/img/Captura de pantalla 2023-09-24 193931.png" alt="">
                    <div class="overlay">
                        <h3>Veterinaria Cachorro Pet</h3>
                        <p>Se realizo la creo una pagina web de una vetirinaria</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/img/Captura de pantalla 2023-09-24 194134.png" alt="">
                    <div class="overlay">
                        <h3>Creacion de Alexa</h3>
                        <p>Se realizo la creacion de una skill en alexa</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/img/unity-has-apologized-for-its-install-fee-policy-and-says-it_wtvh.png" alt="">
                    <div class="overlay">
                        <h3>Creacion de un videojuego</h3>
                        <p>Se esta realizando la creacion de un videojuego con la herramienta de unity</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/img/70760bf1e88b184bb1bc.png" alt="">
                    <div class="overlay">
                        <h3>Aplicacion movil</h3>
                        <p>se realizara una aplicacion movil con la herramienta flutter</p>
                    </div>
                </div>
            </div>
        </p>
        </div>
    </section>

     <!-- SECCION CONTACTO -->
     <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <input type="text" placeholder="Tú Nombre">
                    <input type="text" placeholder="Número telefónico">
                    <input type="text" placeholder="Dirección de correo">
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button>
                        Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>
                <!-- Mapa -->
                <div class="col">
                    <img src="img/ubicacion.png" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Huejutla
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Llamanos: 7713496764
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: cortes11022002abc@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- footer -->
     <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-regular fa-envelope"></i></a>
        </div>
    </footer>

    <script src="assets/script.js"></script>

</body>
</html>