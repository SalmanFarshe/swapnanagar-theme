
<?php
/* Template Name: About Page */
wp_head();
?>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<link rel="stylesheet" href="/wp-content/themes/community-theme/style-about.css" />
<?php include_once('templates/global/header.php'); ?>

<section class="about-hero" data-aos="fade-up">
    <div class="about-hero-inner">
        <h1>About Our Community</h1>
        <p>Welcome to Swapnanagar – a thriving community where residents live, connect, and grow together.</p>
    </div>
</section>

<section class="about-details" data-aos="fade-up">
    <div class="about-details-inner">
        <h2>Our Mission</h2>
        <p>Our mission is to build a strong, vibrant, and connected community where everyone feels at home.</p>

        <h2>What We Offer</h2>
        <ul class="about-features">
            <li data-aos="fade-right">Comprehensive building and flat listings</li>
            <li data-aos="fade-right" data-aos-delay="100">A dedicated marketplace for residents</li>
            <li data-aos="fade-right" data-aos-delay="200">Tutoring and educational support</li>
            <li data-aos="fade-right" data-aos-delay="300">Community events and updates</li>
        </ul>

        <h2>Why Join Us?</h2>
        <p>Swapnanagar provides a platform where residents can easily find resources, share knowledge, and build lasting relationships.</p>
    </div>
</section>

<section class="about-cta" data-aos="zoom-in">
    <div class="about-cta-inner">
        <h2>Ready to Be Part of Swapnanagar?</h2>
        <a href="#" class="cta-btn">Join Now</a>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true
  });
</script>
<?php
include_once('templates/global/footer.php');
wp_footer(); 
?>
