<section class="buildings-flats" data-aos="fade-up">
    <h2 class="section-title">Our Buildings</h2>
    <div class="showcase-grid">
        <?php
        $buildings = new WP_Query([
            'post_type' => 'building',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ]);
        if ($buildings->have_posts()):
            $delay = 0.1;
            while ($buildings->have_posts()): $buildings->the_post();
                $flats = get_post_meta(get_the_ID(), '_building_flats', true);
                $to_let = get_post_meta(get_the_ID(), '_building_to_let', true);
                ?>
                <div class="building-card mb-5 wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                    <div class="building-image">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            // Default image if no featured image
                            echo '<img src="https://expertinteriorbd.com/wp-content/uploads/2023/10/Building-design-in-bangladesh.jpg" alt="' . esc_attr(get_the_title()) . '">';
                        }
                        ?>
                    </div>
                    <div class="building-info">
                        <h5><?php the_title(); ?></h5>
                        <p><?php echo intval($flats) ?: 'N/A'; ?> Flats | <?php echo intval($to_let) ?: 'N/A'; ?> To-Let</p>
                        <a href="<?php the_permalink(); ?>" class="sn-btn-2">View Details</a>
                    </div>
                </div>
            <?php 
            $delay += 0.1;    
            endwhile; wp_reset_postdata();
            else: ?>
            <p>No buildings found.</p>
        <?php endif; ?>
    </div>
    <a href="#" class="sn-btn-1 mt-5">View More</a>
</section>
