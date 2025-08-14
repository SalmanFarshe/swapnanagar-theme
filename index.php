<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title></title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		wp_head();
	?>
</head>

<body>
	<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<!--====== PRELOADER PART START ======-->
	<?php
		get_template_part( 'tem-parts/placeholder' );
	?>

	<!--====== HEADER PART START ======-->
	<?php
		get_template_part( 'tem-parts/header' );
	?>
	
	<!--====== HERO PART START ======-->
	<?php
		get_template_part( 'tem-parts/home/hero-sec' );
	?>
	
	<!--====== SKILL PART START ======-->
	<?php
		get_template_part( 'tem-parts/skill-sec' );
	?>
	
	<!--====== COURSES PART START ======-->
	<?php
		get_template_part( 'tem-parts/building-sec' );
	?>
	
	<!--====== CATEGORIES PART START ======-->
	<?php
		get_template_part( 'tem-parts/home/cat-sec' );
	?>
	
	<!--====== WELCOME PART START ======-->
	<?php
	#	get_template_part( 'tem-parts/home/wel-sec' );
	?>
	
	
	<!--====== VIDEO PART START ======-->
	<?php
		get_template_part( 'tem-parts/home/vdo-sec' );
	?>

	<!--====== WELCOME PART START ======-->
	<?php
		get_template_part( 'tem-parts/library-sec' );
	?>
	
	<!--====== TEAM PART START ======-->
	<?php
		get_template_part( 'tem-parts/team-sec' );
	?>

	<!--====== TESTIMONIAL PART START ======-->
	<?php
		get_template_part( 'tem-parts/testimonial-sec' );
	?>
	
	<!--====== BLOG PART START ======-->
	<?php
		get_template_part( 'tem-parts/blog-sec' );
	?>
	
	<!--====== CONTACT PART START ======-->
	<?php
		get_template_part( 'tem-parts/contact-sec' );
	?>
	
	<!--====== FOOTER PART START ======-->
	<?php
		get_template_part( 'tem-parts/footer' );
	?>
	
	<!--====== BACK TOP TOP PART START ======-->
	<?php
		get_template_part( 'tem-parts/back-to-top' );
	?>
	<?php
		wp_footer();
	?>

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

    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");    
    var navbarCollapse = document.querySelector(".navbar-collapse");

    navbarToggler.addEventListener('click', function() {
        navbarToggler.classList.toggle("active");
    });

	</script>
</body>

</html>