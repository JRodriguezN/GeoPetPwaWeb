<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'GeoPet') }}</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="loader-logo">
            <img src="{{ asset('assets/images/carga.png') }}" alt="Logo">
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Geo Pet Logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#about">Acerca de</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Funciones</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Integrantes</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contactanos</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                                    <!-- @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                                    @endif -->
                                @endauth
                            @endif
                        </ul>        

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Geo Pet</h4>
                            <h6>Se un heroé más</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Descargar app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/cat1.jpeg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/sam.jpeg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/cat2.jpeg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/perrito_slide1.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Acerca de nosotros</h6>
                            <h2>"Conectando corazones, cuidando patitas"</h2>
                        </div>
                        <p>Geo Pet nació del amor por los animales y del deseo de ofrecer una solución real a quienes enfrentan la angustia de perder una mascota. Nuestro equipo combina tecnología, empatía y colaboración para crear una aplicación que facilita la búsqueda, conecta a las personas y da esperanza a cientos de familias.</p>
                        <div class="row" id="fotos">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/perrito_slide1.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/lindo-bulldog.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/gato-domestico.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{ asset('assets/images/cat1.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Que ofrecemos</h6>
                        <h2>Conoce las funcionalidades básicas de GeoPet</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>v1</h6></div>
                            <div class='info'>
                              <h1 class='title'>Búsqueda con IA</h1>
                              <p class='description'>Encuentra coincidencias automáticamente con reconocimiento visual.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>v1</h6></div>
                            <div class='info'>
                              <h1 class='title'>Reportes de Mascotas Perdidas</h1>
                              <p class='description'>Publica reportes fácilmente con fotos y ubicación.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>v1</h6></div>
                            <div class='info'>
                              <h1 class='title'>Comunidad de Ayuda</h1>
                              <p class='description'>Usuarios cerca de ti pueden ayudarte a encontrar a tu mascota. Haciendo reportes de avistamiento</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>v1</h6></div>
                            <div class='info'>
                              <h1 class='title'>Recompensas</h1>
                              <p class='description'>Los dueños de la mascota extraviada pueden ofrecer una recompensa a la persona que logre encontrarla.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>v1</h6></div>
                            <div class='info'>
                              <h1 class='title'>Perfil de mascotas</h1>
                              <p class='description'>Los usuarios pueden registrar a sus mascotas, para que tengan su propio perfil.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>Pronto</h6></div>
                            <div class='info'>
                              <h1 class='title'>Adopción</h1>
                              <p class='description'>Encuentra un nuevo amigo y dale un hogar lleno de amor.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card7'>
                            <div class="price"><h6>Pronto</h6></div>
                            <div class='info'>
                              <h1 class='title'>Marketplace de productos inteligentes</h1>
                              <p class='description'>Productos tecnológicos para mascotas. Lo mejor en tecnología para el bienestar de tu mascota.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card8'>
                            <div class="price"><h6>Pronto</h6></div>
                            <div class='info'>
                              <h1 class='title'>Expansión a más especies</h1>
                              <p class='description'>Añadir soporte para: aves, conejos, reptiles, animales exóticos. Geo Pet crece para ayudar a todas las especies.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card9'>
                            <div class="price"><h6>Pronto</h6></div>
                            <div class='info'>
                              <h1 class='title'>Cuidado y bienestar</h1>
                              <p class='description'>Servicios de apoyo: recordatorios de vacunas, agenda de citas con veterinario, recomendaciones de salud,tips de alimentación</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contáctanos <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>- Ofreciendo lo mejor para ti</h6>
                        <h2>Integrantes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="{{ asset('assets/images/mujer1.jpeg') }}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Mariana Morales Rodríguez</h4>
                            <span>Scrum Master</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="{{ asset('assets/images/hombre.jpeg') }}" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Juan Carlos Rodríguez Núñez</h4>
                            <span>Product Owner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>contáctanos</h6>
                            <h2>¿Cuál es tu duda?</h2>
                        </div>
                        <p>Envía un comentario para que nosotros podamos mejorar la app o te podamos ayudar en algo, no dudes en llamarnos si deseas saber algo más.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Llamanos</h4>
                                    <span><a href="#">961-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Correos</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Dudas o sugerencias</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tu nombre*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu dirección de correo" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Número de teléfono*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <div id="filterDate2">    
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon" >
                                            <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>  
                                </fieldset> 
                            </div>
                            <div class="col-lg-12 col-sm-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Enviar a GeoPet</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <h4 class="footer-section-title">Geo Pet</h4>
                        <p class="footer-section-content">
                            Conectando corazones, cuidando patitas. Una aplicación diseñada para ayudarte a encontrar y proteger a tus mascotas con tecnología de IA y el apoyo de una comunidad comprometida.
                        </p>
                        <div class="footer-social-links">
                            <ul class="social-icons">
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="footer-section-content">
                        <h4 class="footer-section-title">Nuestro Equipo</h4>
                        <div class="footer-team-member">
                            <strong>Mariana Morales Rodríguez</strong><br>
                            <span>Scrum Master</span>
                        </div>
                        <div class="footer-team-member">
                            <strong>Juan Carlos Rodríguez Núñez</strong><br>
                            <span>Product Owner</span>
                        </div>
                    </div>
                    <div class="footer-section-content" style="margin-top: 30px;">
                        <h4 class="footer-section-title">Contacto</h4>
                        <p style="margin-bottom: 8px;">
                            <i class="fa fa-envelope" style="margin-right: 8px;"></i>
                            <a href="mailto:contacto@geopet.com">contacto@geopet.com</a>
                        </p>
                        <p style="margin-bottom: 8px;">
                            <i class="fa fa-phone" style="margin-right: 8px;"></i>
                            <a href="tel:+521234567890">+52 123 456 7890</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="logo" style="margin-bottom: 20px;">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Geo Pet Logo">Geo Pet
                        </a>
                    </div>
                    <div class="footer-section-content">
                        <h4 class="footer-section-title">Descarga la App</h4>
                        <p style="margin-bottom: 15px;">
                            Disponible próximamente en iOS y Android
                        </p>
                        <div class="footer-section-content">
                            <p><strong>Funcionalidades principales:</strong></p>
                            <ul style="list-style: none; padding-left: 0;">
                                <li style="margin-bottom: 8px;">• Búsqueda con IA</li>
                                <li style="margin-bottom: 8px;">• Reportes de mascotas perdidas</li>
                                <li style="margin-bottom: 8px;">• Comunidad de ayuda</li>
                                <li style="margin-bottom: 8px;">• Sistema de recompensas</li>
                                <li>• Perfiles de mascotas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright">
                        <p>© 2025 Geo Pet. Todos los derechos reservados. | Conectando corazones, cuidando patitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/slick.js') }}"></script> 
    <script src="{{ asset('assets/js/lightbox.js') }}"></script> 
    <script src="{{ asset('assets/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <script>
        window.addEventListener("load", function () {
            const preloader = document.getElementById("preloader");
            preloader.classList.add("fade-out");

            setTimeout(() => {
            preloader.style.display = "none";
            }, 600);
        });
    </script>
  </body>
</html>