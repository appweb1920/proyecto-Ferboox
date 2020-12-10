<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/base.css">
    <link rel="stylesheet" href="base2.css">
    <style>
            
        .contenedorTabla{
            padding: 1em 1em;
            height: 600px;
        }

        .formularioCotizador{
            margin-left: 30%;
            margin-bottom: 2em;
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catálogo
                        </a>
                        <div class="dropdown-menu back-lo" id="dro">
                            <a class="dropdown-item back-lo" href="/catalogo">Ver productos</a>
                            <a class="dropdown-item" href="/agrega">Agregar Producto</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Mi cuenta</a>
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
        <div class="bg-light">
            <h2 class="text-center pt-3 pb-3">Cotizador</h2>
            <div class="contenedorTabla">
                <div class="formularioCotizador">
                    <form action="/pdf/almacenaProducto" method="POST">
                        @csrf
                        <input type="hidden" name="pdf_id"  value ='{{$pdf->id}}'>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="product">Producto</label>
                                <select id="product" name="producto_id" class="form-control">
                                    <option selected>Escoger...</option>
                                    @if(!is_null($productos))
                                        @foreach($productos as $p)
                                        <option value="{{$p->id}}">{{$p->nombre}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="numero">Cantidad</label>
                                <input type="number" name="cantidad" class="form-control" value = "0" min="0">
                            </div>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Agregar</button>
                          
                        </div>
                    </form>
                </div>
                <div class="table-responsive-sm ">
                    <table class="table zero">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($total=0)
                              <!--Despliega todos los datos de la tabla puntos-->
                            @foreach($pdf->getProductos() as $pd)    
                                <tr>
                                    <th scope="row">{{$pd->nombre}}</th>
                                    <td>{{$pd->descripcion}}</td>
                                    <td>{{$pd->cantidad}}</td>
                                    <td>{{$pd->cotizacion_precio}}</td>
                                    <td><a href="/quitaProducto/{{$pdf->id}}&&{{$pd->cotizacion_id}}"><img src="/icons/x-mark.png" height="20" width="20" alt=""></a></td>
                                </tr>
                                @php ($total += $pd->cotizacion_precio) 
                            @endforeach       
                        </tbody>
                    </table>
                    <div>
                        <h6 class="text-right">Total: {{$total}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center p-2">
            Fernando Bárcenas García
        </footer>
</body>
</html>