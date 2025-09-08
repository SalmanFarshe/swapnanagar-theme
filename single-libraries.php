<?php
wp_head();
?>
<?php
    get_template_part( './tem-parts/header', null, null );
?>
<!--====== HERO PART START ======-->
<section class="page-banner pt-200 pb-100 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->

<section class="building-single-area pt-100 pb-140">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                // Get meta fields
                $location = get_post_meta(get_the_ID(), 'location', true);
                $height   = get_post_meta(get_the_ID(), 'height', true);
                $floors   = get_post_meta(get_the_ID(), 'floors', true);
                $price    = get_post_meta(get_the_ID(), 'price', true);
                $area     = get_post_meta(get_the_ID(), 'area', true);
                $bedrooms = get_post_meta(get_the_ID(), 'bedrooms', true);
                $bathrooms= get_post_meta(get_the_ID(), 'bathrooms', true);
        ?>
        
        <div class="row mb-5">
            <div class="col-lg-7">
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="building-single-img mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-5">
                <!-- Building Details -->
                <h2 class="mb-3"><?php the_title(); ?></h2>
                <p class="text-muted"><?php the_content(); ?></p>

                <div class="building-meta-list mb-3">
                    <p><i class="fas fa-map-marker-alt"></i> Location: <?php echo esc_html($location); ?></p>
                    <p><i class="fas fa-arrows-alt-v"></i> Height: <?php echo esc_html($height); ?> ft</p>
                    <p><i class="fas fa-building"></i> Floors: <?php echo esc_html($floors); ?></p>
                    <?php if ($area) : ?><p><i class="fas fa-vector-square"></i> Area: <?php echo esc_html($area); ?> sq ft</p><?php endif; ?>
                    <?php if ($bedrooms) : ?><p><i class="fas fa-bed"></i> Bedrooms: <?php echo esc_html($bedrooms); ?></p><?php endif; ?>
                    <?php if ($bathrooms) : ?><p><i class="fas fa-bath"></i> Bathrooms: <?php echo esc_html($bathrooms); ?></p><?php endif; ?>
                    <p><strong>Price:</strong> <?php echo $price ? '$' . number_format($price) : 'Price On Request'; ?></p>
                </div>

                <a href="<?php echo get_post_type_archive_link('building'); ?>" class="main-btn">Back to Listings</a>
            </div>
        </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
    get_template_part( './tem-parts/footer', null, null );
    wp_footer();
?>