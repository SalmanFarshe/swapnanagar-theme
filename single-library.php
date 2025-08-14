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
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="text-white"><?php the_title();; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Single</li>
                        </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->
<?php
// Start the loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Custom fields (optional) — change these to your actual field names
        $location = get_post_meta( get_the_ID(), 'location', true );
        $books_count = get_post_meta( get_the_ID(), 'books_count', true );
        $opening_hours = get_post_meta( get_the_ID(), 'opening_hours', true );
        $contact = get_post_meta( get_the_ID(), 'contact', true );
        ?>
        
        <div class="single-library-container" style="max-width:800px;margin:0 auto;padding:20px;">
            
            <!-- Title -->
            <h1><?php the_title(); ?></h1>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="library-featured-img" style="margin-bottom:20px;">
                    <?php the_post_thumbnail( 'large', ['style' => 'width:100%;height:auto;'] ); ?>
                </div>
            <?php endif; ?>

            <!-- Meta Information -->
            <div class="library-meta" style="margin-bottom:20px;">
                <?php if ( $location ) : ?>
                    <p><strong>Location:</strong> <?php echo esc_html( $location ); ?></p>
                <?php endif; ?>

                <?php if ( $books_count ) : ?>
                    <p><strong>Books Available:</strong> <?php echo esc_html( $books_count ); ?></p>
                <?php endif; ?>

                <?php if ( $opening_hours ) : ?>
                    <p><strong>Opening Hours:</strong> <?php echo esc_html( $opening_hours ); ?></p>
                <?php endif; ?>

                <?php if ( $contact ) : ?>
                    <p><strong>Contact:</strong> <?php echo esc_html( $contact ); ?></p>
                <?php endif; ?>
            </div>

            <!-- Content -->
            <div class="library-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php
    endwhile;
else :
    echo '<p>No library found.</p>';
endif;

    get_template_part( './tem-parts/footer', null, null );
    wp_footer();

