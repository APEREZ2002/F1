<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Experiencias Fórmula 1</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/experiencias/style.css">
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
    <div class="experiencia-vip">
        <h2>Experiencia VIP</h2>
        <img src="../images/experiencia1.jpg" alt="Experiencia VIP">
        <p>
            Disfruta de la Fórmula 1 en todo su esplendor con nuestra Experiencia VIP. Sumérgete en la emoción de las carreras desde los mejores asientos, con acceso exclusivo a zonas reservadas. Conoce a pilotos destacados, disfruta de servicios premium y vive la F1 como nunca antes. Una oportunidad única para los verdaderos aficionados que buscan un trato VIP en el mundo de la velocidad.
        </p>
    </div>
    <div class="experiencia-buttons">
            <a href="/experiencias" class="btn btn-primary">Volver a las experiencias</a>
            <a href="#" class="btn btn-success">Adquirir Experiencia</a>
        </div>
<footer>
    <p>Tlf: 696 69 69 69</p>
    <p>Mail: f69@f69.com</p>
    <div class="footer-hours">
        <p>Horario de atención al cliente:</p>
        <p>09h-14h / 15h-18h</p>
    </div>
</footer>

<!-- Agrega aquí cualquier script adicional que necesites -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
