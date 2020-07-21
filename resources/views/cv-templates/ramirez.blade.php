@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE HTML>
<html lang="en-US">
    <head>

        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>RAMIREZ - Resume / CV /</title>
        <link rel="icon" href="{{asset('/cv-templates/ramirez/image/fav-icon.png')}}" />

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{asset('/cv-templates/ramirez/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/ramirez/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/ramirez/vendors/linear-icon/style.css')}}">
        <!-- Custom CSS -->
        <link href="{{asset('/cv-templates/ramirez/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('/cv-templates/ramirez/css/responsive.css')}}" rel="stylesheet">

    </head>
    <!--
    ================================================== -->

    <body>


    <!-- Header-->
    <div class="header">
        <div class="header-top">
            <div class="logo"><a href="index.html"><img alt="logo" src="{{asset('/cv-templates/ramirez/image/logo.png')}}" /></a></div>
            <h3>Welcome To Ramirez</h3>
            <div class="title-page">
                <div class="title"><h1>Ramirez Html5 CV Creative Template</h1></div>
                <a class="btn-demo" data-scroll data-options='{ "easing": "easeOutQuad" }' href="#demos">See Demo</a>
                <a class="btn-demo" href="#">Buy Now</a>
            </div>
        </div>
    </div><!-- End-Header-->
    <div id="demos" class="us-themes"><!--box-themes-->
        <div class="container">
            <div class="row single-section">
                <i class="lnr lnr-diamond"></i>
                <h3>Choose one of the Demos</h3>
				<div class="col-md-6 col-sm-6 col-xs-12">
				    <div class="hvr-float-shadow wow zoomIn">
				        <img class="img-responsive" src="{{asset('/cv-templates/ramirez/image/img1.jpg')}}" alt="">
                        <p>Home Version o1</p>
                        <a target="_blank" class="view-btn hvr-bounce-to-right" href="theme/index.html">View Demo</a>
				    </div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				    <div class="hvr-float-shadow wow zoomIn">
				        <img class="img-responsive" src="{{asset('/cv-templates/ramirez/image/img2.jpg')}}" alt="">
                        <p>Home Version 02</p>
                        <a target="_blank" class="view-btn hvr-bounce-to-right" href="theme/index2.html">View Demo</a>
				    </div>
				</div>
			</div>
        </div>
    </div><!--End-box-themes-->
    <section class="responsive_details">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="responsive_content">
                        <h3>Responsive & Retina ready</h3>
                        <p>Smarty School looks great on any device, from mobile to desktop and beyond.</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="computer_pic">
                        <img src="{{asset('/cv-templates/ramirez/image/responsiveness.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer text-center"><!--footer-->
        <div class="container">
            <div class="footer-inner">
                <h3 class="text-40">Create your own website today !</h3>
                <a class="buttons" href="#">Buy Now</a>
            </div>
        </div>
    </div><!--End-footer-->
    <script src="{{asset('/cv-templates/ramirez/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('/cv-templates/ramirez/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/cv-templates/ramirez/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('/cv-templates/ramirez/js/custome.js')}}"></script>
    <script>
        smoothScroll.init();
    </script>
    </body>
</html>



@endif
