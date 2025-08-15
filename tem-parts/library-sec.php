<section id="library" class="library-area pt-140 pb-170">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-50">
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">
                        <?php echo get_theme_mod('libraries_section_title', 'Library'); ?>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        <?php echo get_theme_mod('libraries_section_subtitle', 'Explore our latest books with modern concepts, prime publications, and all essential coverage.'); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $library = new WP_Query(array(
                'post_type'      => 'libraries',
                'posts_per_page' => 8,
            ));

            if ($library->have_posts()) :
                $delay = 0.2;
                while ($library->have_posts()) : $library->the_post();
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    $author = get_post_meta(get_the_ID(), 'author', true); // Optional custom field
                    $pages = get_post_meta(get_the_ID(), 'pages', true);   // Optional custom field
            ?>
                <div class="col-xl-3 col-lg-3 col-md-4 mb-100">
                    <div class="single-book wow fadeInUp border rounded shadow-sm h-100 d-flex flex-column" data-wow-delay="<?php echo esc_attr($delay) . 's'; ?>">

                        <!-- Book Image -->
                        <div class="book-img position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium_large', array('class' => 'm-auto w-100 rounded-top'));
                                } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-book.jpg" alt="<?php the_title(); ?>" class="img-fluid rounded-top">
                                <?php } ?>
                            </a>
                            <!-- Free/Paid Badge -->
                            <div class="book-badge position-absolute bg-<?php echo $price ? 'success' : 'primary'; ?> text-white px-3 py-1" style="top: 10px; left: 10px; border-radius: 4px;">
                                <?php echo $price ? '$' . number_format($price) : 'Free'; ?>
                            </div>
                        </div>

                        <!-- Book Info -->
                        <div class="book-info p-3 flex-grow-1 d-flex flex-column">
                            <h4 class="mb-2 text-center">
                                <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
                            </h4>

                            <?php if ($author || $pages) : ?>
                                <div class="book-meta text-muted small mb-3 text-center">
                                    <?php if ($author) : ?><span><i class="lni lni-user"></i> <?php echo esc_html($author); ?></span><?php endif; ?>
                                    <?php if ($pages) : ?> | <span><i class="lni lni-book"></i> <?php echo esc_html($pages); ?> pages</span><?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <div class="mt-auto text-center">
                                <a href="<?php the_permalink(); ?>" class="main-btn border">View Details</a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php
                    $delay += 0.2;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="library" class="main-btn">View All Books</a>
                </div>
            </div>
        </div>
    </div>
</section>
