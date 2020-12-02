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
    <style>

        html,body{
            background: #0C2445;
        }
        .colorPrimario{
            background: #0C2445;
        }

        .colorSecundario{
            background: #FC9404;
        }
        #menu a{
            color: #f0f0f0;
        }
        /* Set the border color */ 
          
        .custom-toggler.navbar-toggler { 
            border-color: white; 
        } 
        /* Setting the stroke to green using rgb values (0, 128, 0) */ 
          
        .custom-toggler .navbar-toggler-icon { 
            background-image: url( "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(252, 148, 4, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); 
        } 

        .contenedor{
            padding: 1em;
            background: white;
        }

        footer{
            background: #424242;
            color: white;
        }

        .texto{
            font-family: 'Nanum Gothic', sans-serif;
            font-size: 1em;
            padding-top: 3em;
            color: black;
        }

        .contenedorCuerpo{
            margin-left: 1em;
            margin-right: 1em;
        }

        h2{
            color: #FC9404;
        }

        @media screen and (max-width: 800px) {
            .contenedorCuerpo{
            margin: 0;
        }

        }
    </style>
</head>
<body>
    <!--Menu--->
    <nav class="navbar navbar-expand-lg navbar-light colorPrimario" id = "menu">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
        <img src="https://github.githubassets.com/images/modules/logos_page/Octocat.png" height="50" width="50" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="contenedorCuerpo">
        <div id="banner">
            <img class="img-fluid" src="imgs/imagenBanner2.jpg"  alt="">
        </div>
        <div class="contenedor border-bottom border-dark">
            <h2 class="text-center">COMPROMISO</h2>
            <div class="row">
                <div class="col-sm-6 texto border border-dark">
                    <p>En ConstruMx buscamos el compromismo interno con nuestros clientes Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    teur sint occaecat cupidatat non proident, sunt in c
                    ulpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
                <div class="col-sm-6 text-center border border-dark">
                    <img class = "img-fluid" src="https://secureservercdn.net/198.71.233.51/ibx.8df.myftpupload.com/wp-content/uploads/2019/12/home-slider.gif" alt="">
                </div>
            </div>
            
        </div>

        <div class="contenedor border-bottom border-dark">
            <h2>¿Cómo hacer tu cotización?</h2>
        </div>

        <div class="contenedor">
        <h2>Contacto</h2>
        </div>
    </div>

    <footer>
    xjjxbqjkbzjak
    </footer>
</body>
</html>