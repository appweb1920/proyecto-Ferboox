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
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active pr-2">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item  pr-2">
                        <a class="nav-link" href="/catalogo">Catálogo</a>
                    </li>
                    <li class="nav-item  pr-2">
                        <a class="nav-link" href="#">Cotización</a>
                    </li>
                    <li class="nav-item  pr-2">
                        <a class="nav-link" href="#">Mi Cuenta</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class= "bg-light ">
            <h2 class="text-center p-2">Catálogo</h2>
            <div class="row zero">
                <div class="col-sm-3">
                    Filtros
                    <div>
                        <ul class="p-1 filtroLista">
                            <li>
                                <input type="checkbox" id = "1">
                                <label for="precio1">$0.00 - $250.00</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="precio2">$250.00 - $500.00</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="precio3">$500.00 - $1,000.00</label>
                            </li>
                            <li>
                                <input type="checkbox" id ="4">
                                <label for="precio4">$1,000.00 - $10,000.00</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 border-left border-dark zero">
                    Productos
                    <div class="row row-cols-1 row-cols-md-3 contenedorTarjetas">
                        <div class="col mb-4">
                            <div class="card">
                            <img src="https://lh3.googleusercontent.com/aR34MxRBretppyADbJcfqIZp-LraO1ELhk00lTZw0Q7MF1ebUKZeggeQkjBuZCCmYRSYNzr8=w640-h400-e365-rj-sc0x00ffffff" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                            <img src="https://lh3.googleusercontent.com/aR34MxRBretppyADbJcfqIZp-LraO1ELhk00lTZw0Q7MF1ebUKZeggeQkjBuZCCmYRSYNzr8=w640-h400-e365-rj-sc0x00ffffff" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                            <img src="https://lh3.googleusercontent.com/aR34MxRBretppyADbJcfqIZp-LraO1ELhk00lTZw0Q7MF1ebUKZeggeQkjBuZCCmYRSYNzr8=w640-h400-e365-rj-sc0x00ffffff" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                            <img src="https://lh3.googleusercontent.com/aR34MxRBretppyADbJcfqIZp-LraO1ELhk00lTZw0Q7MF1ebUKZeggeQkjBuZCCmYRSYNzr8=w640-h400-e365-rj-sc0x00ffffff" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <footer class="text-center p-2">
      Fernando Bárcenas García
    </footer>
</body>