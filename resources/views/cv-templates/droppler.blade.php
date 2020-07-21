@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Droppler - Html Responsive Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="DryThemes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="{{asset('/cv-templates/droppler/images/favicon.png')}}" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/clear.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/common.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/font-awesome.min.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/carouFredSel.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/prettyPhoto.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/css/sm-clean.css')}}' />
        <link rel="stylesheet" type="text/css"  href='{{asset('/cv-templates/droppler/style.css')}}' />

        <!--[if lt IE 9]>
                <script src="{{asset('/cv-templates/droppler/js/html5shiv.js')}}"></script>
                <script src="{{asset('/cv-templates/droppler/js/respond.min.js')}}"></script>
        <![endif]-->

    </head>
    <body class="blog">

        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>


        <nav id="header-main-menu">
            <ul class="main-menu sm sm-clean">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="about-2.html">About 2</a>
                        </li>
                        <li>
                            <a href="about-3.html">About 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <form role="search" class="search-form">
                <label>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                </label>
            </form>
        </nav>

        <div id="particles-js" class="blog-top-content-holder relative">

            <div class="header-holder">
                <div class="toggle-holder relative right">
                    <div id="toggle" class="">
                        <div class="first-menu-line"></div>
                        <div class="second-menu-line"></div>
                        <div class="third-menu-line"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="header-logo">
                <a href="index.html">
                    <img src="{{asset('/cv-templates/droppler/images/default_droppler_logo.png')}}" alt="Droppler">
                </a>

            </div>
            <div class="blog-top-content content-1170 center-relative center-text relative">
                <h1 class="entry-title">DESIGNER. PHOTOGRAPHER. BLOGGER.</h1>
                <p class="site-description">Never forget that once upon a time, in an unguarded moment you recognized yourself as a friend</p>
            </div>
            <div class="clear"></div>
            <div class="icon-scroll"></div>
        </div>

        <article id="post-1" class="entry-holder blog-item-holder has-post-thumbnail">
            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="entry-date published">November 19, 2017</div>
                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href="#">Video</a>
                            </li>
                        </ul>
                    </div>
                    <div class="num-comments">
                        <a href="#">5 Comments</a>
                    </div>
                    <h2 class="entry-title">
                        <a href="single.html">
                            Start by doing what’s necessary then do what’s possible
                        </a>
                    </h2>
                    <a href="https://vimeo.com/157276599" data-rel="prettyPhoto[1]">
                        <div class="video-popup">
                            <img src="{{asset('/cv-templates/droppler/images/video_icon.svg')}}" alt="Play">
                        </div>
                        <div class="video-popup-text">WATCH VIDEO</div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <article id="post-2" class="entry-holder blog-item-holder has-post-thumbnail">
            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="entry-date published">November 19, 2017</div>
                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href="#">Webinar</a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="entry-title">
                        <a href="single.html">
                            Positive anything is better than negative nothing
                        </a>
                    </h2>
                    <a href="single.html">
                        <div class="read-more-holder">
                            <img src="{{asset('/cv-templates/droppler/images/read_more_icon.svg')}}" alt="Read more.">
                        </div>
                        <div class="read-more-text">READ FULL STORY</div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <article id="post-3" class="entry-holder blog-item-holder has-post-thumbnail">
            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="entry-date published">November 19, 2017</div>
                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href="#">Video</a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="entry-title">
                        <a href="single.html">
                            Trust in dreams for in them is hidden the gate to eternity
                        </a>
                    </h2>
                    <a href="single.html">
                        <div class="read-more-holder">
                            <img src="{{asset('/cv-templates/droppler/images/read_more_icon.svg')}}" alt="Read more.">
                        </div>
                        <div class="read-more-text">READ FULL STORY</div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <article id="post-4" class="entry-holder blog-item-holder no-background-image">

            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="excerpt-content">
                        <script>
                            var demo1_speed = "500";
                            var demo1_auto = "true";
                            var demo1_pagination = "true";
                            var demo1_hover = "true";
                        </script>
                        <div class="demo1 testimonial_slider_holder slider_holder">
                            <div class="testimonial-top-quotes">“</div>
                            <div class="caroufredsel_wrapper">
                                <ul id="demo1" class="slides testimonial">
                                    <li>
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">Most companies are looking to “wow” with their products, when in reality what they should be looking for is an “of course” reaction from their users.</p>
                                            <p class="testimonial-author">CHRISTIAN LINDHOLM </p>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">Be fluid. Treat each project differently. Be water, man. The best style is no style. Because styles can be figured out. And when you have no style they can’t figure you out.</p>
                                            <p class="testimonial-author">JAY-Z</p>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">I don't start with a design objective, I start with a communication objective. I feel my project is successful if it communicates what it is supposed to communicate</p>
                                            <p class="testimonial-author">MIKE DAVISON</p>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>

                            </div>
                            <div id="demo1_pagination" class="carousel_pagination left"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <article id="post-5" class="entry-holder blog-item-holder has-post-thumbnail">
            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="entry-date published">November 19, 2017</div>
                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href="#">Photography</a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="entry-title">
                        <a href="#">If you can design one thing you can design everything</a>
                    </h2>
                    <a href="single.html">
                        <div class="read-more-holder">
                            <img src="{{asset('/cv-templates/droppler/images/read_more_icon.svg')}}" alt="Read more.">
                        </div>
                        <div class="read-more-text">READ FULL STORY</div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <article id="post-6" class="entry-holder blog-item-holder has-post-thumbnail">
            <div class="entry-content relative">
                <div class="content-1170 center-relative center-text">
                    <div class="entry-date published">November 19, 2017</div>
                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href="#">Books</a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="entry-title">
                        <a href="single.html">A camel is a horse designed by a committee</a>
                    </h2>
                    <a href="single.html">
                        <div class="read-more-holder">
                            <img src="{{asset('/cv-templates/droppler/images/read_more_icon.svg')}}" alt="Read more.">
                        </div>
                        <div class="read-more-text">READ FULL STORY</div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </article>


        <div class="page-pagination-holder relative">
            <a href="#">
                <div class="previous-post-link">PREVIOUS STORY</div>
            </a>
            <a href="#">
                <div class="next-post-link">NEXT STORY</div>
            </a>
            <div class="clear"></div>
        </div>

        <footer class="footer">
            <div class="content-1170 center-relative">
                <ul>
                    <li class="left-footer-content">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </li>
                    <li class="right-footer-contnet">
                        <a href="#">Twitter</a>
                        <a href="#">Linkedin</a>
                        <a href="#">Dribbble</a>
                        <a href="#">Instagram</a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </footer>

        <div class="fixed scroll-top">
            <img src="{{asset('/cv-templates/droppler/images/back_to_top.png')}}" alt="Go Top">
        </div>

        <!--Load JavaScript-->
        <script src="{{asset('/cv-templates/droppler/js/jquery.js')}}"></script>
        <script src="{{asset('/cv-templates/droppler/js/particles.min.js')}}"></script>
        <script src="{{asset('/cv-templates/droppler/js/app.js')}}"></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.fitvids.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.smartmenus.min.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/isotope.pkgd.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/imagesloaded.pkgd.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/isotope.pkgd.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.carouFredSel-6.0.0-packed.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.mousewheel.min.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.touchSwipe.min.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.easing.1.3.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/imagesloaded.pkgd.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.prettyPhoto.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/jquery.nicescroll.min.js')}}'></script>
        <script src='{{asset('/cv-templates/droppler/js/main.js')}}'></script>
    </body>
</html>



@endif
