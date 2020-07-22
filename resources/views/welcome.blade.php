<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('vendor/mamba/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('vendor/mamba/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/mamba/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mamba/vendor/aos/aos.css') }}" rel="stylesheet">
    {{-- {{ asset('PASTEHERE') }} --}}
    <!-- Template Main CSS File -->
    <link href="{{ asset('vendor/mamba/css/style.css') }}" rel="stylesheet">

    @include('layouts.cookie-head')

    <!-- =======================================================
  * Template Name: Mamba - v2.3.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.html"><span>{{ env('APP_NAME') }}</span></a></h1>
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#services">Servicios</a></li>

                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <strong>Mi Cuenta</strong><span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">
                                Administrar
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url('{{ asset('vendor/mamba/img/slide/slide-1.jpg') }}');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Creamos tu Curriculum online</h2>
                                <p class="animate__animated animate__fadeInUp">Nosotros Creamos un curriculum virtual
                                    para que compartas y resaltes en la multitud. </p>
                                <a href="#pricing-cv"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Más Información</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style="background-image: url('{{ asset('vendor/mamba/img/slide/slide-2.jpg') }}');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Una pagina web para tu empresa</h2>
                                <p class="animate__animated animate__fadeInUp">No necesitas saber nada para crear la
                                    pagina web.
                                    Tu elige entre nuestra variedad de plantillas y nosotros nos encargamos del resto.
                                    Si posteriormente necesitas modificar la informacion de tu pagina, nos dices y
                                    nosotros te notificamos en cuanto se realizen los cambios.</p>
                                <a href="#contact"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Contacta con
                                    Nosotros</a>
                            </div>
                        </div>
                    </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>CV Online</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4 class="title"><a href="">CV Personalizado</a></h4>
                        <p class="description">Crea tu Curriculum con nuestras plantillas disponibles que se adaptan en
                            Ordenadores y Moviles.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">Visualiza</a></h4>
                        <p class="description">Obtén información sobre cuantas personas visualizaron tu cv.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="icofont-earth"></i></div>
                        <h4 class="title"><a href="">Comparte</a></h4>
                        <p class="description">Terminaste de editar tu cv. Obtén link de tu perfil y comparte con el
                            resto del mundo.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-image"></i></div>
                        <h4 class="title"><a href="">Almacena</a></h4>
                        <p class="description">Si utilizas imágenes o videos en tu cv, guardalos con nosotros obtén el
                            link y utilizalos.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="icofont-settings"></i></div>
                        <h4 class="title"><a href="">Nosotros lo Configuramos</a></h4>
                        <p class="description">Si no sabes como editar tu cv nosotros podemos ayudarte.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="icofont-tasks-alt"></i></div>
                        <h4 class="title"><a href="">Formularios de contacto wip</a></h4>
                        <p class="description">Agrega un formulario a tu cv y deja que te contacten. Nosotros
                            almacenamos los mensajes para que los veas cuando quieras.</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <section id="portfolio" class="portfolio section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

              <div class="section-title">
                <h2>Plantillas</h2>
                <p>Facilitamos el proceso de creacion de tu pagina con plantillas que puedes modificar.<br>
                Continuaremos agregando y expandiendo la colleccion de plantillas disponibles para que dispongas de una gran variedad</p>
              </div>

              <div class="row portfolio-container" style="position: relative; height: 877.5px;">

                @foreach (App\Models\Template::all()->where('active', true)->where('id', '<>', 1)->random(9) as $template)
                <div class="col-lg-4 col-md-6 portfolio-item" style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-wrap">
                      <img src="{{ $template->getPreview() }}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>{{ $template->name }}</h4>
                        <div class="portfolio-links">
                          <a href="{{ $template->getPreview() }}" data-gall="portfolioGallery" class="venobox vbox-item" title="App 1"><i class="icofont-eye"></i></a>
                          <a href="{{ route('templates.preview', [$template->id]) }}" title="More Details"><i class="icofont-external-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>

            </div>
          </section>

        <section class="pricing py-5" id="pricing-cv">

            <div class="section-title">
                <h2>Planes CV Online</h2>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Lite</h5>
                                <h6 class="card-price text-center">€1<span class="period">/mes</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Perfil propio</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>CV a partir de plantilla
                                        HTML</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Guarda tu documento CV</span>
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Permite que descarguen tu
                                            CV</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Comparte tu Perfil con
                                            otros</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Utiliza 1 plantilla con tu
                                            cuenta</span></li>
                                </ul>
                                <a href="{{route('payment.index')}}"
                                    class="btn btn-block btn-primary text-uppercase">Obtener</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">LitePlus</h5>
                                <h6 class="card-price text-center">€2<span class="period">/mes</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Perfil propio</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>CV a partir de plantilla
                                            HTML</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Guarda tu documento CV</span>
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Permite que descarguen tu
                                            CV</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Comparte tu Perfil con
                                            otros</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Almacena las imágenes y videos de
                                            tu CV con nosotros</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Utiliza hasta 3 plantilla
                                            simultaneas con tu cuenta</span></li>

                                </ul>
                                <a href="{{route('payment.index')}}"
                                    class="btn btn-block btn-primary text-uppercase">Obtener</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
                                {{-- <h6 class="card-price text-center">€3<span class="period">/mes</span></h6> --}}
                                <h6 class="card-price text-center"><span class="period">Próximamente</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Perfil propio</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>CV a partir de plantilla
                                            HTML</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Guarda tu documento CV</span>
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Permite que descarguen tu
                                            CV</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Comparte tu Perfil con
                                            otros</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Almacena las imágenes y videos de
                                            tu CV con nosotros</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Formularios de contacto ligados
                                            a tu perfil</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Almacenamos los mensajes que te
                                            lleguen</span></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i>Utiliza hasta 5 plantilla
                                            simultaneas con tu cuenta</span></li>

                                </ul>
                                {{-- <a href="#" class="btn btn-block btn-primary text-uppercase">Obtener</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>{{ env('APP_NAME') }}</h3>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('legal.terms')}}">Terminos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('legal.privacy')}}">Privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>
                            <a href="https://github.com/VictorMaderaA" style="color: white">
                                Víctor René Madera Arenas
                            </a></span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/mamba/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/mamba/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('vendor/mamba/js/main.js') }}"></script>

</body>

</html>
