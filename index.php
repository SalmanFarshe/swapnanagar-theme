<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Learn - Education & Online Course Website Template</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

	<!--====== Tiny slider CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tiny-slider.css">

	<!--====== glightbox CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/glightbox.min.css">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/LineIcons.2.0.css">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-5.0.5-alpha.min.css">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

</head>

<body>
	<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<!--====== PRELOADER PART START ======-->

	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== PRELOADER PART ENDS ======-->

	<!--====== HEADER PART START ======-->

	<header class="header_area">
		<div id="header_navbar" class="header_navbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.php">
								<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="ml-auto navbar-nav">
									<li class="nav-item">
										<a class="page-scroll" href="#home">Home</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#courses">Courses</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#mentors">Mentors</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#blog">Blog</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#contact">Contact</a>
									</li>
									<li class="nav-item">
										<a class="header-btn btn-hover" href="#courses">Get Started</a>
									</li>
								</ul>
							</div> <!-- navbar collapse -->
						</nav> <!-- navbar -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header navbar -->
	</header>

	<!--====== HEADER PART ENDS ======-->

	<!--====== HERO PART START ======-->
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 offset-xl-7 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="hero-content">
						<h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Education and Online Course Site Template</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam diam voluptua.</p>
						<div class="hero-btns">
							<a href="#courses" class="main-btn wow fadeInUp" data-wow-delay=".6s">Courses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-left">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot-shape.svg" alt="" class="shape">
		</div>
	</section>
	<!--====== HERO PART END ======-->

	<!--====== SKILL PART START ======-->
	<section id="skill" class="skill-area pt-170">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
					<div class="text-center section-title">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Learn New Skills</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabo</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".2s">
						<div class="skill-icon">
							<i class="lni lni-pencil-alt"></i>
						</div>
						<div class="skill-content">
							<h4>Learn Anything</h4>
							<p>Lorem ipsum dolor sit amet, consetetu sadi
							ps cinelitr, sed diam nonumy eirtem Lorem ipsum dolor sit amet, consetetur.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".4s">
						<div class="skill-icon">
							<i class="lni lni-grid-alt"></i>
						</div>
						<div class="skill-content">
							<h4>Large Collection</h4>
							<p>Lorem ipsum dolor sit amet, consetetu sadi
							ps cinelitr, sed diam nonumy eirtem Lorem ipsum dolor sit amet, consetetur.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".6s">
						<div class="skill-icon">
							<i class="lni lni-certificate"></i>
						</div>
						<div class="skill-content">
							<h4>Certified Instructors</h4>
							<p>Lorem ipsum dolor sit amet, consetetu sadi
							ps cinelitr, sed diam nonumy eirtem Lorem ipsum dolor sit amet, consetetur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== SKILL PART ENDS ======-->

	<!--====== COURSES PART START ======-->
	<section id="courses" class="course-area pt-140 pb-170">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
					<div class="text-center section-title mb-50">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Popular Courses</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">eStore UI Kit comes with all essential features, sections and elements you need
							to design and develop web UI efficiently.</p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/full-stack.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">Full-stack Web Development</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>3.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>12k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
								<div class="price">
									<span>$99.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".4s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/design.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">UX/UI Design</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>3k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>11k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
								<div class="price">
									<span>$39.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".6s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/js.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">Modern JavaScript</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>2.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>18k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>4.0</span>
								</div>
								<div class="price">
									<span>$19.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/business.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">Business Development</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>15k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>4.5</span>
								</div>
								<div class="price">
									<span>$19.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".4s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/marketing.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">Email Marketing 101</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.9k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
								<div class="price">
									<span>$69.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".6s">
						<div class="course-img">
							<a href="course-single.php">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/python.jpg" alt="">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.php">Getting Started with Python</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.2k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>13k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>3.5</span>
								</div>
								<div class="price">
									<span>$9.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-12">
					<div class="text-center view-all-btn">
						<a href="courses.php" class="main-btn">View All Course</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== COURSES PART ENDS ======-->


	<!--====== WELCOME PART START ======-->
	<section class="welcome-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="welcome-content">
						<div class="section-title">
							<h2 class="mb-35 wow fadeInUp" data-wow-delay=".2s">Welcome To
							Online Learning</h2>
						</div>
						<div class="content">
							<p class="mb-35 wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabo remagn ane aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>

							<a href="javascript:void(0)" class="read-more-btn wow fadeInUp" data-wow-delay=".5s">Read More <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="welcome-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/welcome-img.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== WELCOME PART ENDS ======-->

	<!--====== CATEGORIES PART START ======-->
	<section class="categories-area pt-170 pb-170">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-xl-8 col-lg-10">
					<div class="text-center section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Top Catagories</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos accusam.</p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-pallet"></i>
							<h3>Design</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-code-alt"></i>
							<h3>Development</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-target-customer"></i>
							<h3>Marketing</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-seo"></i>
							<h3>SEO</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-camera"></i>
							<h3>Photography</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-bar-chart"></i>
							<h3>Business</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-keyword-research"></i>
							<h3>Analysis</h3>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-android"></i>
							<h3>IT & Software</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="text-center view-all-btn">
						<a href="javascript:void(0)" class="main-btn">View All Course</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CATEGORIES PART ENDS ======-->

	<!--====== VIDEO PART START ======-->
	<section id="why" class="video-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 offset-xl-6 offset-lg-6">
					<div class="video-content-wrapper">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay=".2s">What Makes Us Different?</h2>
							<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos accusam.</p>
						</div>
						<div class="specialty-wrapper">
							<div class="specialty-item">
								<div class="specialty-icon-wrapper">
									<div class="specialty-icon">
										<i class="lni lni-grid-alt"></i>
									</div>
								</div>
								<div class="specialty-content">
									<h4>200+ Online Course</h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
								</div>
							</div>
							<div class="specialty-item">
								<div class="specialty-icon-wrapper">
									<div class="specialty-icon">
										<i class="lni lni-users"></i>
									</div>
								</div>
								<div class="specialty-content">
									<h4>Expert Instructors</h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
								</div>
							</div>
							<div class="specialty-item">
								<div class="specialty-icon-wrapper">
									<div class="specialty-icon">
										<i class="lni lni-support"></i>
									</div>
								</div>
								<div class="specialty-content">
									<h4>Lifetime Access & Support</h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="video-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-bg.jpg" alt="">
			<div class="video-btn">
				<a href="#" class="play-btn glightbox"><i class="lni lni-play"></i></a>
			</div>
		</div>
	</section>
	<!--====== VIDEO PART ENDS ======-->

	<!--====== TEAM PART START ======-->
	<section id="mentors" class="team-area pt-170 pb-140">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
					<div class="text-center section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Our Expert Instructors</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.png" alt="">
							<div class="social-link">
								<ul>
									<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h4>Jesika Parnendaj</h4>
							<p>Expert Designer</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.png" alt="">
							<div class="social-link">
								<ul>
									<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h4>Nelson Mendela</h4>
							<p>Web Developer</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.png" alt="">
							<div class="social-link">
								<ul>
									<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h4>Jhon Abraham</h4>
							<p>Business Marketing Expert</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-4.png" alt="">
							<div class="social-link">
								<ul>
									<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h4>Senidso Smid</h4>
							<p>SEO Expert</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== TEAM PART ENDS ======-->

	<!--====== TESTIMONIAL PART START ======-->
	<section class="testimonial-area pt-80 pb-90" style="background: #FBFBFB">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
					<div class="text-center section-title mb-50">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">What Our Ex-Students Says</h2>
					</div>
				</div>
			</div>
	
			<div class="row">
				<div class="mx-auto col-xl-6 col-lg-8">
					<div id="customize_wrapper" class="testimonial-wrapper">
						<div class="customize-tools">
							<ul class="thumbnails d-flex justify-content-center" id="customize-thumbnails">
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-1.png" alt="">
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-2.png" alt="">
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-3.png" alt="">
								</li>
							</ul>
						</div>
						<div class="customize" id="customize">
							<div class="testimonial-content-wrapper">
								<div class="testimonial-info">
									<h4>Michel Sdmith</h4>
									<p>120 Bach Student</p>
								</div>
								<div class="testimonial-content">
									<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
								</div>
							</div>
							<div class="testimonial-content-wrapper">
								<div class="testimonial-info">
									<h4>Tulsi Kumer</h4>
									<p>Web Designer</p>
								</div>
								<div class="testimonial-content">
									<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
								</div>
							</div>
							<div class="testimonial-content-wrapper">
								<div class="testimonial-info">
									<h4>John Doe</h4>
									<p>UX Ui Designer</p>
								</div>
								<div class="testimonial-content">
									<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section>
	<!--====== TESTIMONIAL PART ENDS ======-->

	<!--====== BLOG PART START ======-->
	<section id="blog" class="blog-area pt-170 pb-140">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">From The Blog</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabo</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="blog-img">
							<a href="javascript:void(0)" class="d-block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-1.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<h4><a href="javascript:void(0)">Modern website design
							tools</a></h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="blog-img">
							<a href="javascript:void(0)" class="d-block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-2.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<h4><a href="javascript:void(0)">How To install SSL</a></h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="blog-img">
							<a href="javascript:void(0)" class="d-block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-3.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<h4><a href="javascript:void(0)">Getting started with Figma</a></h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== BLOG PART ENDS ======-->

	<!--====== CONTACT PART START ======-->
	<section id="contact" class="contact-area">
		<div class="map-bg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-bg.svg" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Get In Touch</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing </br>elitr, sed diam nonumy eirmod tempor invidunt utlabo</p>
					</div>
					<div class="contact-content">
						<h3>Hot Line Call Us 24/7</h3>
						<h4><a href="javascript:void(0)">000-2222-5555</a></h4>
						<h4><a href="javascript:void(0)">hello@gmail.com</a></h4>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="contact-form-wrapper">
						<form action="<?php echo get_template_directory_uri(); ?>/assets/contact.php" method="POST">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name" name="name" id="name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email" name="email" id="email">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="text" placeholder="Subject" name="subject" id="subject">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="text-right col-12">
									<button class="main-btn btn-hover" type="submit">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CONTACT PART ENDS ======-->

	<!--====== FOOTER PART START ======-->
	<footer id="footer" class="footer-area pt-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget">
						<a href="index.php" class="logo d-blok">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
						</a>
						<p>Lorem ipsum dolor sit amco nsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
					<div class="footer-widget">
						<h5>Quick Links</h5>
						<ul>
							<li><a href="javascript:void(0)">Home</a></li>
							<li><a href="javascript:void(0)">Courses</a></li>
							<li><a href="javascript:void(0)">Eventd</a></li>
							<li><a href="javascript:void(0)">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6">
					<div class="footer-widget">
						<h5>Our Course</h5>
						<ul>
							<li><a href="javascript:void(0)">Design</a></li>
							<li><a href="javascript:void(0)">Development</a></li>
							<li><a href="javascript:void(0)">Marketing</a></li>
							<li><a href="javascript:void(0)">SEO Design</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Contact Us</h5>
						<ul>
							<li><p>Phone: +884-9273-3867</p></li>
							<li><p>Email: hello@gmail.com</p></li>
							<li><p>Address: Random Road<br> USA</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-credit">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center copy-right text-md-left">
							<p>Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-social">
							<ul class="d-flex justify-content-md-end justify-content-center">
								<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


	<!--====== Bootstrap js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>

	<!--====== Tiny slider js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tiny-slider.js"></script>

	<!--====== wow js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

	<!--====== glightbox js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glightbox.min.js"></script>

	<!--====== contact-form js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form.js"></script>

	<!--====== Main js ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

	<script>
		//========= glightbox
		const myGallery = GLightbox({
			'href': '<?php echo get_template_directory_uri(); ?>/assets/video/Free App Landing Page Template - AppLand.mp4',
			'type': 'video',
			'source': 'youtube', //vimeo, youtube or local
			'width': 900,
			'autoplayVideos': true,
		});

		//======== tiny slider for testimonial
		tns({
			slideBy: 'page',
			autoplay: false,
			mouseDrag: true,
			gutter: 0,
			nav: true,
			controls: true,
			controlsPosition: 'bottom',
			controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
			"container": "#customize",
			"items": 1,
			"center": true,
			"navContainer": "#customize-thumbnails",
			"navAsThumbnails": true,
			"autoplayTimeout": 5000,
			"swipeAngle": false,
			"speed": 400
		});


    // Get the navbar


    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');
    
    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        var sections = document.querySelectorAll('.page-scroll');
        var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        for (var i = 0; i < sections.length; i++) {
            var currLink = sections[i];
            var val = currLink.getAttribute('href');
            var refElement = document.querySelector(val);
            var scrollTopMinus = scrollPos + 73;
            if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
                document.querySelector('.page-scroll').classList.remove('active');
                currLink.classList.add('active');
            } else {
                currLink.classList.remove('active');
            }
        }
    };

    window.document.addEventListener('scroll', onScroll);


    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");    
    var navbarCollapse = document.querySelector(".navbar-collapse");

    document.querySelectorAll(".page-scroll").forEach(e =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove('show')
        })
    );
    navbarToggler.addEventListener('click', function() {
        navbarToggler.classList.toggle("active");
    });

	</script>


</body>

</html>