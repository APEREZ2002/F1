<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Noticias de Fórmula 1</title>
    <link rel="stylesheet" href="../css/barra.css">
    <link rel="stylesheet" href="../css/style.css">
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
                    <a href="/perfil">Bienvenido, {{ Auth::user()->name }}!</a>
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
        <h1>Last News:</h1>
        <div class="main-news">
            <img src="../images/2.jpeg" alt="Noticia Principal">
            <div class="news-content">
                <h2>Hamilton se va a Ferrari</h2>
                <p>Ferrari ha anunciado a las 20.12 de la tarde el fichaje más sensacional de los últimos años en el deporte y desde luego uno de los más importantes 
de la historia de la Fórmula 1: el piloto más laureado de todos los tiempos une su destino, a sus 39 años, con el mejor equipo de Fórmula 1 de todos 
los tiempos. Ni más ni menos
Tendrán en sus filas además, en diferentes momentos, a los dos únicos heptacampeones, Schumacher y Hamilton, y el foco mediático de impresión que 
genera el británico, con tantos seguidores y fuerza en las redes como el Cavallino.</p>
            </div>
        </div>
        <div class="secondary-news">
            <a href="/noticias/1">
                <img src="../images/libres2.jpg" alt="Noticia 1">
            </a>
            <a href="/noticias/2">
                <img src="../images/fantasy.jpg" alt="Noticia 2">
            </a>
            <a href="/noticias/3">
                <img src="../images/f3.jpg" alt="Noticia 3">
            </a>
            <a href="/noticias/4">
                <img src="../images/ricciardo.jpg" alt="Noticia 4">
            </a>
        </div>
    </section>
</main>

<footer>
    <center>
        <p>Tlf: 696 69 69 69 // Mail: f69@f69.com  // Horario de atención al cliente: 09h-14h / 15h-18h </p>
        <p>&copy; OS CARRINHOS</p>
    </center>   
</footer>

</body>
</html>
