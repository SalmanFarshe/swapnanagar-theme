<?php
/**
 * Template Name: Owner Page
 */
wp_head();
?>
<?php
    get_template_part('./tem-parts/header', null, null);
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

<section class="single-owner-area pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owner-profile shadow-sm p-4 rounded d-flex flex-wrap align-items-center">
                    
                    <!-- Left Column: Photo -->
                    <div class="col-md-5 text-center mb-4 mr-3 mb-md-0">
                        <img src="https://devmondo.com/wp-content/uploads/2019/05/team-1-640x640.jpg" 
                             class="img-fluid rounded" 
                             alt="Md. Kallol" 
                             style="object-fit: cover;">
                    </div>

                    <!-- Right Column: Info -->
                    <div class="col-md-6">
                        <h3 class="mb-3">Hi Guys!</h3>
                        <p class="text-muted mb-4">I am Md. Kallol, the owner of Flat 4A, Swapnanagar Building.</p>

                        <table class="table table-borderless mb-4">
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td>Md. Kallol (এমডি কাললোল)</td>
                                </tr>
                                <tr>
                                    <th>Father’s Name:</th>
                                    <td>Md. Rahman (এমডি রহমান)</td>
                                </tr>
                                <tr>
                                    <th>Spouse Name:</th>
                                    <td>Mrs. Shimu (শিমু)</td>
                                </tr>
                                <tr>
                                    <th>Building / Flat / Garage:</th>
                                    <td>Building 4, Flat 4A, Garage 2</td>
                                </tr>
                                <tr>
                                    <th>NID No:</th>
                                    <td>1234567890123</td>
                                </tr>
                                <tr>
                                    <th>WhatsApp:</th>
                                    <td>+880 1711 234567</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>kallol@example.com</td>
                                </tr>
                                <tr>
                                    <th>Profession:</th>
                                    <td>Businessman</td>
                                </tr>
                                <tr>
                                    <th>Service District:</th>
                                    <td>Dhaka</td>
                                </tr>
                                <tr>
                                    <th>Present Address:</th>
                                    <td>123, Mirpur, Dhaka</td>
                                </tr>
                                <tr>
                                    <th>Permanent Address:</th>
                                    <td>456, Sylhet</td>
                                </tr>
                                <tr>
                                    <th>Blood Group:</th>
                                    <td>O+</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary mr-2">Download Resume</a>
                            <a href="#" class="btn btn-danger">Contact Me</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>