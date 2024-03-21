    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/barra.css">
    <style>
        
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            position: relative; /* Añadido para referenciar la posición absoluta */
        }

        .alert {
            position: absolute;
            top: 73%; /* Situar en la parte superior */
            width: 16%; /* Ocupar todo el ancho */
            z-index: 999; /* Para que esté por encima de otros elementos */
        }
        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            flex-shrink: 0;
        }
    </style>
</head>

<body>

    <header>
        <div class="linea-titulo">
            <div class="titulo">OS CARRINHOS</div>
            <img src="../images/LOGO.png" class="logo-banner">
            <div class="boton-banner">
                <button><a href="/">NOTICIAS</a></button>
                <button><a href="/social">SOCIAL</a></button>
                <button><a href="/store">TIENDA</a></button>
                <button><a href="/experiencias">EXPERIENCIAS</a></button>
                @auth
                <button><a href="/perfil">Bienvenido, {{ Auth::user()->name }}!</a></button>
                <form action="/logout" method="post" style="display: inline-block;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @else
                <button><a href="/login">LOGIN</a></button>
                @endauth
            </div>
        </div>
    </header>

    <main class="contenedor-principal">

        <section class="lado-izquierdo">

            <div class="seccion1">
                <h2>REDES SOCIALES</h2>

                <div class="logos-arriba">
                    <a href="https://www.facebook.com/Formula1" target="_blank">
                        <img src="../images/facebook_logo.png" alt="Facebook" class="social-logo">
                    </a>
                    <a href="https://www.instagram.com/f1/" target="_blank">
                        <img src="../images/instagram_logo.png" alt="Instagram" class="social-logo">
                    </a>
                </div>

                <a href="https://www.youtube.com/@Formula1" target="_blank">
                    <img src="../images/youtube_logo.png" alt="YouTube" class="social-logo">
                </a>
            </div>

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <div class="seccion3">
                <div class="foro">
                    <!-- Foro y chat -->
                    <div class="espacio-mensajes">
                        <div class="chat-container">
                            @foreach($mensajes as $mensaje)
                            <div class="mensaje">
                                <strong>{{ $mensaje->usuario }}</strong> - {{ $mensaje->mensaje }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Aquí se mueve el formulario de mensajes a la Sección 2 -->
                    <div class="chatyboton">
                        <form action="{{ route('enviar.mensaje') }}" method="post" class="formulario-mensaje">
                            @csrf
                            <button class="boton" type="submit">Enviar</button>
                            <input type="text" name="mensaje" placeholder="Escribe tu mensaje...">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="seccion2">
            <!-- Primer elemento de video -->
            <div class="video-item">
            <a href="https://www.youtube.com/watch?v=kXwdf8osuFw">
            <img src="../images/INTRO.png" alt="Video 1" class="video-thumbnail">
        </a>
                <div class="video-info">
                    <h3>¡Presentamos nuestros nuevos títulos de apertura de F1 2024!</h3>
                    <p>En este video veremos la introduccion de los pilotos que participaran,
                        este año en el campeonato del mundo de la Formula 1.
                    </p>
                </div>
            </div>

            <!-- Segundo elemento de video -->
            <div class="video-item">
            <a href="https://www.youtube.com/watch?v=x6ywxNg7PM8">
            <img src="../images/ENFADO.png" alt="Video 2" class="video-thumbnail">
            </a>
                <div class="video-info">
                    <h3>¡MUY ENFADADO CON EL NUEVO F1 24! // Reacción al nuevo TRAILER</h3>
                    <p>Estoy muy enfadado con lo que ha sucedido en la presentación del nuevo F1 24... 
                        quiero saber que piensas. Además de los precios las novedades que nos adelantan... 
                        No me parecen suficientes. ¿Qué piensas tu?</p>
                </div>
            </div>

            <!-- Tercer elemento de video -->
            <div class="video-item">
            <a href="https://www.youtube.com/watch?v=tY_a--rnmvo">
            <img src="../images/LAWRENCE_STROLL.png" alt="Video 3" class="video-thumbnail">
            </a>
            
                <div class="video-info">
                    <h3>¡¿ASTON MARTIN F1 SERÁ COMPRADO POR ARAMCO?! | VERSTAPPEN Y NEWEY LOS PRINCIPALES OBJETIVOS</h3>
                    <p>Sobre el rumor que ha estado sonando durante mucho tiempo y que podría provocar la venta de Aston Martin F1, 
                        ahora surge más información sobre los intereses de Aramco en convertirse en el accionista mayoritario del equipo.

                        Además, hablaremos sobre el Gran Premio de Australia que está a punto de comenzar y las novedades en la recuperación de Carlos Sainz. 
                        También veremos la enorme importancia que tendrá este fin de semana para Mercedes, siendo crucial para el desarrollo del W15.</p>
                </div>
            </div>

            <!-- Cuarto elemento de video -->
            <div class="video-item">
            <a href="https://www.youtube.com/watch?v=8PTs6WoZT3w">
            <img src="../images/AUDI2026.png" alt="Video 4" class="video-thumbnail">
            </a>
            <div class="video-info">
                    <h3>Qué significa el gran cambio de planes de Audi para su participación en la F1 en 2026</h3>
                    <p>Audi ha tomado una importante decisión para su participación en la F1 en 2026, que será crucial 
                        para dar vida al equipo que está comprando. 

                        Tras la persistente especulación de que el compromiso de Audi con su primer programa oficial de F1 estaba flaqueando, 
                        el fabricante alemán ha demostrado lo contrario. </p>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer">
        <p>Tlf: 696 69 69 69</p>
        <p>Mail: f69@f69.com</p>
        <div class="footer-hours">
            <p>Horario de atención al cliente:</p>
            <p>09h-14h / 15h-18h</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>