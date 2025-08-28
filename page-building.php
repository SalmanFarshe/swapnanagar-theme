<?php
/**
 * Template Name: Building Page
 */
wp_head();
?>
<?php
    get_template_part( './tem-parts/header', null, null );
?>

<!--====== HERO PART START ======-->
<section class="page-banner pt-100 pb-100 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <!-- <h1 class="text-white">All Buildings</h1> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
                            <!-- <li class="breadcrumb-item active" aria-current="page">buildings</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->

<!--====== Search & Filter Row START ======-->
<section class="search-filter-section py-3">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      
      <!-- Left: Page Title -->
            <div class="col-lg-4 col-md-4 col-12">
                <h2 class="fw-bold mb-0 text-muted">
                    <?php echo ucfirst( get_the_title() ); ?>
                </h2>
            </div>
      
      <!-- Right Search + Filter -->
      <div class="col-md-8">
        <div class="d-flex justify-content-end align-items-center gap-2">
          
          <!-- Search Input -->
          <div class="input-group mt-4" style="max-width: 280px;">
            <input type="text" class="form-control" placeholder="Search by author name">
            <button class="btn search-btn" type="button">
              <i class="bi bi-search"></i>
            </button>
          </div>

          <!-- Sort / Filter Button -->
          <button class="btn btn-outline-secondary d-flex align-items-center ml-2">
            <i class="bi bi-funnel me-2"></i> Sort by
          </button>
        </div>
      </div>

    </div>
    <hr class="mt-3">
  </div>
</section>
<!--====== Search & Filter Row END ======-->


<section id="buildings" class="building-area pt-3 pb-100">
    <div class="container">
        <!-- <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-50">
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s"><?php # echo get_theme_mod('buildings_section_title', 'Sweet Home'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s"><?php # echo get_theme_mod('buildings_section_subtitle', 'Find Your Neighbors – Explore detailed information about each building, flat owners, and rented residents, all organized in one secure and easy-to-navigate directory for the Swapnanagar community.'); ?></p>
                </div>
            </div>
        </div> -->

        <div class="row mb-30">
            <?php
            $buildings = new WP_Query( array(
                'post_type'      => 'buildings',
                'posts_per_page' => -1,
            ));

            if ( $buildings->have_posts() ) :
                $delay = 0.2;
                while ( $buildings->have_posts() ) : $buildings->the_post();
                    $location = get_post_meta( get_the_ID(), 'location', true );
                    $height   = get_post_meta( get_the_ID(), 'height', true );
                    $floors   = get_post_meta( get_the_ID(), 'floors', true );
                    $price    = get_post_meta( get_the_ID(), 'price', true );
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-building wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay) . 's'; ?>">
                        <div class="building-img position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium_large', array('class' => 'img-fluid rounded-top') );
                                } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-building.jpg" alt="<?php the_title(); ?>" class="img-fluid rounded-top">
                                <?php } ?>
                            </a>
                            <div class="price-badge position-absolute bg-primary text-white px-3 py-1">
                                <?php echo esc_html($price ? '$' . number_format($price) : 'Price On Request'); ?>
                            </div>
                        </div>
                        <div class="building-info p-3 border align-items-center rounded-bottom shadow-sm">
                            <h4 class="mb-2 text-center"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                            <div class="building-meta d-flex justify-content-between text-muted mb-2">
                                <div class="meta-item"><i class="lni lni-map-marker"></i> <?php echo esc_html($location); ?></div>
                                <div class="meta-item"><i class="lni lni-building"></i> <?php echo esc_html($height); ?> ft</div>
                                <div class="meta-item"><i class="lni lni-layers"></i> <?php echo esc_html($floors); ?> floors</div>
                            </div>
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
            else :
            ?>
                <div class="col-12">
                    <p class="text-center">No buildings found.</p>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="<?php #echo get_post_type_archive_link( 'building' ); ?>" class="main-btn">View All Properties</a>
                </div>
            </div>
        </div> -->
    </div>
</section>

<?php
    get_template_part( './tem-parts/footer', null, null );
    wp_footer();
?>