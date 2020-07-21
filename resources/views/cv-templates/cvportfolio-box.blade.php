@if (isset($content))
    {!! $content !!}
@else


<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>CV - Portfolio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="{{asset('/cv-templates/cvportfolio/common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('/cv-templates/cvportfolio/common-css/ionicons.css')}}" rel="stylesheet">

	<link href="{{asset('/cv-templates/cvportfolio/common-css/fluidbox.min.css')}}" rel="stylesheet">

	<link href="{{asset('/cv-templates/cvportfolio/03-cv-business/css/styles.css')}}" rel="stylesheet">

	<link href="{{asset('/cv-templates/cvportfolio/03-cv-business/css/responsive.css')}}" rel="stylesheet">

</head>
<body>

	<section class="intro-section">
		<div class="container">

			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>3008 Sarah Drive</h5>
								<h5>Franklin,LA 70538</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>337-4139538</h5>
								<h6>MIN - FRI,8AM - 7PM</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>contact@colorlib.com</h5>
								<h6>REPLY IN 24 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->


			<div class="intro">
				<div class="row">

					<div class="col-sm-8 col-md-4 col-lg-3">
						<div class="profile-img margin-b-30"><img src="{{asset('/cv-templates/cvportfolio-box/images/profile-1-250x250.jpg')}}" alt=""></div>
					</div><!-- col-sm-8 -->

					<div class="col-sm-10 col-md-5 col-lg-6">
							<h2><b>Michel SMith</b></h2>
							<h4 class="font-yellow">Key Account Manager</h4>
							<ul class="information margin-tb-30">
								<li><b class="font-yellow">BORN</b> : August 25, 1987</li>
								<li><b class="font-yellow">EMAIL</b> : mymith@mywebpage.com</li>
								<li><b class="font-yellow">MARITAL STATUS</b> : Married</li>
							</ul>
							<ul class="social-icons">
								<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram"></i></a></li>
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							</ul>
					</div><!-- col-sm-8 -->

					<div class="col-sm-10 col-md-3 col-lg-3">
						<a class="downlad-btn" href="#">Download CV</a>
					</div><!-- col-lg-2 -->

				</div><!-- row -->

			</div><!-- intro -->
		</div><!-- container -->
	</section><!-- intro-section -->


	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center-text">
					<div class="heading ">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-3 -->
				<div class="col-sm-12 col-md-6">
					<p class="margin-b-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque
					sit amet sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nulla maximus pellentes que velit, quis consequat nulla effi citur at.
					Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus.
					Sed finibus aliquam neque sit amet sodales. .</p>
				</div><!-- col-sm-6 -->
				<div class="col-sm-12 col-md-6">
					<p class="margin-b-50">Duis non volutpat arcu, eu mollis tellus.
					Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet,
					consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla
					effi citur at.Maecenas sed massa tristique.</p>
				</div><!-- col-sm-6 -->

				<div class="col-sm-12" id="counter">
					<div class="row" >

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="counter margin-b-50">
								<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="3">0</span></b></h1>
								<h5 class="desc"><b>Coder Degrees</b></h5>
							</div><!-- counter -->
						</div><!-- col-md-3-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="counter margin-b-50">
								<h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="25">0</span></b></h1>
								<h5 class="desc"><b>Project Completed</b></h5>
							</div><!-- counter -->
						</div><!-- col-md-3-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="counter margin-b-50">
								<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="311">0</span></b></h1>
								<h5 class="desc"><b>Satisfied Clients</b></h5>
							</div><!-- counter -->
						</div><!-- col-md-3-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="counter margin-b-50">
								<h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="732">0</span></b></h1>
								<h5 class="desc"><b>Finished Projects</b></h5>
							</div><!-- counter -->
						</div><!-- col-md-3-->

					</div><!-- row-->
				</div><!-- col-sm-12 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->

	<section class="experience-section section center-text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-3 -->

				<div class="col-sm-12">
					<div class="experience margin-b-50">
						<h4><b>JUNIOR PROJECT MANAGER</b></h4>
						<h5 class="font-yellow"><b>DESIGN STUDIO</b></h5>
						<h6 class="font-lite-black margin-t-10">MARCH 2015 - PRESENT</h6>
						<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						<ul class="list margin-b-30">
							<li><span>Duis non volutpat arcu, eu mollis tellus.</span></li>
							<li><span>Quis consequat nulla effi citur at.</span></li>
							<li><span>Sed finibus aliquam neque sit.</span></li>
						</ul>
					</div><!-- experience -->

					<div class="experience margin-b-50">
						<h4><b>WEB MASTER/WEB DEVELOPER</b></h4>
						<h5 class="font-yellow"><b>DESIGN & WEB STUDIO</b></h5>
						<h6 class="font-lite-black margin-t-10">APRIL 2014 - FEBRUARY 2015</h6>
						<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						<ul class="list">
							<li><span>Duis non volutpat arcu, eu mollis tellus.</span></li>
							<li><span>Quis consequat nulla effi citur at.</span></li>
							<li><span>Sed finibus aliquam neque sit.</span></li>
						</ul>
					</div><!-- experience -->

				</div><!-- col-sm-9 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- experience-section -->

	<section class="portfolio-section section center-text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MY WORK</b></h6>
					</div>
				</div><!-- col-sm-12 -->

				<div class="col-sm-12">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
						<a href="#" data-filter=".branding"><b>BRANDING</b></a>
						<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->

			<div class="portfolioContainer margin-b-50">

				<div class="p-item web-design">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-13-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-13-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item branding graphic-design">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-14-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-14-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item web-design">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-15-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-15-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item graphic-design">
					<a class="img" href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-16-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-16-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item branding graphic-design">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-17-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-17-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item graphic-design web-design">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-18-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-18-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item  graphic-design branding">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-19-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-19-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

				<div class="p-item web-design branding">
					<a href="{{asset('/cv-templates/cvportfolio-box/images/portfolio-20-400x400.jpg')}}" data-fluidbox>
						<img src="{{asset('/cv-templates/cvportfolio-box/images/portfolio-20-400x400.jpg')}}" alt=""></a>
				</div><!-- p-item -->

			</div><!-- portfolioContainer -->
		</div><!-- container -->
	</section><!-- portfolio-section -->


	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center-text">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-3 -->

				<div class="col-sm-12">

					<div class="education-wrapper margin-b-50">
						<div class="education right">
							<h4><b>MASTER DEGREE IN SCIENCE</b></h4>
							<h5 class="font-yellow"><b>UCLA - SCIENCE AND ENGINEERING</b></h5>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2010(2 YEARS)</h6>
							<p class="margin-t-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						</div><!-- education -->

						<div class="education left">
							<h4><b>COURSE ON COMPUTER SCIENCE</b></h4>
							<h5 class="font-yellow"><b>NEW YORK PUBLIC UNIVERSITY</b></h5>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2009(6 MONTHS)</h6>
							<p class="margin-t-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						</div><!-- education -->

						<div class="education right">
							<h4><b>GRADUATED VALEDICTERIAN</b></h4>
							<h5 class="font-yellow"><b>PUBLIC COLLEGE</b></h5>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2008(4 YEARS)</h6>
							<p class="margin-t-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-9 -->
			</div><!-- row -->
		</div><!-- container -->

	</section><!-- education-section -->


	<section class="quoto-section center-text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<i class="icon ion-quote"></i>
					<h3 class="font-yellow"><b>There is no secret to seccess</b></h3>
					<h3><b>It is the result of preparation, <span class="font-yellow">Hard work</span>,
					and learnign from the failure.</b></h3>
				</div><!-- col-sm-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- quoto-section -->

	<section class="skills-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center-text">
					<div class="heading">
						<h3><b>Technical Skills</b></h3>
						<h6 class="font-lite-black"><b>I'M GOOD AT</b></h6>
					</div>
				</div><!-- col-sm-12 -->

				<div class="col-sm-12 col-md-6">
					<h4><b>HTML & CSS</b></h4>
					<h6 class="expert">EXPERT</h6>

					<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
						quis consequat nulla effi citur at.</p>

					<div class="line-progress margin-b-20" data-prog-percent=".90"><div></div>
						<p class="progress-title"><b>HTML</b></p></div>

					<div class="line-progress margin-b-50" data-prog-percent=".85"><div></div>
						<p class="progress-title"><b>CSS</b></p></div>

				</div><!-- col-md-6 -->

				<div class="col-sm-12 col-md-6">
					<h4><b>GRAPHIC DESIGN</b></h4>
					<h6 class="expert">EXPERT</h6>

					<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
						quis consequat nulla effi citur at.</p>

					<div class="line-progress margin-b-20" data-prog-percent=".97"><div></div>
						<p class="progress-title"><b>PHOTOSHOP</b></p></div>

					<div class="line-progress margin-b-50" data-prog-percent=".97"><div></div>
						<p class="progress-title"><b>ILLUSTRATOR</b></p></div>

				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- skills-section -->

	<section class="radial-progress-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="radial-prog-area margin-b-30">
						<div class="radial-progress" data-prog-percent=".97">
							<div></div>
							<h6 class="progress-title">HTML5 & CSS3</h6>
						</div>
					</div><!-- radial-prog-area-->
				</div><!-- col-sm-6-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="radial-prog-area margin-b-30">
						<div class="radial-progress" data-prog-percent=".78">
							<div></div>
							<h6 class="progress-title">WEB DESIGN</h6>
						</div>
					</div><!-- radial-prog-area-->
				</div><!-- col-sm-6-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="radial-prog-area margin-b-30">
						<div class="radial-progress" data-prog-percent=".67">
							<div></div>
							<h6 class="progress-title">JAVA</h6>
						</div>
					</div><!-- radial-prog-area-->
				</div><!-- col-sm-6-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="radial-prog-area margin-b-50">
						<div class="radial-progress" data-prog-percent=".97">
							<div></div>
							<h6 class="progress-title">PHP</h6>
						</div>
					</div><!-- radial-prog-area-->
				</div><!-- col-sm-6-->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- radial-progress-section -->

	<footer>
		<p class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>


	<!-- SCIPTS -->

	<script src="{{asset('/cv-templates/cvportfolio/common-js/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/tether.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/bootstrap.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/isotope.pkgd.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/jquery.waypoints.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/progressbar.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/jquery.fluidbox.min.js')}}"></script>

	<script src="{{asset('/cv-templates/cvportfolio/common-js/scripts.js')}}"></script>

</body>
</html>


@endif
