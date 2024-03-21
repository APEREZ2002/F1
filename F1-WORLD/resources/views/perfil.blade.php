<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/barra.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #dc3545;
            color: white;
        }

        .footer {
            background-color: #0f0304 ;
            color: white;
            padding: 20px 0;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>
<body>

<header class="header">
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
    <h1>Perfil de Usuario</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @auth
                    <div class="card">
                        <div class="card-header" style="background-color: #dc3545; color: white;">Información del Usuario</div>
                        <div class="card-body">
                            <form action="{{ route('update-profile') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color: #dc3545; border-color: #dc3545;">Actualizar</button>
                            </form>
                        </div>
                    </div>
                @else
                    <p>Debes iniciar sesión para ver tu perfil.</p>
                @endauth
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p>Tlf: 696 69 69 69</p>
                <p>Mail: f69@f69.com</p>
                <div class="footer-hours">
                    <p>Horario de atención al cliente:</p>
                    <p>09h-14h / 15h-18h</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Agrega aquí cualquier script adicional que necesites -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
