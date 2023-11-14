<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de inicio - Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Panel de usuario donde están todas las acciones que puede realizar dentro del software">
    <style>
        body {
            background-color: #007BFF;
            color: #FFFFFF;
        }
        .navbar {
            background-color: #007BFF;
        }
        .card {
            background-color: #FFFFFF;
            color: #000000;
        }
    </style>
  </head>

  <body class="bg-primary">

    <!--navbar-->

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="index.php">
          <img src="img/logosolo.png" alt="logo pagina" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="nav nav-tabs ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="perfil-usuario.php"><img src="img/cliente.png" width="20rem" alt=""> Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><img src="img/salir.png" width="20rem" alt=""> Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!--panel-->

    <div class="contaider-fluid bg-primary">
        <h4 class="text-white p-5 fw-bold">Usuario</h4>
        <div class="container text-center mt-5">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-2 mt-5">
                <div class="card border-0">
                  <a class="text-decoration-none" href="histo-cliente.php"><img src="img/historial.png" class="card-img-top" alt="historial">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-black">Consultar historial</h5></a>
                  </div>
                </div>
              </div>
               
              <div class="col-md-2 mt-5">
                <div class="card border-0">
                  <a class="text-decoration-none" href="cliente-solicitar-matenimiento.php"><img src="img/programar.png" class="card-img-top" alt="programar">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-black">Solicitar mantenimiento</h5></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9n4L4pC3pz");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
  
  </body>
  
</html>