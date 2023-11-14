</html>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solicitudes de mantenimientos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Mantenimientos pendientes de programar desde la vista Administrador">
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
                <a class="nav-link" href="perfil-admin.php"><img src="img/cliente.png" width="20rem" alt=""> Perfil</a>
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
        <h4 class="text-white p-5 fw-bold">Administrador</h4>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <a href="admin_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
              </div>
              
              <div class="col-md-8">
                <div class="card border-0 ">
                  <div class="card-body">
                    <h4 class="card-title fw-bolder text-black">SOLICITUDES DE MANTENIMIENTO</h4></a>
                    <p class="mt-5">Mantenimientos pendientes de programación:</p>

                    <table class="table mt-5">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Fecha solicitud</th>
                            <th scope="col">Tipo</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>TecnoPlaza</td>
                            <td>12/04/2023</td>
                            <td>Correctivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Info Soluciones</td>
                            <td>12/04/2023</td>
                            <td>Preventivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Invercoop</td>
                            <td>13/04/2023</td>
                            <td>Correctivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Play Technologies S.A.S.</td>
                            <td>13/04/2023</td>
                            <td>Correctivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>QPRO S.A.S.</td>
                            <td>14/04/2023</td>
                            <td>Preventivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>SATLOCK S.A.S.</td>
                            <td>14/04/2023</td>
                            <td>Preventivo</td>
                            <td><a class="btn btn-primary" href="programar-tecnicos.php">Programar</a></td>
                          </tr>
                        </tbody>
                      </table>
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