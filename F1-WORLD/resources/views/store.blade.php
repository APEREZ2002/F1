<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Experiencias Fórmula 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/barra.css">
    <link rel="stylesheet" href="../css/tienda.css"> 
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

<main style="text-align: center;">


    <br><br><br>
    <a href="{{ route('carrito') }}" class="btn btn-primary">Ir al Carrito</a> 
    <h1 class="display-4 tienda-title">TIENDA</h1> 
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              FILTRO
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">ROPA</a></li>
              <li><a class="dropdown-item" href="#">ACCESORIOS</a></li>
              <li><a class="dropdown-item" href="#">COLECCION</a></li>
            </ul>
          </div>
        </div>
    <br> <br>
    <div class="container">
        <div class="row">
            @foreach($productos as $producto)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->producto }}</h5>
                        <img src="../imagenes/{{$producto->archivo}}" >
                        <br> <br>
                        <p class="card-text">Precio: ${{ $producto->precio }}</p>
                        <form action="{{ route('agregar.carrito', $producto->id_producto) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary agregar-carrito" data-producto="{{ $producto->producto }}">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
        $(".agregar-carrito").click(function(){
            // Obtener el nombre del producto
            var producto = $(this).data('producto');
            // Mostrar el mensaje de confirmación con el nombre del producto
            alert("¡Se ha agregado " + producto + " al carrito!");
        });
    });
</script>

</body>
</html>
