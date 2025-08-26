<?php
/**
 * Template Name: Shop Page
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

<section id="shop" class="shop-area pt-3">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title">
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".2s">Online Shop</h2> -->
                    <!-- <p class="wow fadeInUp" data-wow-delay=".4s"> -->
                        <!-- Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. -->
                    <!-- </p> -->
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row">
            <?php
            $products = [
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ],
                
                [
                    'title' => 'Sony Alpha A6400 Mirrorless Digital Camera with 16-50mm Lens',
                    'price' => '94,000৳',
                    'old_price' => '105,000৳',
                    'discount' => '10%',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2YfOjVPMOLyOCBJnmAPjCoBmu7Y6n1cIOMQ&s',
                    'link' => '#'
                ]
                
            ];

            foreach ($products as $product): ?>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-product wow fadeInUp shadow p-3" data-wow-delay=".2s">
                        <div class="product-img position-relative">
                            <!-- Discount Badge -->
                            <span class="discount-badge position-absolute" style="top:10px; left:10px; background:#6a1b9a; color:#fff; padding:5px 10px; font-size:12px; border-radius:3px;">
                                Save: <?php echo $product['old_price'] - str_replace(',','',str_replace('৳','',$product['price'])); ?>৳ (-<?php echo $product['discount']; ?>)
                            </span>

                            <a href="<?php echo esc_url($product['link']); ?>">
                                <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>" class="img-fluid">
                            </a>
                        </div>
                        <div class="product-info mt-2 text-center">
                            <h5><a href="<?php echo esc_url($product['link']); ?>"><?php echo esc_html($product['title']); ?></a></h5>
                            <p class="price text-danger font-weight-bold mb-0"><?php echo esc_html($product['price']); ?> <span class="old-price" style="text-decoration:line-through; color:#888; font-weight:400; font-size:14px;"><?php echo esc_html($product['old_price']); ?></span></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- View All Button -->
        <!-- <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="shop" class="main-btn">View All Products</a>
                </div>
            </div>
        </div> -->
    </div>
</section>


<?php
    get_template_part( './tem-parts/footer', null, null );
    wp_footer();
?>