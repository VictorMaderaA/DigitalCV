<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/cv-templates/tmpl0001/assets/img/favicon.png" rel="icon">
  <link href="/cv-templates/tmpl0001/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/cv-templates/tmpl0001/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/cv-templates/tmpl0001/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/cv-templates/tmpl0001/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/cv-templates/tmpl0001/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/cv-templates/tmpl0001/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/cv-templates/tmpl0001/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/cv-templates/tmpl0001/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <div id="copy-me-cv">
        @if (isset($content))
            {!! $content !!}
        @else
            @include('cv-templates.deftmpl0001');
        @endif
    </div>

    @include('layouts.template_download')

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/cv-templates/tmpl0001/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/php-email-form/validate.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/cv-templates/tmpl0001/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/cv-templates/tmpl0001/assets/js/main.js"></script>

</body>

</html>
