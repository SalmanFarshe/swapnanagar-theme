<section id="buildings" class="building-area pt-70">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-50">
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">
                        <?php echo get_theme_mod('buildings_section_title', 'Sweet Home'); ?>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        <?php echo get_theme_mod('buildings_section_subtitle', 'Find Your Neighbors – Explore detailed information about each building, flat owners, and rented residents, all organized in one secure and easy-to-navigate directory for the Swapnanagar community.'); ?>
                    </p>
                </div>
            </div>
        </div>

        <?php
        $buildings = new WP_Query(array(
            'post_type'      => 'buildings',
            'posts_per_page' => 9,
        ));

        if ($buildings->have_posts()) :
        ?>
        <div class="position-relative">
            <div id="buildingsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $counter = 0;
                    while ($buildings->have_posts()) : $buildings->the_post();
                        $price = get_post_meta(get_the_ID(), 'price', true);

                        if ($counter % 3 == 0) {
                            echo '<div class="carousel-item ' . ($counter == 0 ? 'active' : '') . '"><div class="row">';
                        }
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="single-building">
                                <!-- Building Image -->
                                <div class="building-img position-relative">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium_large', array('class' => 'img-fluid rounded-top'));
                                        } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-building.jpg" alt="<?php the_title(); ?>" class="img-fluid rounded-top">
                                        <?php } ?>
                                    </a>
                                    <div class="price-badge position-absolute bg-primary text-white px-3 py-1">
                                        <?php echo esc_html($price ? '$' . number_format($price) : 'Price On Request'); ?>
                                    </div>
                                </div>

                                <!-- Building Info -->
                                <div class="building-info p-3 border align-items-center rounded-bottom shadow-sm">
                                    <h4 class="mb-2 text-center">
                                        <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="building-meta d-flex justify-content-between text-muted mb-2">
                                        <div class="meta-item"><i class="lni lni-map-marker"></i><span>Owner: 70</span></div>
                                        <div class="meta-item"><i class="lni lni-money-location"></i><span>Rent: 30</span></div>
                                        <div class="meta-item"><i class="lni lni-map-marker"></i><span>Free: 4</span></div>
                                    </div>
                                    <div class="mt-auto text-center">
                                        <a href="<?php the_permalink(); ?>" class="main-btn border">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                        if ($counter % 3 == 0) {
                            echo '</div></div>';
                        }
                    endwhile;

                    if ($counter % 3 != 0) {
                        echo '</div></div>';
                    }

                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <!-- Carousel Controls (Bootstrap 5 Alpha style) -->
            <a class="carousel-control-prev custom-control" href="#buildingsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next custom-control" href="#buildingsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!-- View All Button -->
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="building" class="main-btn">View All</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <style>
        #buildingsCarousel .carousel-control-prev,
        #buildingsCarousel .carousel-control-next {
            width: 5%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.9;
        }

        #buildingsCarousel .carousel-control-prev {
            left: -60px;
        }

        #buildingsCarousel .carousel-control-next {
            right: -60px;
        }

        #buildingsCarousel .carousel-control-prev-icon,
        #buildingsCarousel .carousel-control-next-icon {
            background-size: 30px 30px;
            width: 3rem;
            height: 3rem;
        }
    </style>
</section>
