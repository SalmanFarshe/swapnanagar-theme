<footer id="footer" class="footer-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                    <a href="index.php" class="logo d-blok">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/swapnanagar-orrange.png" alt="">
                    </a>
                    <p>Lorem ipsum dolor sit amco nsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
                <div class="footer-widget">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="building">Building</a></li>
                        <li><a href="library">Library</a></li>
                        <li><a href="shop">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h5>Catagories</h5>
                    <ul>
                        <li><a href="commitee">Commitee</a></li>
                        <li><a href="rules">Rules</a></li>
                        <li><a href="gallary">Gallary</a></li>
                        <li><a href="to-let">To Let</a></li>
                        <li><a href="sticker">Sticker</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><p>Phone: +880 1712-733897</p></li>
                        <li><p>Email: kallol.kumaar@gmail.com</p></li>
                        <li><p>Address: Random Road<br> USA</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-credit">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center copy-right text-md-left">
                        <p>Designed and Developed by <a href="https://uideck.com" rel="nofollow">Kallol & Brothers</a></p>
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