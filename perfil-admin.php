<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Perfil del administrador donde puede ver y modificar algunos de sus datos">
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
                <a class="nav-link active" href="#"><img src="img/cliente.png" width="20rem" alt=""> Perfil</a>
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
        <div class="container">
            <div class="row">
              <div class="col-md-2">
                <a href="admin_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
              </div>
              
              <div class="col-md-8">
                <div class="card border-0 ">
                  <div class="card-body">
                    <h5 class="fw-bold">Datos de cuenta</h5>
                    <form class="row g-3 mt-3">
                        <div class="col-md-6">
                          <label for="nombre-rep" class="form-label">Nombre representante</label>
                          <input type="nombre" class="form-control" id="nombre-rep" placeholder="Homero Lapida">
                        </div>
                        <div class="col-md-6">
                          <label for="telefono-empresa" class="form-label">Teléfono</label>
                          <input type="tel" class="form-control" id="telefono-empresa" placeholder="+57 3001785260">
                        </div>
                      </form>
                      <form class="row g-3 mt-1">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Correo electrónico</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Seraphcontacto@gmail.com">
                        </div>
                        <div class="col-md-6">
                          <label for="nit-empresa" class="form-label">NIT</label>
                          <input type="password" class="form-control" id="nit-empresa" placeholder="18956256-5">
                        </div>
                      </form>
                      <form class="row g-3 mt-1">
                        <div class="col-md-6">
                          <label for="nombre-empresa" class="form-label">Nombre empresa</label>
                          <input type="email" class="form-control" id="nombre-empresa" placeholder="SERAPH Inc">
                        </div>
                        <div class="col-md-6">
                          <label for="direccion-empresa" class="form-label">Dirección</label>
                          <input type="password" class="form-control" id="direccion-empresa" placeholder="Av 12 #54-63">
                        </div>
                      </form>
                       
                    <div class="text-center">
                        <button class="btn btn-primary mt-4 fw-bold" type="submit">Actualizar datos</button>
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