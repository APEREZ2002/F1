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
            <img src="../images/libres2.jpg" alt="Noticia Principal">
            <div class="news-content">
                <h2>Libres 2</h2>
                <p>Lewis Hamilton terminó el primer día de acción en el Gran Premio de Bahréin en la cima después de marcar la vuelta más rápida en la segunda hora 
de entrenamientos libres, liderando a su compañero de equipo George Russell en un doblete de Mercedes.
A las 18:00 hora local, los pilotos salieron a la pista bajo los focos en condiciones más representativas 
de clasificación y carrera que en la sesión anterior del jueves. Dado que la mayoría de los equipos, salvo McLaren, RB y Kick Sauber, optaron por guardar el neumático blando 
para estas condiciones más frías en lugar de usarlo en la FP1, muchos abrieron su FP2 con ese compuesto mientras 
realizaban las primeras carreras de simulación de clasificación.</p>
            </div>
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
