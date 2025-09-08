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
<header class="header_area">
		<div id="header_navbar" class="header_navbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-12">
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
							<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/swapnanagar-orrange.png" alt="Logo">
						</a>
						<!-- <nav class="navbar navbar-expand-lg">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="ml-auto navbar-nav">
								<?php
									# wp_nav_menu( array(
										# 'theme_location' => 'primary',
										# 'container'      => false,
										# 'menu_class'     => 'ml-auto navbar-nav',
										# 'add_li_class'   => 'nav-item text-black', // custom arg (needs filter below)
										# 'add_a_class'    => 'page-scroll black-clr', // default link class
										# 'link_before'    => '',
										# 'link_after'     => '',
										# 'items_wrap'     => '<ul id="nav" class="%2$s">%3$s</ul>',
									# ) );
									?>
									<li class="nav-item ml-5">
										<a class="header-btn btn-hover" href="login">Log in</a>
									</li>
								</ul>
							</div> 
						</nav> -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header navbar -->
	</header>