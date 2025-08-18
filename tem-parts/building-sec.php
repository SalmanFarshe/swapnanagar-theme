<section id="buildings" class="building-area pt-70">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-50">
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s"><?php echo get_theme_mod('buildings_section_title', 'A Dream Homes'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s"><?php echo get_theme_mod('buildings_section_subtitle', 'Explore our latest properties with modern designs, prime locations, and all essential amenities.'); ?></p>
                </div>
            </div>
        </div>

        <div class="row mb-30">
            <?php
            $buildings = new WP_Query( array(
                'post_type'      => 'buildings',
                'posts_per_page' => 3,
            ));

            if ( $buildings->have_posts() ) :
                $delay = 0.2;
                while ( $buildings->have_posts() ) : $buildings->the_post();
                    $location = get_post_meta( get_the_ID(), 'location', true );
                    $height   = get_post_meta( get_the_ID(), 'height', true );
                    $floors   = get_post_meta( get_the_ID(), 'floors', true );
                    $price    = get_post_meta( get_the_ID(), 'price', true );
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-building wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay) . 's'; ?>">
                        <!-- Building Image -->
                        <div class="building-img position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium_large', array('class' => 'img-fluid rounded-top') );
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
                            <h4 class="mb-2 text-center"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                            <div class="building-meta d-flex justify-content-between text-muted mb-2">
                                <div class="meta-item">
                                    <i class="lni lni-map-marker"></i>    
                                    <span>Owner: 70</span>
                                </div>
                                <div class="meta-item">
                                    <i class="lni lni-money-location"></i>
                                    <span>Rent: 30</span>
                                </div>
                                <div class="meta-item">
                                    <i class="lni lni-map-marker"></i>
                                    <span>Free: 4</span>
                                </div>
                            </div>
                            <div class="mt-auto text-center">
                                <a href="<?php the_permalink(); ?>" class="main-btn border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $delay += 0.1;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="building" class="main-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
