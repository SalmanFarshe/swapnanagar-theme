<?php
    get_template_part('./tem-parts/header', null, null);
?>
<?php
/**
 * Template Name: To Let Page
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

<section id="community" class="team-area pt-70 mt-70 pb-100">
  <!-- <div class="container"> -->

    <!-- Section Title -->
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title">To Let</h2>
        <p class="text-muted">Content Comming Soon</p>
      </div>
    </div>
</section>



<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>