<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base.css">
</head>
<body>
      <!--Menu--->
      <nav class="navbar navbar-expand-lg navbar-light colorPrimario" id ="menu">
            <a class="navbar-brand" href="/">
                <img src="icons/construccion.png" height="50" width="50" alt="">
                ConstruMx
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Cotización</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catálogo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/catalogo">Ver productos</a>
                            <a class="dropdown-item" href="/agrega">Agregar Producto</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Mi cuenta</a>
                    </li>
                </ul>
            </div>
        </nav>


    <div id="banner">
        <img class="img-fluid" src="imgs/imagenBanner2.jpg"  alt="">
    </div>
    <div class="contenedorCuerpo">
        <div class="contenedor border-bottom border-dark bg-light">
            <h2 class="text-center">COMPROMISO</h2>
            <div class="row">
                <div class="col-sm-6 texto">
                    <p>En ConstruMx buscamos el compromismo interno con nuestros clientes Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    teur sint occaecat cupidatat non proident, sunt in c
                    ulpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <div class="text-center pt-2" id="medalla">
                        <img class = "img-fluid" src="icons/medalla2.png" height="70" width= "70" alt="">
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <img class = "img-fluid" src="https://secureservercdn.net/198.71.233.51/ibx.8df.myftpupload.com/wp-content/uploads/2019/12/home-slider.gif" alt="">
                </div>
            </div>
            
        </div>

        <div class="contenedor border-bottom border-dark text-center bg-light">
            <h2 class="text-center">Haz tu Cotización</h2>
            <h5 class="pt-2">¿Por qué esperar a que te generen una Cotización? Tu la puedes hacer en tres sencillos pasos:</h5>
            <div class="row text-center" id="pasos">
                <div class="col-sm-3 containerSteps">
                    <img class="img-fluid pt-4" src="icons/usuario.png" height="100" width="100" alt="">
                    <p class="pt-3">¡Resgitrate o Ingresa a tu cuenta!</p>
                    <div class="pt-2">
                        <p class="dot pt-2 text-white">1</p>
                    </div>
                </div>
                <div class="col-sm-3 containerSteps">
                    <img class="img-fluid  pt-4" src="icons/click.png" height="100" width="100" alt="">
                    <p class="pt-3">Da click en la opción "Cotización"</p>
                    <div class="pt-2">
                        <p class="dot pt-2 text-white">2</p>
                    </div>
                </div>
                <div class="col-sm-3 containerSteps">
                    <img  class="img-fluid pt-4" src="icons/cotizacion.png" height="100" width="100" alt="">
                    <p class="pt-3">¡Comienza tu cotizacion!</p>
                    <div class="pt-2">
                        <p class="dot pt-2 text-white">3</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedor colorSecundario">
            <h2 class="text-center text-white">Contacto</h2>
        </div>
    </div>
 

    <footer class="text-center p-2">
      Fernando Bárcenas García
    </footer>
</body>
</html>