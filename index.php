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
    <script src="https://kit.fontawesome.com/8613addc86.js" crossorigin="anonymous"></script>
    <title>WOW</title>
</head>

<body>
    <div class="redes">
        <ul>
            <li><a href="" class="icon-fb"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="" class="icon-tw"><i class="fab fa-twitter"></i></a></li>
            <li><a href="" class="icon-ig"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
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
                <li class="nav-item active">
                    <a class="nav-link" href="">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container full-height my-4">
        <div class="row justify-content-between ">
            <div class="col-12 col-xl-8 mb-2 text-center">
                <div class="row mt-2 shadow-none text-light">
                    <div class="col-12">
                        <h3>WebOnWay</h3>
                        <small>Ponte On</small>
                    </div>
                </div>
                <div class="row py-3 my-3 shadow-sm bg-dark text-light">
                    <div class="col-12 col-md-5">
                        <img src="img/desarrolloWEB.jpg" width="100%">
                    </div>
                    <div class="col-12 col-md-7">
                        <p class="text-justify">
                            Integra tu negocio al mundo web, para tener una mayor ventaja competitiva.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2 col-xl-3 mt-3 shadow-sm">
                <div class="row mt-2">
                    <div class="col-12 side-header rounded">
                        <h4 class="text-left">¿En qué te podemos ayudar?</h4>
                    </div>
                </div>
                <form class="row mx-2 text-light rounded bg-dark mt-4">
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="form-row">
                            <label for="contacto_nombre" class="col-12 col-form-label">Nombre:</label>
                            <input type="text" class="col-12 form-control" id="contacto_nombre">
                        </div>
                        <div class="form-row">
                            <label for="contacto_nombre" class="col-12 col-form-label">Correo:</label>
                            <input type="email" class="col-12 form-control" id="contacto_nombre">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="form-row">
                            <label for="contacto_nombre" class="col-12 col-form-label">Pregunta:</label>
                            <textarea class="form-control" id="" rows="5"></textarea>
                        </div>
                        <div class="form-row my-2 justify-content-end">
                            <button class="form-group btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer mt-2 bg-dark pt-3 pb-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <strong>2019 WebOnWay</strong>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>