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
        <img src="../images/ricciardo.jpg" alt="Noticia 4">
            <div class="news-content">
                <h2>RICCIARDO</h2>
                <p>Daniel Ricciardo and the rebranded RB team set the pace in the opening free practice session of the 2024 season at the Bahrain International Circuit, leading the way from 
McLaren pair Lando Norris and Oscar Piastri amid a mixture of run plans.

At 1430 local time, the green light switching on at the end of the pit lane officially signalled the start of the campaign, with the 10 teams and their 20 drivers quick 
to emerge for some early running on Pirelli’s medium compound tyre.
After those initial laps, it was Verstappen who held P1 on a 1m 33.535s, a couple of tenths clear of Mercedes’ George Russell, despite the Dutchman complaining over 
the radio that his car was “miles off” what he wanted with “very bad downshifts and upshifts”.</p>
            <a class= "hola" href="/">Volver a las noticias</a>

        </div>

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
