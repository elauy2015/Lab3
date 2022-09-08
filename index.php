<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Laboratorio 3</title>
    <style type="text/css">
        a {
            text-decoration: none;
            color: black;
        }

        .hola {
            background-color: gray;
        }

        h3 {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/logo.png" class="img-fluid" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalogo">Catalogo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">1. Sala</a></li>
                            <li><a class="dropdown-item" href="#">2. Habitacion</a></li>
                            <li><a class="dropdown-item" href="#">3. Comedor</a></li>
                            <li><a class="dropdown-item" href="#">4. Niños</a></li>
                            <li><a class="dropdown-item" href="#">5. Baños</a></li>
                            <li><a class="dropdown-item" href="#">6. Cocina</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalogo">Catalogo</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>-->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Texto de buscado" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nosotros</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nuestra Misión</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nuestra Visión</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <h1 class="text-center" id="catalogo">CATÁLOGO</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="hola">
        <br><br><br>
        <p class="text-center">
            <a href="">Todos los derechos reservados - 2022 </a> <a href=""> Contactanos</a> <a href=""> Siguenos en las redes sociales </a>
        </p>
        <br><br><br>
    </div>

</footer>

</html>