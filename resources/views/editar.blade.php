<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/base.css">
    <link rel="stylesheet" href="/base2.css">

    <style>
        .contenedorAgrega{
            margin-top: 1em;
            background: #E2E2E2;
            color: black;
        }

        .subContenedor{
            padding: 2em 1em 1em 1em;
            height: auto;
        }

        .button-right
        {
            text-align: right;
        }
    </style>
</head>
<body>
       <!--Menu--->
       <nav class="navbar navbar-expand-lg navbar-light colorPrimario" id ="menu">
            <a class="navbar-brand" href="/">
                <img src="/icons/construccion.png" height="50" width="50" alt="">
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
        <div class="contenedorAgrega">
            <h2 class="text-center">Editar producto</h2>
            <div class="subContenedor bg-light">
                <h3 class="border-bottom border-dark">Datos</h3>
                <form action="guardaProducto" method="POST" class="pt-4"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto" value="{{$producto->nombre}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                            <select name="tipoCategoria" class="form-control">
                                 @foreach($producto->getCategoria() as $p)
                                    <option value="{{$p->id}}"selected>{{$p->tipoCategoria}}</option>
                                @endforeach
                                @if(!is_null($categorias))
                                    @foreach($categorias as $c)
                                    <option value="{{$c->id}}">{{$c->tipoCategoria}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value ="{{$producto->cantidad}}"id="cantidad" name="cantidad" placeholder="Cantidad de productos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <textarea name="descripcion" value="{{$producto->descripcion}}"class="form-control" id="descripcion" placeholder="Breve descripción del producto">{{$producto->descripcion}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                        <div class="col-sm-10">
                            <input name="precio" class="form-control" id="precio" placeholder="0.00" step="any" type="number" min="0.01" value="{{$producto->precio}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Imagen del producto</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/png, image/jpg" value="{{$producto->foto}}">
                        </div>
                        <div class="col-sm-2 pr-2">
                            <img src="{{asset('/storage/imgStore/'.$producto->foto)}}" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 button-right">
                            <button type="submit" class="btn btn-primary ">Actualizar</button>
                        </div>
                    </div>
                </form>
                <!--<img class="img-fluid" src="https://media2.giphy.com/media/QXhSr6NDR4F5t69GL8/giphy.gif" alt="">-->
            </div>      
        </div>
        

        <footer class="text-center p-2">
            Fernando Bárcenas García
        </footer>
</body>
</html>