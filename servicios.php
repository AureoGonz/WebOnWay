<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/woww.png" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <title>WOW</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img/woww.png" width="60" height="30" class="d-inline-block align-top" alt="">
            WebOnWay
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">Servicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container full-height my-3">
        <div class="row mt-5">
            <div class="col-12 p-2 rounded-top text-light bg-dark">
                <h1 class="pl-2 pt-2">Las mejores ideas</h1>
                <p class="pt-3 pl-5">mejora ante tu competencia</p>
            </div>
        </div>
        <div class="row justify-content-between my-3">
            <div class="col-12 mb-2 pr-3 text-center shadow-sm">
                <!-- corrusel -->
                <div class="carrusel my-3">
                    <div id="servicios" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#servicios" data-slide-to="0" class="active"></li>
                            <li data-target="#servicios" data-slide-to="1"></li>
                            <li data-target="#servicios" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item my-2 my-md-0 active">
                                <img src="img/dashboard.jpg" class="image-carrusel" alt="...">
                                <div class="carousel-caption text-white-50 bg-dark">
                                    <h5>Administra tu negocio</h5>
                                    <p>Integra un dashboard que ayude y facilite tus tareas</p>
                                </div>
                            </div>
                            <div class="carousel-item my-2 my-md-0">
                                <img src="img/desarrollo.png" class="image-carrusel" alt="...">
                                <div class="carousel-caption text-white-50 bg-dark">
                                    <h5>Pagina Web</h5>
                                    <p>Date a conocer de una mejor manera y personaliza tu contenido</p>
                                </div>
                            </div>
                            <div class="carousel-item my-2 my-md-0">
                                <img src="img/ventas.jpg" class="image-carrusel" alt="...">
                                <div class="carousel-caption text-white-50 bg-dark">
                                    <h5>Compras</h5>
                                    <p>Integra un carrito para tus clientes</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#servicios" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#servicios" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 p-2 rounded-top text-light bg-dark">
                <h1 class="pl-2 pt-2">Dirigido principalmente</h1>
                <p class="pt-3 pl-5">Nacemos para apoyar al futuro y al progreso</p>
            </div>
        </div>
        <div class="row justify-content-between my-5">
            <div class="col-12 col-lg-4 mb-2 text-center shadow-sm">
                <div class="card">
                    <img src="img/dashboard.jpg" class="card-img-top image-tarjeta" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freelancers</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-2 text-center shadow-sm">
                <div class="card">
                    <img src="img/desarrollo.png" class="card-img-top image-tarjeta" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pequeñas Empresas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-2 text-center shadow-sm">
                <div class="card">
                    <img src="img/ventas.jpg" class="card-img-top image-tarjeta" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Medianas empresas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-2 bg-dark pt-3 pb-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis
                    quibusdam, vero quia incidunt doloremque exercitationem et. Est eos, minima sed accusantium sint
                    officiis explicabo, totam laborum, hic ratione veniam eaque!</div>
                <div class="col-12 col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo illum est a
                    placeat deserunt iste aspernatur rerum delectus. Esse suscipit veritatis beatae aliquam amet quod
                    recusandae nulla saepe deleniti expedita?</div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>