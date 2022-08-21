<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pet Health &mdash; Para el cuidado de tu mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tabajo de grado" />
    <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="grupo" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>

    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="num"># Celular</p>
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-1">
                            <div id="fh5co-logo"> <img class="img-responsive" src="../images/logo_peth.png" alt="work"> <a href="index.html">Petheat<span>.</span></a></div>
                        </div>
                        <div class="col-xs-11 text-right menu-1">
                            <ul>
                                <li class="active"><a href="../index.html">Home</a></li>
                                <li><a href="../precio.html">Precios</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Aplicaciones </a>
                                    <ul class="dropdown">
                                        <li><a href="#">App para clientes</a></li>
                                        <li><a href="#">App para veterinarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="../contact.html">Contactos</a></li>
                                <li class="btn-cta"><a href="login.php"><span>Inicia sesion</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

        <div id="fh5co-started" style="background-image:url(../images/Petheat.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h1 style="color:#ffff">Registrate <a class="icon-tree"></a></h1>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Tu apellido" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="n_usuario" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label for="validationCustom03" class="form-label">correo electronico</label>
                                <input type="text" class="form-control" id="c_electronico" required>
                                
                            </div>
                            <div class="col-md-3">
                                <br>
                                <label for="validationCustom04" class="form-label">Rol</label>
                                <select class="form-select" id="rol" required>
                                    <option selected disabled value="">Escoje tu Rol</option>
                                    <option>veterinario</option>
                                    <option>Dueño de veterinaria</option>
                                    <option>Usuario</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecciona tu rol
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <label for="validationCustom05" class="form-label">Veterinaria</label>
                                <input type="text" class="form-control" id="n_veterinaria" required>
                                <div class="invalid-feedback">
                                    Por defecto no estara verificada tu veterinaria.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Acepta terminos y condiciones <a href="#">terminos y condiciones</a> 
                                    </label>
                                    <div class="invalid-feedback">
                                        Pronto no estaremos comunicando con usted.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Registro</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>

    </div>

    <footer id="fh5co-footer" role="contentinfo">
        <!-- sobre nosotros-->
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h4>Acerca de nosotros</h4>
                    <p>Texto</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Pet Health</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Precios</a></li>
                        <li><a href="#">Aplicaciones</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4> Prueba </h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Prueba</a></li>

                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Municipios de Cobertura</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Santander de Quilichao</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Legal</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Ley proteccion de datos</a></li>
                        <li><a href="#">Ley</a></li>
                        <li><a href="#">Ley</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">Conoces nuestras redes <a href=# target="_blank">Redes sociales</a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="../js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="../js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="../js/main.js"></script>

</body>

</html>