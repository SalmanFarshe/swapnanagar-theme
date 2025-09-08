<?php
    get_template_part('./tem-parts/header', null, null);
?>
<?php
/**
 * Template Name: Library Page
 */
wp_head();
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

<section id="library" class="library-area pt-3">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-50">
                    <!-- <h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">
                        <?php # echo get_theme_mod('libraries_section_title', 'All Books'); ?>
                    </h2> -->
                    <!-- <p class="wow fadeInUp" data-wow-delay=".4s">
                        <?php # echo get_theme_mod('libraries_section_subtitle', 'Explore our latest books with modern concepts, prime publications, and all essential coverage.'); ?>
                    </p> -->
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $library = new WP_Query(array(
                'post_type'      => 'libraries',
                'posts_per_page' => -1,
            ));

            if ($library->have_posts()) :
                $delay = 0.2;
                while ($library->have_posts()) : $library->the_post();
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    $author = get_post_meta(get_the_ID(), 'author', true); // Optional custom field
                    $pages = get_post_meta(get_the_ID(), 'pages', true);   // Optional custom field
            ?>
                <div class="col-xl-3 col-lg-3 col-md-4 mb-5">
                    <div class="single-book wow fadeInUp border rounded shadow-sm h-100 d-flex flex-column" data-wow-delay="<?php echo esc_attr($delay) . 's'; ?>">

                        <!-- Book Image -->
                        <div class="book-img position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium_large', array('class' => 'm-auto w-100 rounded-top'));
                                } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-book.jpg" alt="<?php the_title(); ?>" class="img-fluid rounded-top">
                                <?php } ?>
                            </a>
                            <!-- Free/Paid Badge -->
                            <div class="book-badge position-absolute bg-<?php echo $price ? 'success' : 'primary'; ?> text-white px-3 py-1" style="top: 10px; left: 10px; border-radius: 4px;">
                                <?php echo $price ? '$' . number_format($price) : 'Free'; ?>
                            </div>
                        </div>

                        <!-- Book Info -->
                        <div class="book-info p-3 flex-grow-1 d-flex flex-column">
                            <h4 class="mb-2 text-center">
                                <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
                            </h4>

                            <?php if ($author || $pages) : ?>
                                <div class="book-meta text-muted small mb-3 text-center">
                                    <?php if ($author) : ?><span><i class="lni lni-user"></i> <?php echo esc_html($author); ?></span><?php endif; ?>
                                    <?php if ($pages) : ?> | <span><i class="lni lni-book"></i> <?php echo esc_html($pages); ?> pages</span><?php endif; ?>
                                </div>
                            <?php endif; ?>

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
            endif;
            ?>
        </div>

        <!-- <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="<?php # echo get_post_type_archive_link('libraries'); ?>" class="main-btn">View All Books</a>
                </div>
            </div>
        </div> -->
    </div>
</section>

<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>
