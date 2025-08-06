<section class="latest-posts" data-aos="fade-up">
    <h2>Latest Blog Posts</h2>
    <div class="posts-list">
        <?php 
        $latest_posts = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);
        if ($latest_posts->have_posts()):
            while ($latest_posts->have_posts()): $latest_posts->the_post(); ?>
                <div class="post-card">
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="readmore-btn">Read More</a>
                </div>
            <?php endwhile; 
            wp_reset_postdata();
        else: ?>
            <p>No recent posts found.</p>
        <?php endif; ?>
    </div>
</section>