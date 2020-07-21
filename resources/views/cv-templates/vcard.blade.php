@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vcard - Resume CV &amp; Vcard Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/cv-templates/vcard/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('/cv-templates/vcard/style.css')}}">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="vcard-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vcardNav">

                        <a href="index-onepage.html" class="nav-brand"><img src="{{asset('/cv-templates/vcard/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="vcardMenu">
                                    <li class="active"><a href="#about">About</a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>

                                <!-- Contact Button -->
                                <div class="contact-btn-area">
                                    <a href="#" class="btn vcard-btn contact-btn">Available for freelance work</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area bg-img clearfix" style="background-image: url({{asset('/cv-templates/vcard/img/bg-img/bg1.jpg')}});" id="about">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-sm-10 col-md-8">
                    <!-- Hero Content -->
                    <div class="hero-content">
                        <h5 class="wow fadeInUp" data-wow-delay="100ms">Hello I’m</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Maria Smith</h2>
                        <h3 class="wow fadeInUp" data-wow-delay="500ms">Digital Designer &amp; Illustrator</h3>
                        <!-- Contact Info -->
                        <div class="contact-info mt-30 wow fadeInUp" data-wow-delay="700ms">
                            <a href="#"><img src="{{asset('/cv-templates/vcard/img/core-img/envelope-small.png')}}" alt=""> contactme@templatename.com</a>
                            <a href="#"><img src="{{asset('/cv-templates/vcard/img/core-img/phone-call-small.png')}}" alt=""> +76 6524 567862 763</a>
                            <a href="#"><img src="{{asset('/cv-templates/vcard/img/core-img/monitor-small.png')}}" alt=""> www.mytemplatename.com</a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info mt-30 wow fadeInUp" data-wow-delay="900ms">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Me Area Start ##### -->
    <section class="about-me-area section-padding-100 clearfix" id="skills">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-6">
                    <div class="about-me-text wow fadeInUp" data-wow-delay="300ms">
                        <h2>Creative &amp; Commited</h2>
                        <h6>Nam id congue lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. Mauris impe rdiet, neque ornare varius.</h6>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="about-me-text wow fadeInUp" data-wow-delay="500ms">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu cursus nunc maximus. Integer convallis nisi nibh, et ornare neque ullamcorper ac. Nam id congue lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. Mauris imperdiet, neque ornare varius mattis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Me Area End ##### -->

    <!-- ##### Skilss Area Start ##### -->
    <section class="skills-area clearfix">
        <div class="container">
            <div class="row">

                <!-- Single Skills Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-skils-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div id="circle" class="circle" data-value="0.75">
                            <span>75%</span>
                        </div>
                        <div class="skills-text">
                            <h6>Photos Taken</h6>
                            <p>Etiam nec odio vestibulum est.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Skills Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-skils-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div id="circle2" class="circle" data-value="0.83">
                            <span>83%</span>
                        </div>
                        <div class="skills-text">
                            <h6>Digital Design</h6>
                            <p>Odio vestibulum est mattis.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Skills Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-skils-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div id="circle3" class="circle" data-value="0.25">
                            <span>25%</span>
                        </div>
                        <div class="skills-text">
                            <h6>HTML Coding</h6>
                            <p>Vestibulum est mattis effic.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Skills Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-skils-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div id="circle4" class="circle" data-value="0.95">
                            <span>95%</span>
                        </div>
                        <div class="skills-text">
                            <h6>Ilustrations</h6>
                            <p>Vestibulum est mattis effic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Skilss Area End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area section-padding-100-0 clearfix" id="services">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading white text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="line mx-auto"></div>
                        <h2>Personal Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/1.png')}}" alt="">
                            </div>
                            <h4>Digital Design</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/2.png')}}" alt="">
                            </div>
                            <h4>Illustrations</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/3.png')}}" alt="">
                            </div>
                            <h4>Web Design</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/4.png')}}" alt="">
                            </div>
                            <h4>Logo Design</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/5.png')}}" alt="">
                            </div>
                            <h4>Brand Identity</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="1100ms">
                        <div class="service-title d-flex align-items-end">
                            <div class="icon">
                                <img src="{{asset('/cv-templates/vcard/img/core-img/6.png')}}" alt="">
                            </div>
                            <h4>Motion Graphics</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="portfolio-area section-padding-100 clearfix" id="portfolio">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="line mx-auto"></div>
                        <h2>My Portfolio Showcase</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="vcard-projects-menu wow fadeInUp" data-wow-delay="500ms">
                        <div class="text-center portfolio-menu">
                            <button class="btn active" data-filter="*">Digital Design</button>
                            <button class="btn" data-filter=".web">Web Design</button>
                            <button class="btn" data-filter=".brand">Brand Identity</button>
                            <button class="btn" data-filter=".illustrations">Illustrations</button>
                            <button class="btn" data-filter=".motion">Motion Graphics</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row vcard-portfolio">

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area web brand wow fadeInUp" data-wow-delay="100ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p1.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Brand identity - Company</h5>
                        <a href="#" class="catagory">Branding</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p1.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area brand illustrations wow fadeInUp" data-wow-delay="200ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p2.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Device Mockup</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p2.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area web illustrations wow fadeInUp" data-wow-delay="300ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p3.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Brand identity - Company</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p3.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area brand motion wow fadeInUp" data-wow-delay="400ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p4.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Device Mockup</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p4.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area brand motion wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p6.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Brand identity - Company</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p6.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area web motion wow fadeInUp" data-wow-delay="600ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p8.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Device Mockup</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p8.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area illustrations motion wow fadeInUp" data-wow-delay="700ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p5.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Brand identity - Company</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p5.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area illustrations motion wow fadeInUp" data-wow-delay="800ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p7.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Device Mockup</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p7.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single-portfolio-area web motion wow fadeInUp" data-wow-delay="900ms">
                    <img src="{{asset('/cv-templates/vcard/img/bg-img/p9.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="portfolio-content">
                        <h5>Device Mockup</h5>
                        <a href="#" class="catagory">Digital Design</a>
                        <!-- Zoom View -->
                        <div class="vcard-img-zoom">
                            <a href="{{asset('/cv-templates/vcard/img/bg-img/p9.jpg')}}" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- See More Button -->
            <div class="row">
                <div class="col-12">
                    <div class="see-more mt-70 text-center wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn vcard-btn">See Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0 clearfix wow fadeInUp" data-wow-delay="500ms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between">
                    <!-- Single Cool Fact Area -->
                    <div class="single-cool-fact mb-100 d-flex align-items-center">
                        <div class="cf-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/chat.png')}}" alt="">
                        </div>
                        <div class="cf-text">
                            <h3><span class="counter">246</span></h3>
                            <h6>Projects Completed</h6>
                        </div>
                    </div>

                    <!-- Single Cool Fact Area -->
                    <div class="single-cool-fact mb-100 d-flex align-items-center">
                        <div class="cf-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/settings.png')}}" alt="">
                        </div>
                        <div class="cf-text">
                            <h3><span class="counter">178</span></h3>
                            <h6>Satisfied Clients</h6>
                        </div>
                    </div>

                    <!-- Single Cool Fact Area -->
                    <div class="single-cool-fact mb-100 d-flex align-items-center">
                        <div class="cf-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/like.png')}}" alt="">
                        </div>
                        <div class="cf-text">
                            <h3><span class="counter">25</span>K</h3>
                            <h6>Social Media Followers</h6>
                        </div>
                    </div>

                    <!-- Single Cool Fact Area -->
                    <div class="single-cool-fact mb-100 d-flex align-items-center">
                        <div class="cf-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/star.png')}}" alt="">
                        </div>
                        <div class="cf-text">
                            <h3><span class="counter">16</span></h3>
                            <h6>Awards Won</h6>
                        </div>
                    </div>

                    <!-- Single Cool Fact Area -->
                    <div class="single-cool-fact mb-100 d-flex align-items-center">
                        <div class="cf-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/photo-camera.png')}}" alt="">
                        </div>
                        <div class="cf-text">
                            <h3><span class="counter">3412</span></h3>
                            <h6>Pictures Taken</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="line mx-auto"></div>
                        <h2>Client’s testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial">
                            <h5>I really love it</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                            <div class="testimonial-author-info mt-50">
                                <img src="{{asset('/cv-templates/vcard/img/bg-img/tes.jpg')}}" alt="">
                                <h6>Daiane Smith, <span>Customer</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial">
                            <h5>5* Design &amp; Functionality</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                            <div class="testimonial-author-info mt-50">
                                <img src="{{asset('/cv-templates/vcard/img/bg-img/tes.jpg')}}" alt="">
                                <h6>Daiane Smith, <span>Client</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial">
                            <h5>The best pack out there</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                            <div class="testimonial-author-info mt-50">
                                <img src="{{asset('/cv-templates/vcard/img/bg-img/tes.jpg')}}" alt="">
                                <h6>Daiane Smith, <span>Customer</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial">
                            <h5>5* Design &amp; Functionality</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                            <div class="testimonial-author-info mt-50">
                                <img src="{{asset('/cv-templates/vcard/img/bg-img/tes.jpg')}}" alt="">
                                <h6>Daiane Smith, <span>Customer</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <div class="contact-area" id="contact">
        <div class="container-fluid">
            <div class="row">

                <!-- Contact Form Area -->
                <div class="col-12 col-md-6">
                    <div class="contact-area">

                        <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                            <h2>Get in touch</h2>
                        </div>

                        <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn vcard-btn mt-15" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="col-12 col-md-6">
                    <div class="map-area wow fadeInUp" data-wow-delay="700ms">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Information Area Start ##### -->
    <div class="contact-information wow fadeInUp" data-wow-delay="500ms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Single Contact Information -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/placeholder.png')}}" alt="">
                        </div>
                        <div class="contact-text">
                            <h6>Address:</h6>
                            <p>1481 Creekside Lane Avila <br> Beach, CA 93424</p>
                        </div>
                    </div>

                    <!-- Single Contact Information -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/phone-call.png')}}" alt="">
                        </div>
                        <div class="contact-text">
                            <h6>Phone:</h6>
                            <p>+53 345 7953 32453</p>
                        </div>
                    </div>

                    <!-- Single Contact Information -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon">
                            <img src="{{asset('/cv-templates/vcard/img/core-img/envelope.png')}}" alt="">
                        </div>
                        <div class="contact-text">
                            <h6>Email:</h6>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Information Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Copywrite -->
                <div class="col-12 text-center">
                    <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('/cv-templates/vcard/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('/cv-templates/vcard/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('/cv-templates/vcard/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('/cv-templates/vcard/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('/cv-templates/vcard/js/active.js')}}"></script>
    <!-- Google Maps -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script> --}}
    <script src="{{asset('/cv-templates/vcard/js/google-map/map-active.js')}}"></script>

</body>

</html>


@endif
