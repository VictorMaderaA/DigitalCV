@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Alias Colorlib &mdash; One Page Template for Personal/CV Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- <link rel="stylesheet" href="{{asset('/cv-templates/alias/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('/cv-templates/alias/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/cv-templates/alias/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('/cv-templates/alias/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('/cv-templates/alias/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/cv-templates/alias/css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



    <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.html">Alias</a>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <section class="site-hero" style="background-image: url({{asset('/cv-templates/alias/images/image_1.jpg')}});" id="section-home" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row intro-text align-items-center justify-content-center">
          <div class="col-md-10 text-center">
            <h1 class="site-heading site-animate">Howdy, I'm <strong>Jean Smith</strong></h1>
            <p class="lead site-subheading mb-4 site-animate">A Product Designer working at Facebook. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="#section-about" class="smoothscroll btn btn-primary px-4 py-3">More On Me</a></p>
          </div>
        </div>
      </div>
    </section> <!-- section -->


    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
            <img src="{{asset('/cv-templates/alias/images/image_1_long.jpg')}}" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-5 pl-lg-5">
            <div class="section-heading">
              <h2>About <strong>Me</strong></h2>
            </div>
            <p class="lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-5  ">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

            <p>
              <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
              <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
            </p>
          </div>
        </div>

        <div class="row pt-5">
          <div class="col-md-3 mb-3">
            <div class="section-heading">
              <h2>My <strong>Skills</strong></h2>
            </div>
          </div>
          <div class="col-md-9">
            <div class="skill">
              <h3>Design</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                  <span>85%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>HTML5</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                  <span>98%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>CSS3</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
                  <span>97%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>WordPress</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                  <span>88%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>Bootstrap</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                  <span>92%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h2>Client <strong>Testimonial</strong></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

              <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="{{asset('/cv-templates/alias/images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>
          <div class="col-md-6">

            <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="{{asset('/cv-templates/alias/images/person_2.jpg')}}" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>

          <div class="col-md-6">

              <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="{{asset('/cv-templates/alias/images/person_3.jpg')}}" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>
          <div class="col-md-6">

            <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="{{asset('/cv-templates/alias/images/person_4.jpg')}}" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>

        </div>
      </div>
    </section>


    <section class="site-section border-top pb-0"  id="section-services">
      <div class="container">

        <div class="row mb-4">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h2>My <strong>Services</strong></h2>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-phone3"></span>
              </span>
              <h3 class="mb-4">Mobile Optimize</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-wallet2"></span>
              </span>
              <h3 class="mb-4">Increase Revenue</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-lightbulb"></span>
              </span>
              <h3 class="mb-4">Intuitive Idea</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-phone3"></span>
              </span>
              <h3 class="mb-4">Mobile Optimize</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-wallet2"></span>
              </span>
              <h3 class="mb-4">Increase Revenue</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <span class="icon-lightbulb"></span>
              </span>
              <h3 class="mb-4">Intuitive Idea</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="site-section" id="section-features">
      <div class="container">
        <div class="row site-section">
          <div class="col-md-8">
            <p><img src="{{asset('/cv-templates/alias/images/laptop_1.jpg')}}" alt="" class="img-fluid"></p>
          </div>
          <div class="col-md-4">
            <h3 class="mb-3">Big Benefits for Small Business</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

            <ul class="site-list">
              <li class="site-check">Pointing has no control</li>
              <li class="site-check">A small river named Duden flows</li>
              <li class="site-check">Roasted parts of sentences fly into your mouth</li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 order-md-2">
            <p><img src="{{asset('/cv-templates/alias/images/laptop_1.jpg')}}" alt="" class="img-fluid"></p>
          </div>
          <div class="col-md-4 order-md-1">
            <h3 class="mb-3">All in One Place</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

            <ul class="site-list">
              <li class="site-check">Pointing has no control</li>
              <li class="site-check">A small river named Duden flows</li>
              <li class="site-check">Roasted parts of sentences fly into your mouth</li>
            </ul>
          </div>
        </div>


      </div>
    </section>


    <section class="site-section" id="section-portfolio">
      <div class="container">
        <div class="row">
          <div class="section-heading text-center col-md-12">
              <h2>Featured <strong>Portfolio</strong></h2>
            </div>
        </div>
        <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".packaging">Packaging</li>
                            <li data-filter=".mockup">Mockup</li>
                            <li data-filter=".typography">Typography</li>
                            <li data-filter=".photography">Photography</li>
                        </ul>
                    </div>

                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all mockup">
                              <div class="relative">
                                <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p1.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p1.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                </a>
                              </div>
                <div class="p-inner">
                    <h4>Square Box Mockup</h4>
                  <div class="cat">Mockup</div>
                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all mockup">
                              <div class="relative">
                                <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p2.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p2.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                </a>
                              </div>
                <div class="p-inner">
                    <h4>Product Box Package Mockup</h4>
                  <div class="cat">Mockup</div>
                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all packaging">
                              <div class="relative">
                                <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p3.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p3.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                  </a>

                              </div>
                                <div class="p-inner">
                                    <h4>Creative Package Design</h4>
                                    <div class="cat">Packaging</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all packaging">
                              <div class="relative">
                                <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p4.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p4.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                  </a>
                              </div>
                                <div class="p-inner">
                                    <h4>Packaging Brand</h4>
                                    <div class="cat">Packaging</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all typography">
                              <div class="relative">
                              <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p5.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p5.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                  </a>
                              </div>
                                <div class="p-inner">
                                    <h4>Isometric 3D Extrusion</h4>
                                    <div class="cat">Typography</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all photography">
                              <div class="relative">
                                <div class="thumb">
                                  <div class="overlay overlay-bg"></div>
                                   <img class="image img-fluid" src="{{asset('/cv-templates/alias/images/p6.jpg')}}" alt="">
                                </div>
                  <a href="{{asset('/cv-templates/alias/images/p6.jpg')}}" class="img-pop-up">
                    <div class="middle">
                      <div class="text align-self-center d-flex"><img src="{{asset('/cv-templates/alias/images/preview.png')}}" alt=""></div>
                    </div>
                  </a>
                              </div>
                                <div class="p-inner">
                                    <h4>White Space Photography</h4>
                                    <div class="cat">photography</div>
                                </div>
                            </div>
                        </div>
                    </div>
      </div>
    </section>
    <!-- .section -->

    <section class="site-section bg-light " id="section-resume">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>My <strong>Resume</strong></h2>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="mb-5">Education</h2>
            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

          </div>
          <div class="col-md-6">


            <h2 class="mb-5">Experience</h2>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Github</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Facebook</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Twitter</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Shopify</span>
            </div>


          </div>
        </div>
      </div>
    </section> <!-- .section -->

    <section class="site-section" id="section-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Blog on <strong>Medium</strong></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="{{asset('/cv-templates/alias/images/post_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="{{asset('/cv-templates/alias/images/post_2.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="{{asset('/cv-templates/alias/images/post_3.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Wanna <strong>Start Work</strong> With Me?</h2>
            </div>
          </div>

          <div class="col-md-7 mb-5 mb-md-0">
            <form action="" class="site-form">
              <h3 class="mb-5">Get In Touch</h3>
              <div class="form-group">
                <input type="text" class="form-control px-3 py-4" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Your Phone">
              </div>
              <div class="form-group mb-5">
                <textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-5 pl-md-5">
            <h3 class="mb-5">My Contact Details</h3>
            <ul class="site-contact-details">
              <li>
                <span class="text-uppercase">Email</span>
                site@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Phone</span>
                +30 976 1382 9921
              </li>
              <li>
                <span class="text-uppercase">Fax</span>
                +30 976 1382 9922
              </li>
              <li>
                <span class="text-uppercase">Address</span>
                San Francisco, CA <br>
                4th Floor8 Lower  <br>
                San Francisco street, M1 50F
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-12 text-center">
            <p>
              <a href="#" class="social-item"><span class="icon-facebook2"></span></a>
              <a href="#" class="social-item"><span class="icon-twitter"></span></a>
              <a href="#" class="social-item"><span class="icon-instagram2"></span></a>
              <a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
              <a href="#" class="social-item"><span class="icon-vimeo"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
            <p class="col-12 text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
      </div>
    </footer>




    <script src="{{asset('/cv-templates/alias/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('/cv-templates/alias/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('/cv-templates/alias/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{asset('/cv-templates/alias/js/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('/cv-templates/alias/js/vendor/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('/cv-templates/alias/js/vendor/jquery.waypoints.min.js')}}"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/cv-templates/alias/js/custom.js')}}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('/cv-templates/alias/js/google-map.js')}}"></script>

  </body>
</html>


@endif
