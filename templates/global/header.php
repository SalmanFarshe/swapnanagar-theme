<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/root.css">
<header class="community-header" id="communityHeader">
        <div class="header-container">
            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/swapnagar.png" alt="Community Logo" style="height: 50px;">
            </a>

            <!-- Navigation -->
            <nav class="main-nav" id="mainNav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="active">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/buildings')); ?>">Buildings</a></li>
                    <li><a href="<?php echo esc_url(home_url('/marketplace')); ?>">Marketplace</a></li>
                    <li><a href="<?php echo esc_url(home_url('/tutors')); ?>">Tutors</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                </ul>
                <div class="header-actions">
                    <a href="<?php echo esc_url(home_url('/login')); ?>" class="login-btn">Login</a>
                    <a href="<?php echo esc_url(home_url('/register')); ?>" class="register-btn">Register</a>
                </div>
            </nav>

            <!-- Menu Toggle (Hamburger) -->
            <div class="menu-toggle" id="menuToggle" aria-label="Toggle menu" tabindex="0">
                <span></span><span></span><span></span>
            </div>
        </div>
    </header>