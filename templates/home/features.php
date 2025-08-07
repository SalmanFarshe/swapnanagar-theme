<section class="features-overview">
    <h2>What You Can Do</h2>
    <div class="features-list">

        <?php 
        $features = new WP_Query([
            'post_type'      => 'community_feature',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ]);
        if ($features->have_posts()):
            $delay = 0.1;
            while ($features->have_posts()): $features->the_post(); ?>
                <div class="feature-card bg-light wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                    <h5>
                        <?php 
                        // You can store icon as post meta if you want, for now a default icon
                        echo '<i class="fas fa-check-circle"></i> '; 
                        the_title(); 
                        ?>
                    </h5>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php
            $delay += 0.1;
            endwhile;
            wp_reset_postdata();
        else: ?>
            <p>No features added yet.</p>
        <?php endif; ?>
        
    </div>

    <div class="text-center mt-4">
        <a href="#" class="register-btn">See More</a>
    </div>
</section>
