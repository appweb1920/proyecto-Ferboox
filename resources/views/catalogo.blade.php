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
    <style>
        .hei{
            height: 650px;
        }

        .mar-left{
            margin-left: 8%;
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
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
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
                            @endif
                            </ul>
                        </form>
                    </div>

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
                    <div class="row row-cols-1 row-cols-md-4 contenedorTarjetas pb-5 pr-3">
                        @if(!is_null($productos))
                            @foreach($productos as $p)
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="https://lh3.googleusercontent.com/aR34MxRBretppyADbJcfqIZp-LraO1ELhk00lTZw0Q7MF1ebUKZeggeQkjBuZCCmYRSYNzr8=w640-h400-e365-rj-sc0x00ffffff" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$p->nombre}}</h5>
                                        <p class="card-text">{{$p->descripcion}}</p>
                                        <p class="card-text">Qty.{{$p->cantidad}}</p>
                                        <div class="zero text-center">
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
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="mx-auto">
                    {{$productos->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>        
    <footer class="text-center p-2">
      Fernando Bárcenas García
    </footer>
</body>