<?php
/* Template Name: Tutor Page */
wp_head();
?>

<?php include_once('templates/global/header.php'); ?>

<section class="tutor-hero fix-height" data-aos="fade-up">
  <div class="container">
    <h1>Find a Tutor in Swapnanagar</h1>
    <p>Connect with community members offering tutoring in various subjects, or become a tutor yourself!</p>
  </div>
</section>

<section class="tutor-list-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4" data-aos="fade-up">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe" class="tutor-avatar mb-3">
          <h5>John Doe</h5>
          <div class="subject">Mathematics</div>
          <div class="desc">Experienced in high school and college math. Available for online and in-person sessions.</div>
          <div class="contact">Contact: 01234 567890</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith" class="tutor-avatar mb-3">
          <h5>Jane Smith</h5>
          <div class="subject">English & Literature</div>
          <div class="desc">Passionate about language arts. Offers free group sessions for kids.</div>
          <div class="contact">Contact: 09876 543210</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Alex Lee" class="tutor-avatar mb-3">
          <h5>Alex Lee</h5>
          <div class="subject">Science</div>
          <div class="desc">Specializes in Physics and Chemistry. First session is free!</div>
          <div class="contact">Contact: 01122 334455</div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4" data-aos="fade-up">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe" class="tutor-avatar mb-3">
          <h5>John Doe</h5>
          <div class="subject">Mathematics</div>
          <div class="desc">Experienced in high school and college math. Available for online and in-person sessions.</div>
          <div class="contact">Contact: 01234 567890</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith" class="tutor-avatar mb-3">
          <h5>Jane Smith</h5>
          <div class="subject">English & Literature</div>
          <div class="desc">Passionate about language arts. Offers free group sessions for kids.</div>
          <div class="contact">Contact: 09876 543210</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="tutor-card">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Alex Lee" class="tutor-avatar mb-3">
          <h5>Alex Lee</h5>
          <div class="subject">Science</div>
          <div class="desc">Specializes in Physics and Chemistry. First session is free!</div>
          <div class="contact">Contact: 01122 334455</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tutor-cta fix-height" data-aos="zoom-in">
  <div class="container">
    <h2>Want to Offer Tutoring?</h2>
    <a href="#" class="cta-btn">Become a Tutor</a>
  </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 900, once: true });
</script>
<?php include_once('templates/global/footer.php'); wp_footer(); ?>
