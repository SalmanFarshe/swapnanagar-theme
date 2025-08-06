<header class="community-header" id="communityHeader">
    <div class="header-container">
        <a class="logo" href="#">
            <img src="wp-content/themes/community-theme/swapnagar.png" alt="Community Logo" style="height: 50px;">
        </a>
        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Buildings</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Tutors</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-actions">
                <a href="#" class="login-btn">Login</a>
                <a href="#" class="register-btn">Register</a>
            </div>
        </nav>
        <div class="menu-toggle" id="menuToggle" aria-label="Toggle menu" tabindex="0">
            <span></span><span></span><span></span>
        </div>
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function() {
        $('#menuToggle').on('click keypress', function(e) {
            if (e.type === 'click' || e.key === 'Enter' || e.key === ' ') {
                $('#mainNav').toggleClass('open');
                $('#menuToggle').toggleClass('open');
            }
        });
        // Sticky and animated header on scroll
        var lastScroll = 0;
        var $header = $('#communityHeader');
        $(window).on('scroll', function() {
            var scroll = $(this).scrollTop();
            if (scroll > 60) {
                if (!$header.hasClass('sticky')) {
                    $header.addClass('sticky fade-in');
                }
            } else {
                $header.removeClass('sticky fade-in');
            }
        });
    });
</script>
