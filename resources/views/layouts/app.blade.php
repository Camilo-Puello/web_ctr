<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title style="color: #6345fe;">Comunidad Camionera de Colombia</title>
    <link rel="icon" href="/img/favicon.png">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- animate CSS -->

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- flaticon CSS -->

    <!-- swiper CSS -->
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/intlInputPhone.min.css">

    <!-- style CSS -->

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">





    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/css/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/css/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/css/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




</head>

<body>
    @if(!\Request::is('login') && !\Request::is('register'))
         @include('parcial.vabvar')
    @endif


      <!--inicio de  Contenido---->

      @yield('content')

      <!--fin de  Contenido---->



      @if(!\Request::is('login') && !\Request::is('register'))
     <!--inicio footer-->
     <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-sm-6 ">
                    <div class="single-footer-widget footer_1">
                        <div class="col-md-12">
                        <a href="index.html"> <img src="/img/icon/icono.png" alt="" style="width: 160px; height: 130px;"> </a>

                        </div>

                        <div class="col-md-12">
                        <div class="working_hours">
                            <p>Horarios de atencion: </p>
                            <p>Lunes-Viernes: <span>8:00AM - 6:00PM</span> </p>
                            <p>Sabado: <span>8:00AM - 12:00PM</span> </p>
                        </div>

                        </div>
                        

                      
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>CATEGORIAS</h4>
                        <ul>
                            <li><a href="/serv">Servicios</a></li>
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
                
                <div class="col-xl-3 col-sm-6">
                    <div class="single-footer-widget" >
                        <h4>Boletin informativo</h4>
                        <p>Ingresa tu correo para recibir boletin informativo</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="direccion de correo electronico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
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
    <!--fin footer-->



      <!-- jquery plugins here-->

         <!-- Scripts -->
    <script src="/js/app.js" ></script>
    <!-- jquery -->
    <script src="/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="/js/gijgo.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/intlInputPhone.min.js"></script>
    <!-- contact js -->
    <script src="/js/jquery.ajaxchimp.min.js"></script>

    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/js/contact.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
    <script src="/js/app.js"></script>

    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
@endif
</html>
