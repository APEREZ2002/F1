<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/carrito.css"> <!-- Archivo CSS específico para el carrito -->
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Experiencias Fórmula 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/barra.css">
    <link rel="stylesheet" href="../css/carrito.css"> 


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
    <div class="container">
        <h1>Carrito de Compras</h1>
        <table class="carrito-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->producto }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>${{ $producto->precio_total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="total-carrito">Total: ${{ $total }}</p>
        <a href="{{ route('comprar') }}" class="btn btn-success btn-comprar comprar">Comprar</a>
    </div>
</main>


<footer class="footer">
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
    // Script para mostrar mensaje al agregar al carrito
    $(document).ready(function(){
        $(".comprar").click(function(){
            // Obtener el total del carrito
            var total = $(".total-carrito").text();
            // Mostrar el mensaje de confirmación con el total del carrito
            alert("¡Se ha tramitado tu comprar por valor de: " + total);
        });
    });
</script>
</body>
</html>
