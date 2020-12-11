<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="base2.css">

    <style>
        .login-container{
    margin-top: 5%;
    margin-bottom: 10%;
}

.contenedor{
    height: auto;
}
.login-logo{
    position: relative;
    margin-left: -41.5%;
}
.login-logo img{
    position: absolute;
    width: 20%;
    margin-top: 19%;
    background: #0C2445;
    border-radius: 4.5rem;
    padding: 5%;
}
.login-form-1{
    padding: 9%;
    background:#0C2445;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{
    padding: 9%;
    background: #FC9404;;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    margin-bottom:12%;
    color: #fff;
}
.btnSubmit{
    font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;
}
.btnForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.btnForgetPwd:hover{
    text-decoration:none;
    color:#fff;
}
    </style>
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
                        <a class="nav-link" href="/pdf">Cotización</a>
                    </li>
                    @if(!is_null($user))
                        @if($user->tipo == 2)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catálogo
                            </a>
                            
                            <div class="dropdown-menu back-lo" id="dro">
                                <a class="dropdown-item back-lo" href="/catalogo">Ver productos</a>
                                <a class="dropdown-item" href="/agrega">Agregar Producto</a>   
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/catalogo">Catalogo</a>
                        </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/catalogo">Catalogo</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        @if(is_null($user))
                        <a class="nav-link" href="/home">Registrate o Inicia Sesión</a>
                        @else
                        <a class="nav-link" href="/home">¡Hola {{$user->name}}!</a>
                        @endif
                    </li>
                    <li>
                        <form class="form-inline my-2 my-lg-0"  action="/catalogo" method="GET">
                            @csrf
                            <input class="form-control mr-sm-3" type="search" placeholder="Búsqueda por nombre" aria-label="Search" name="nombre">
                            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="contenedor bg-light">
            <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Pasos:</h3>
                        <ol class="text-white">
                        <li>Da un nombre a tu cotizacion</li>
                        <li>Agrega los productos que desees</li>
                        <li>Finaliza tu cotización</li>
                        </ol>
                          
                        
                    </div>
                    <div class="col-md-6 login-form-2">
                        <div class="login-logo">
                            <img src="icons/crear.png" alt=""/>
                        </div>
                        <h3>Empieza tu cotización</h3>
                            <form action="/pdf/guarda" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre de tu cotización">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Craer">
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center p-2">
            Fernando Bárcenas García
        </footer>
</body>
</html>