<section id="mentors" class="team-area pt-70 mt-70">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Community Tutors</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        A dedicated space for Swapnanagar residents to post and find trusted tutors for their children, making it easy to connect with experienced educators within the community.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'tutor',
                'posts_per_page' => 4
            );
            $tutors = new WP_Query($args);
            if ($tutors->have_posts()):
                while ($tutors->have_posts()): $tutors->the_post();
                    $facebook  = get_post_meta(get_the_ID(), '_facebook', true);
                    $twitter   = get_post_meta(get_the_ID(), '_twitter', true);
                    $instagram = get_post_meta(get_the_ID(), '_instagram', true);
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-team">
                            <div class="team-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php endif; ?>
                                </a>
                                <div class="social-link">
                                    <ul>
                                        <?php if ($facebook): ?><li><a href="<?php echo esc_url($facebook); ?>"><i class="lni lni-facebook-filled"></i></a></li><?php endif; ?>
                                        <?php if ($twitter): ?><li><a href="<?php echo esc_url($twitter); ?>"><i class="lni lni-twitter-filled"></i></a></li><?php endif; ?>
                                        <?php if ($instagram): ?><li><a href="<?php echo esc_url($instagram); ?>"><i class="lni lni-instagram-filled"></i></a></li><?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        
        <!-- View All Button -->
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="tutor" class="main-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
