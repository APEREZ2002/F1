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
<div class="experiencia-simulador">
        <h2>Simulador Virtual</h2>
        <img src="../images/experiencia3.jpg" alt="Simulador Virtual">
        <p>
            Sumérgete en el mundo de la Fórmula 1 con nuestra Experiencia de Simulador Virtual. Experimenta la emoción de las carreras con tecnología de vanguardia, simulando cada curva, aceleración y frenada de un circuito real. Ponte al volante, siente la vibración del motor y compite contra tus amigos en esta experiencia virtual inmersiva. Ideal para aquellos que desean probar sus habilidades en la pista sin salir de la comodidad de un simulador de última generación.
        </p>
    </div>
    <div class="experiencia-buttons">
        <a href="/experiencias" class="btn btn-primary">Volver a las experiencias</a>
        <a href="#" class="btn btn-success" id="adquirirExperienciaBtn">Adquirir Experiencia</a>
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

<script>
    $(document).ready(function () {
        // Al hacer clic en el botón "Adquirir Experiencia"
        $("#adquirirExperienciaBtn").click(function () {
            // Aquí puedes mostrar un popup con la información de la actividad
            var fecha = "Fecha de la actividad: 23/11/2024";
            var precio = "Precio de la actividad: 45€";

            // Puedes usar librerías o implementar tu propio modal/popup aquí
            // Por ejemplo, usando el modal de Bootstrap
            var popupContent = "<p>" + fecha + "</p><p>" + precio + "</p>";
            $("#exampleModalBody").html(popupContent);
            $("#exampleModal").modal("show");
        });

        // Al cerrar el pop-up, mostrar la alerta
        $("#exampleModal").on("hidden.bs.modal", function () {
            alert("Experiencia adquirida");
        });
    });
</script>

<!-- Modal para mostrar la información de la actividad -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información de la Actividad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="exampleModalBody">
                <!-- Contenido del modal -->
            </div>
            <div class="modal-footer">
                <!-- Nuevo botón Cancelar -->
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <!-- Botón Cerrar original -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Adquirir</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
