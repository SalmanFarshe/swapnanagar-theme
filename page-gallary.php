<?php
/**
 * Template Name: Community Gallery Page
 */
wp_head();
?>
<?php
    get_template_part('./tem-parts/header', null, null);
?>
<!--====== HERO PART START ======-->
<section class="page-banner pt-200 pb-100 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="text-white">Community Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->
<section id="community" class="team-area pt-70 mt-70 pb-100">
  <!-- <div class="container"> -->

    <!-- Section Title -->
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title">Community Gallery</h2>
        <p class="text-muted">Content Comming Soon</p>
      </div>
    </div>
</section>



<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>