<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRT</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/intlInputPhone.min.css">
    <!-- style CSS -->

    <link rel="stylesheet" href="/css/style.css">


</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="/img/icon/icono.png" alt="logo" style="width: 108px; height: 80px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active_color" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/serv">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/nosotros">Sobre Nosotros</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/aporte">Tu aporte</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Socios
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/transportadora"> Transportadoras</a>
                                        <a class="dropdown-item" href="/generadora">Generadoras</a>
                                        <a class="dropdown-item" href="/propietarios">Propietarios</a>
                                        <a class="dropdown-item" href="/transportadores">Camioneros</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contacto">Contactanos</a>
                                </li>

                            </ul>
                        </div>
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->


      <!--inicio de  Contenido---->

      @yield('content')

      <!--fin de  Contenido---->




     <!-- footer part start-->
     <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 ">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/icon/icono.png" alt="" style="width: 160px; height: 120px;"> </a>

                        <div class="working_hours" style="margin-top: -15%;">
                            <p>Horarios de atencion: </p>
                            <p>Lunes-Viernes: <span>8:00AM - 6:00PM</span> </p>
                            <p>Sabado: <span>8:00AM - 12:00PM</span> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>CATEGORIAS</h4>
                        <ul>
                            <li><a href="/servicios">Servicios</a></li>
                            <li><a href="/nosotros">Sobre Nosotros</a></li>
                            <li><a href="/aporte">Tu Aporte</a></li>
                            <li><a href="#">Socios</a></li>
                            <li><a href="/contacto">Contactanos</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-footer-widget footer_3">
                        <h4>Servicio "GPS":</h4>
                        <div class="footer_img">


                                <div id="map" style="height: 200px; width: 200px;">
                                    <script>
                                      function initMap() {
                                        var uluru = {
                                          lat: -25.363,
                                          lng: 131.044
                                        };
                                        var grayStyles = [{
                                            featureType: "all",
                                            stylers: [{
                                                saturation: 90
                                              },
                                              {
                                                lightness: 90
                                              }
                                            ]
                                          },
                                          {
                                            elementType: 'labels.text.fill',
                                            stylers: [{
                                              color: '#ccdee9'
                                            }]
                                          }
                                        ];
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                          center: {
                                            lat: 3.30,
                                            lng: -70.50
                                          },
                                          zoom: 4,
                                          styles: grayStyles,
                                          scrollwheel: true
                                        });
                                      }
                                    </script>
                                    <script
                                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                                    </script>

                                </div>



                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6" style="margin-top: -23%; margin-left: 75%;">
                    <div class="single-footer-widget footer_3 mt_30">
                        <h4>Boletin informativo</h4>
                        <p>Coloca tu correo para recidir, boletin informativo sobre noticias relacionadas para el gremio de camioneros y transporte de carga. </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="coloca tu direccion de correo electronico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                                <button class="btn btn-default text-uppercase"><i
                                        class="far fa-paper-plane"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <p class="footer-text m-0">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> Todos los derechos reservados | Barranquilla-Colombia
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="social_icon">
                                        <a href="#"> <i class="ti-facebook"></i> </a>
                                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                        <a href="#"> <i class="ti-instagram"></i> </a>
                                        <a href="#"> <i class="ti-skype"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

      <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/intlInputPhone.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>

