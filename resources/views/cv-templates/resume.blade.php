@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/cv-templates/resume/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Resume</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('/cv-templates/resume/css/main.css')}}">
    </head>
    <body>
        <!-- start banner Area -->
        <section class="banner-area" id="home">
            <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="index.html">
                              <img src="{{asset('/cv-templates/resume/img/logo.png')}}" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="text-white lnr lnr-menu"></span>
                          </button>

                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#project">Projects</a></li>
                                <li><a href="#contact">Contact</a></li>
                               <!-- Dropdown -->
                                <li class="dropdown">
                                  <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Pages
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="generic.html">Generic</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                  </div>
                                </li>
                            </ul>
                          </div>
                    </div>
                </nav>
            </header>
            <!-- End Header Area -->
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 col-md-12 no-padding banner-right">
                    <img class="img-fluid" src="{{asset('/cv-templates/resume/img/header-img.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-12 banner-left">
                    <h1 class="text-white">
                        Hi, I’m <br>
                        <span>Etta Jennings</span> <br>
                        Art Director
                    </h1>
                    <p class="mx-auto text-white  mt-20 mb-40">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <a href="#" class="text-uppercase header-btn">Let Us Talk</span></a>
                </div>
            </div>
        </div>
        </section>
        <!-- End banner Area -->

        <!-- Start service Area -->
        <section class="service-area section-gap" id="service">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Have a Look at my Services</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="single-service col-lg-6 col-md-6 mb-30">
                        <div class="icon">
                            <img src="{{asset('/cv-templates/resume/img/s1.png')}}" alt="">
                        </div>
                        <div class="dec">
                            <h4 class="mt-30"><a href="#">Web Design</a></h4>
                            <p class="mt-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                            </p>
                        </div>
                    </div>
                    <div class="single-service col-lg-6 col-md-6 mb-30">
                        <div class="icon">
                            <img src="{{asset('/cv-templates/resume/img/s2.png')}}" alt="">
                        </div>
                        <div class="dec">
                            <h4 class="mt-30"><a href="#">Mobile Design</a></h4>
                            <p class="mt-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                            </p>
                        </div>
                    </div>
                    <div class="single-service col-lg-6 col-md-6">
                        <div class="icon">
                            <img src="{{asset('/cv-templates/resume/img/s3.png')}}" alt="">
                        </div>
                        <div class="dec">
                            <h4 class="mt-30"><a href="#">Print Design</a></h4>
                            <p class="mt-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                            </p>
                        </div>
                    </div>
                    <div class="single-service col-lg-6 col-md-6">
                        <div class="icon">
                            <img src="{{asset('/cv-templates/resume/img/s4.png')}}" alt="">
                        </div>
                        <div class="dec">
                            <h4 class="mt-30"><a href="#">Interaction Design</a></h4>
                            <p class="mt-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Area -->

        <!-- Start about Area -->
        <section class="about-area section-gap" id="about">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">About Myself</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 about-left">
                        <p>
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned. The history of video game is as interesting as a fairy tale.
                        </p>
                        <h4 class="pb-40">Tools Expertness</h4>
                            <div class="skillbar" data-percent="85%">
                                <div class="skill-bar-percent">After Effects 85%</div>
                                <div class="skillwrap">
                                    <div class="skillbar-bar" style="width: 85%;"></div>
                                </div>
                            </div>

                            <div class="skillbar" data-percent="80%">
                                <div class="skill-bar-percent">Photoshop 80%</div>
                                <div class="skillwrap">
                                    <div class="skillbar-bar" style="width: 80%;"></div>
                                </div>
                            </div>

                            <div class="skillbar" data-percent="40%">
                                <div class="skill-bar-percent">Illustrator 40%</div>
                                <div class="skillwrap">
                                    <div class="skillbar-bar" style="width: 40%;"></div>
                                </div>
                            </div>

                            <div class="skillbar" data-percent="70%">
                                <div class="skill-bar-percent">Sublime 70%</div>
                                <div class="skillwrap">
                                    <div class="skillbar-bar" style="width: 70%;"></div>
                                </div>
                            </div>

                            <div class="skillbar" data-percent="75%">
                                <div class="skill-bar-percent">Sketch 75%</div>
                                <div class="skillwrap">
                                    <div class="skillbar-bar" style="width: 75%;"></div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 about-right justify-content-end d-flex">
                        <div class="myself-wrap">
                            <img class="img-fluid" src="{{asset('/cv-templates/resume/img/about-img.jpg')}}" alt="">
                            <div class="desc">
                                <h4>Tonnie Johnson</h4>
                                <p class="pb-10">Interactive Designer</p>
                                <p><span class="lnr lnr-phone"></span> (012) +88 017 635 9754</p>
                                <p><span class="lnr lnr-envelope"></span> tonnie_johnson@gmail.com</p>
                                <a class="mt-30 text-uppercase talk-btn" href="#">Hire Me</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about Area -->

        <!-- Start qualification Area -->
        <section class="qualification-area pt-100 pb-80">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-20 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">My Qualifications</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-6 qty-left">
                        <div class="single-qly">
                            <h3 class="text-uppercase">Spondonit</h3>
                            <p>July 2015 to Present</p>
                            <h4 class="pt-20 pb-20">Creative Content Developer</h4>
                            <p>
                                All users on MySpace will know that there are millions of <br>people out there. Every day besides.
                            </p>
                        </div>
                        <div class="btm-border d-block mx-auto"></div>
                        <div class="single-qly">
                            <h3 class="text-uppercase">Codepixar</h3>
                            <p>May 2013 to Present</p>
                            <h4 class="pt-20 pb-20">UI/UX Designer</h4>
                            <p>
                                All users on MySpace will know that there are millions of <br>people out there. Every day besides.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 qty-right">
                        <div class="single-qly">
                            <h4 class="pb-20">Masters in Graphics & Fine Arts</h4>
                            <p><b>Session</b>: 2010-11</p>
                            <p><b>Result</b>:  3.78 (In the Scale of 4.00)</p>
                        </div>
                        <div class="btm-border d-block mx-auto"></div>
                        <div class="single-qly">
                            <h4 class="pb-20">Bachelor in Graphics & UI/UX</h4>
                            <p><b>Session</b>: 2006-09</p>
                            <p><b>Result</b>:  3.40 (In the Scale of 4.00)</p>
                        </div>
                        <div class="btm-border d-block mx-auto"></div>
                        <div class="single-qly">
                            <h4 class="pb-20">Diploma in Fine Arts & Printing</h4>
                            <p><b>Session</b>: 2003-06</p>
                            <p><b>Result</b>:  4.94 (In the Scale of 5.00)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End qualification Area -->

        <!-- Start project Area -->
        <section class="project-area section-gap" id="project">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Latest Done Projects</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 project-left">
                        <div class="single-project pb-100">
                            <img class="img-fluid" src="{{asset('/cv-templates/resume/img/l1.jpg')}}" alt="">
                            <h4 class="pt-100 pb-30"><a href="#">Panda Illustration</a></h4>
                            <p>
                                It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological.
                            </p>
                        </div>
                        <div class="single-project">
                            <img class="img-fluid" src="{{asset('/cv-templates/resume/img/l3.jpg')}}" alt="">
                            <h4 class="pt-100 pb-30"><a href="#">Panda Illustration</a></h4>
                            <p>
                                It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 project-right">
                        <div class="single-project">
                            <h4 class="pt-30 pb-30"><a href="#">Panda Illustration</a></h4>
                            <p class=" pb-100">
                                It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological.
                            </p>
                            <img class="img-fluid" src="{{asset('/cv-templates/resume/img/l2.jpg')}}" alt="">
                        </div>
                        <div class="single-project">
                            <h4 class="pt-100 pb-30"><a href="#">Panda Illustration</a></h4>
                            <p class=" pb-30">
                                It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological.
                            </p>
                            <img class="img-fluid" src="{{asset('/cv-templates/resume/img/l4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End project Area -->

        <!-- Start feature Area -->
        <section class="feature-area pt-100">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Some Features that Made us Unique</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-user"></span>
                                <h4><a href="#">Expert Technicians</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <h4><a href="#">Professional Service</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-phone"></span>
                                <h4><a href="#">Great Support</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-rocket"></span>
                                <h4><a href="#">Technical Skills</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-diamond"></span>
                                <h4><a href="#">Highly Recomended</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-bubble"></span>
                                <h4><a href="#">Positive Reviews</a></h4>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature Area -->

        <!-- start contact Area -->
        <section class="contact-area section-gap" id="contact">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-20 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">If you need, Just drop us a line</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg">
                    </div>
                    </div></div>
                </form>

            </div>
        </section>
        <!-- end contact Area -->

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">

                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="d-flex flex-row">

                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>

                                        <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                                    </div>
                                    <div class="info"></div>
                                    </form>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="{{asset('/cv-templates/resume/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{asset('/cv-templates/resume/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('/cv-templates/resume/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/cv-templates/resume/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/cv-templates/resume/js/parallax.min.js')}}"></script>
        <script src="{{asset('/cv-templates/resume/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/cv-templates/resume/js/jquery.sticky.js')}}"></script>

        <script src="{{asset('/cv-templates/resume/js/main.js')}}"></script>
    </body>
</html>


@endif
