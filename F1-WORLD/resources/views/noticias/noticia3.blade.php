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
        <img src="../images/f3.jpg" alt="Noticia 1">
            <div class="news-content">
                <h2>F3</h2>
                <p>It was PREMA Racing and Dino Beganovic that won the first pole position of the year, sealing P1 with a 1:46.431 for the top spot in the final moments of the session.

The Ferrari Academy Driver was over a tenth quicker than Hitech Pulse-Eight’s Luke Browning who ended up second, just 0.003s clear of Gabriele Minì in third.
The session was led early on by Trident’s Leonardo Fornaroli, who looked to be the driver to beat following the initial runs.</p>
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
