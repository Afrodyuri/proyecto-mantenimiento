<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Historial de servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Historial de servicios FG tecno S.A.S. vista desde el Administrador">
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
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><img src="img/salir.png" width="20rem" alt=""> Cerrar sesión</a>
              </li>
          </div>
        </div>
      </nav>

    <!--panel-->

    <div class="contaider-fluid bg-primary">
        <h4 class="text-white p-5 fw-bold">Administrador</h4>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <a href="admin_panel.php"><img src="img/back.png" width="50rem" alt="volver"></a>
              </div>
              
              <div class="col-md-8">
                <div class="card border-0 ">
                  <div class="card-body">
                    <h4 class="card-title fw-bolder text-black">HISTORIAL DE SERVICIOS</h4></a>
                    <p class="mt-4">Consultar mantenimientos realizados</p>
                    <div class="input-group justify-content-center align-items-center">
                    <form role="search" style="width: 25rem;">
                        <p class="mt-2 fw-semibold">Filtrar por fecha:</p>
                        <input class="form-control me-2 bg-light text-center" type="date" aria-label="date">
                        <button class="btn btn-primary mt-4" type="submit">Buscar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
            <div class="col-md-2"></div>
          </div>
    </div>

    <div>
        <br><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9n4L4pC3pz");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
  
  </body>

</html>