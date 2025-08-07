<section class="tolet-listings" data-aos="fade-up">
    <h2>To-Let Listings</h2>
    <div class="tolet-list">
        <?php
        $tolets = new WP_Query([
            'post_type' => 'tolet',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
        if ($tolets->have_posts()):
            $delay = 0.1;
            while ($tolets->have_posts()): $tolets->the_post();
                $flat_number = get_post_meta(get_the_ID(), '_flat_number', true);
                $building = get_post_meta(get_the_ID(), '_building', true);
                $description = get_the_excerpt();
                ?>
                <div class="tolet-card sn-bg-light wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                    <h5>
                        <?php 
                        // Show flat number or post title fallback
                        echo $flat_number ? esc_html($flat_number) : esc_html(get_the_title());
                        ?>
                    </h5>
                    <p>
                        <?php 
                        // Show building name if set
                        if ($building) {
                            echo '<strong>Building:</strong> ' . esc_html($building) . '<br>';
                        }
                        // Show description or excerpt
                        if ($description) {
                            echo esc_html($description);
                        } else {
                            echo 'No description available.';
                        }
                        ?>
                    </p>
                </div>
            <?php 
            $delay += 0.1;    
            endwhile; 
            wp_reset_postdata();
        else: ?>
            <p>No To-Let listings found.</p>
        <?php endif; ?>
    </div>
</section>
