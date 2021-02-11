<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="base2.css">
    <style>
        .imageC{
            height: 12em;
            width: 100%;
            margin-bottom: 3em;
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
                </ul>
            </div>
        </nav>

        <div class= "bg-light">
            <h2 class="text-center p-2">Catálogo</h2>
          
            <div class="row zero">
                
                <div class="col-sm-2">
                    Departamentos
                    <div>
                        <form action="/catalogo" method="GET">  
                           <ul class="p-1 filtroLista">
                            @if(!is_null($categorias))
                                @foreach($categorias as $c)
                                <li>
                                    <input type="checkbox" name="id" value="{{$c->id}}" class="form-group" onChange="this.form.submit()">
                                    <label for="{{$c->id}}">{{$c->tipoCategoria}}</label>
                                </li>
                                @endforeach
                                @if(!is_null($user) && $user->tipo == 2)
                                <li>
                                    <input type="checkbox" name="basura" value="1" class="form-group" onChange="this.form.submit()">
                                    <label for="basura">Borrados recientemente</label>
                                </li>
                                @endif
                            @endif
                               
                            </ul>
                        </form>
                    </div>
                    @if(!is_null($user))
                        @if($user->tipo == 2)
                        <div>
                            <form action="/agregarCategoria" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Agregar Categoría</label>
                                    <input type="text" class="form-control mb-1" id="formGroupExampleInput" name="categoria" placeholder="Arneses">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Agregar</button>
                                </div>
                            </form>
                        </div>
                        @endif
                    @endif
                </div>
                <div class="col-sm-10 border-left border-dark">
                    <h3 class="ml-3">Productos</h3>
                    <div class="d-flex justify-content-center">
                        <form class="form-inline my-2 my-lg-0"  action="/catalogo" method="GET">
                            @csrf
                            <input class="form-control mr-sm-3" type="search" placeholder="Búsqueda por nombre" aria-label="Search" name="nombre">
                            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </div>
                    @if(!is_null($productos) && count($productos) > 0)
                       <div class="row row-cols-1 row-cols-md-4 contenedorTarjetas mar-bottom pr-3">
                            @foreach($productos as $p)
                            <div class="col mb-4">
                                <div class="card">
                                    <div class = "text-center">
                                        <img src="{{asset('/storage/imgStore/'.$p->foto)}}" class="imageC " alt="...">
                                    </div>
                                    <!--<img src="imgs/kk.jpg" class="card-img-top" alt="">-->
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">{{$p->nombre}}</h5>
                                        <p class="card-text">{{$p->descripcion}}</p>
                                        <p class="card-text">Qty.{{$p->cantidad}}</p>
                                        @if(!is_null($user))
                                            @if($user->tipo == 2)
                                            <div class="zero text-center">
                                                @if(is_null($p->deleted_at))
                                                <button type="button" class="btn btn-primary btn-sm">
                                                <a href="/editarProducto/{{$p->id}}">
                                                    <img class="img-fluid" src="icons/editar.png" height="20" width="20">
                                                </a>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <a href="/borrarProducto/{{$p->id}}">
                                                        <img class="img-fluid" src="icons/borrar.png" height="20" width="20">
                                                    </a>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <a href="/restaura/{{$p->id}}">
                                                        <img class="img-fluid" src="icons/restaurar.png" height="20" width="20">
                                                    </a>
                                                </button>
                                                @endif
                                            </div>
                                            @endif
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <div class="text-center col-sm-12 mt-2 mb-4 contenedorNotFound">
                                <h3>Lo sentimos. No hay resultados para: "{{$nombre}}"</h3>
                            </div>
                        @endif
                        <div class="d-flex">
                            <div class="mx-auto">
                                    {{$productos->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                </div>
            </div>
        </div>        
    <footer class="text-center p-2">
      Fernando Bárcenas García
    </footer>
</body>