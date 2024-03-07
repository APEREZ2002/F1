<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión - Fórmula 1</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa; 
    }
    .login-form {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      background-color: #fff; 
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .login-form h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #dc3545; 
    }
    .login-form .form-control {
      border-color: #dc3545; 
    }
    .login-form .btn-primary {
      background-color: #dc3545; 
      border-color: #dc3545;
    }
    .login-form .btn-primary:hover {
      background-color: #c82333; 
      border-color: #bd2130;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <h2>Iniciar Sesión</h2>
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
          </form>
          <a href="/register">Aun No Tienes Cuenta?</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
