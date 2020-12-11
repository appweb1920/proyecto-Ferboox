<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
>
    <link rel="stylesheet" href="/CSS/base.css">
    <link rel="stylesheet" href="/base2.css">
    <style>
        @font-face{
            font-family: Roboto;
            src: url(fonts/Roboto-Light.ttf);
        }
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
<div class="table-responsive-sm ">
        <h2 class="text-center pb-3">Cotizacion</h2>
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
                                </tr>
                                @php ($total += $pd->cotizacion_precio) 
                            @endforeach       
                        </tbody>
                    </table>
                    <div>
                        <h6 class="text-right">Total: ${{$total}} MXN</h6>
                    </div>
</body>
</html>