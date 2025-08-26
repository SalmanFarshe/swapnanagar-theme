<?php
/**
 * Template Name: Tutors Page
 */
wp_head();
?>
<?php
    get_template_part( './tem-parts/header', null, null );
?>

<!--====== HERO PART START ======-->
<section class="page-banner pt-100 pb-70 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <!-- <h1 class="text-white">All Tutors</h1> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tutors</li>
                        </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->

<section id="mentors" class="team-area pt-70 mt-70">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Tutors</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        Meet our expert tutors ready to help you achieve your dreams.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'tutor',
                'posts_per_page' => -1
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
        <!-- <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="<?php #echo get_post_type_archive_link('tutors'); ?>" class="main-btn">
                    View All Tutors
                </a>
            </div>
        </div> -->
    </div>
</section>


<?php
    get_template_part( './tem-parts/footer', null, null );
    wp_footer();
?>