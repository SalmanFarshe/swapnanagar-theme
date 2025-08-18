<section id="shop" class="shop-area pt-70 mt-70">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Online Shop</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
                    </p>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row mt-4">
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
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center view-all-btn mt-4">
                    <a href="shop" class="main-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
