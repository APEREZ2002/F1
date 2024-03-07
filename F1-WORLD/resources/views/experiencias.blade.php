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

<!-- Sección del banner con el carrusel -->
<section class="banner">
  <div class="contenido">
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Cambia el valor de data-bs-interval según tus preferencias (en milisegundos) -->
      <div class="carousel-inner">

        <div class="carousel-item active">
        <a href="/experiencias/1">
          <img src="../images/experiencia1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Experiencia VIP</h5>
            <p></p>
          </div>
        </a>
        </div>

        <div class="carousel-item">
        <a href="/experiencias/2">
          <img src="../images/experiencia2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pruebas de conduccion</h5>
            <p></p>
          </div>
          </a>
        </div>

        <div class="carousel-item">
        <a href="/experiencias/3">
          <img src="../images/experiencia3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Simulador Virtual</h5>
            <p></p>
          </div>
          </a>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>


    <div class="experiencias-list">
        <!-- Lista de experiencias con imágenes y texto -->
        <div class="experiencia">
          <a href="/experiencias/1">
            <img src="../images/experiencia1.jpg" alt="Experiencia 1">
            <a>
              <p>Disfruta de la Fórmula 1 en todo su esplendor con nuestra Experiencia VIP. Sumérgete en la emoción de las carreras desde los mejores asientos, con acceso exclusivo a zonas reservadas. Conoce a pilotos destacados, disfruta de servicios premium y vive la F1 como nunca antes. Una oportunidad única para los verdaderos aficionados que buscan un trato VIP en el mundo de la velocidad.</p>
          </div>

        <div class="experiencia">
          <a href="/experiencias/2">
            <img src="../images/experiencia2.jpg" alt="Experiencia 2">
            <a>
              <p>¡Siente la potencia de un monoplaza de Fórmula 1 en tus propias manos! Con nuestras Pruebas de Conducción, tendrás la oportunidad de experimentar la adrenalina de estar al volante de un auténtico bólido de F1. Guiado por expertos instructores, podrás dar vueltas al circuito, perfeccionar tus habilidades de conducción y vivir la emoción de pilotar como un profesional. Una experiencia única para los amantes de la velocidad y la conducción de alto rendimiento.</p>
        </div>


        <div class="experiencia">
          <a href="/experiencias/3">
            <img src="../images/experiencia3.jpg" alt="Experiencia 3">
            <a>
            <p>Sumérgete en el mundo de la Fórmula 1 con nuestra Experiencia de Simulador Virtual. Experimenta la emoción de las carreras con tecnología de vanguardia, simulando cada curva, aceleración y frenada de un circuito real. Ponte al volante, siente la vibración del motor y compite contra tus amigos en esta experiencia virtual inmersiva. Ideal para aquellos que desean probar sus habilidades en la pista sin salir de la comodidad de un simulador de última generación.</p>
        </div>
    </div>
</main>

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
