<?php
$args = array(
    'post_type' => 'tolet',
    'posts_per_page' => 4,
);
$query = new WP_Query($args); ?>
<section id="tolet" class="tolet-section pt-70 mt-70">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">To-Let Listings</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        A dedicated section for Swapnanagar flat owners to advertise their flats for rent, making it easy for residents and newcomers to find available homes within the community.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); 
                $rent = get_post_meta(get_the_ID(), '_tolet_rent', true);
                $location = get_post_meta(get_the_ID(), '_tolet_location', true);
            ?>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="tolet-img">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p><strong>Rent:</strong> <?php echo esc_html($rent); ?></p>
                        <p><strong>Location:</strong> <?php echo esc_html($location); ?></p>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <div class="mt-auto text-center">
                                <a href="<?php the_permalink(); ?>" class="main-btn border">View Details</a>
                            </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <!-- View All Button -->
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="tolet" class="main-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>
