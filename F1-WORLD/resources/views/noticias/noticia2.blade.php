<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Noticia</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/barra.css">

</head>
<body>
<header>
    <div class="linea-titulo">
        <div class="titulo">OS CARRINHOS</div>
        <img src="../images/LOGO.png" class="logo-banner">
        <div class="boton-banner">
            <button>
                <a href="/">NOTICIAS</a>&nbsp
            </button>
            <button>
                <a href="/social">SOCIAL</a>&nbsp
            </button>
            <button>
                <a href="/store">TIENDA</a>&nbsp
            </button>
            <button>
                <a href="/experiencias">EXPERIENCIAS</a>&nbsp
            </button>
            @auth
                <button>
                    Bienvenido, {{ Auth::user()->name }}!
                </button>
                <form action="/logout" method="post" style="display: inline-block;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <button>
                    <a href="/login">LOGIN</a>&nbsp
                </button>
            @endauth
        </div>
    </div>
</header>

    <main>
        <section class="news">
        <div class="main-news">
            <img src="../images/fantasy.jpg" alt="Noticia Principal">
            <div class="news-content">
                <h2>F1 FANTASY</h2>
                <p>El Gran Premio de Bahréin ya está aquí, así que es hora de que tus equipos de F1 Fantasy estén en plena forma para
 la próxima temporada antes de que comience la clasificación el viernes. Si no puedes decidir a quién elegir y hay 
algunas decisiones difíciles , nuestra programación de F1 TV ha compartido algunos de sus consejos para 2024.
Para aquellos que aún no lo saben, F1 Fantasy es un juego gratuito y se ofrecen fantásticos premios durante toda la temporada,
 incluidos dos pases del F1 Paddock Club para un Gran Premio* de 2025 para el ganador de la Liga Global.
Con $100 millones para gastar, crea el equipo de tus sueños de cinco pilotos y dos constructores (haciendo tantos cambios como 
quieras antes de que comience la clasificación en Bahrein), crea y únete a ligas con tus amigos, y juega en línea y en la aplicación oficial de F1.</p>
<a class= "hola" href="/">Volver a las noticias</a>
        </section>


    </main>

    <footer class="footer">
    <center>
        <p>Tlf: 696 69 69 69 // Mail: f69@f69.com  // Horario de atención al cliente: 09h-14h / 15h-18h </p>
        <p>&copy; OS CARRINHOS</p>
    </center>
</footer>
    




</body>
</html>
