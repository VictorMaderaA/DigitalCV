@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelly Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/cv-templates/Kelly/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/cv-templates/Kelly/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/cv-templates/Kelly/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/cv-templates/Kelly/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v2.0.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="{{asset('/cv-templates/Kelly/index.html')}}">Kelly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{asset('/cv-templates/Kelly/index.html')}}" class="logo"><img src="{{asset('/cv-templates/Kelly/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{asset('/cv-templates/Kelly/index.html')}}">Home</a></li>
          <li><a href="{{asset('/cv-templates/Kelly/about.html')}}">About</a></li>
          <li><a href="{{asset('/cv-templates/Kelly/resume.html')}}">Resume</a></li>
          <li><a href="{{asset('/cv-templates/Kelly/services.html')}}">Services</a></li>
          <li><a href="{{asset('/cv-templates/Kelly/portfolio.html')}}">Portfolio</a></li>
          <li><a href="{{asset('/cv-templates/Kelly/contact.html')}}">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Kelly Adams</h1>
      <h2>I'm a professional illustrator from San Francisco</h2>
      <a href="{{asset('/cv-templates/Kelly/about.html')}}" class="btn-about">About Me</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>



  <!-- Vendor JS Files -->
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/cv-templates/Kelly/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/cv-templates/Kelly/assets/js/main.js')}}"></script>

</body>

</html>



@endif
