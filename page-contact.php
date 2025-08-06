<?php
/* Template Name: Contact Page */
wp_head();
include locate_template('templates/global/header.php');
?>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<style>
.contact-hero {
  background: linear-gradient(120deg, #4f8cff 0%, #6ed6ff 100%);
  color: #fff;
  text-align: center;
  padding: 60px 0 40px 0;
}
.contact-hero h1 { font-size: 2.5rem; font-weight: 700; }
.contact-hero p { font-size: 1.2rem; }
.contact-section { background: #f7f8fa; padding: 60px 0; }
.contact-form-box {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 2px 8px rgba(79,140,255,0.07);
  padding: 2em 1.5em;
  margin-bottom: 2em;
  transition: box-shadow 0.2s;
  min-height: 320px;
}
.contact-form-box:hover { box-shadow: 0 4px 18px rgba(79,140,255,0.15); }
.contact-form-box h2 { color: #4f8cff; font-weight: 600; margin-bottom: 1em; }
.contact-form .form-group { margin-bottom: 1.2em; }
.contact-form input, .contact-form textarea {
  width: 100%;
  padding: 1em;
  border-radius: 10px;
  border: 1px solid #dbeafe;
  font-size: 1rem;
  background: #f7f8fa;
  resize: none;
}
.contact-form textarea { min-height: 120px; }
.contact-form button {
  background: #4f8cff;
  color: #fff;
  border: none;
  padding: 12px 32px;
  border-radius: 30px;
  font-size: 1.1rem;
  font-weight: 600;
  box-shadow: 0 2px 12px rgba(79,140,255,0.1);
  transition: background 0.2s, color 0.2s;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
}
.contact-form button:hover { background: #6ed6ff; color: #222c36; }
.contact-info-box {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 2px 8px rgba(79,140,255,0.07);
  padding: 2em 1.5em;
  min-height: 320px;
  text-align: left;
}
.contact-info-box h3 { color: #4f8cff; font-weight: 600; margin-bottom: 1em; }
.contact-info-box p { margin-bottom: 0.7em; }
.contact-info-box .info-label { color: #6ed6ff; font-weight: 500; }
@media (max-width: 900px) {
  .contact-form-box, .contact-info-box { margin-bottom: 2em; }
}
</style>
<section class="contact-hero fix-height" data-aos="fade-up">
  <div class="container">
    <h1>Contact Us</h1>
    <p>Have a question or need support? Reach out to our community team below.</p>
  </div>
</section>
<section class="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6" data-aos="fade-right">
        <div class="contact-form-box">
          <h2>Send a Message</h2>
          <form class="contact-form">
            <div class="form-group">
              <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
      <div class="col-md-5" data-aos="fade-left">
        <div class="contact-info-box">
          <h3>Community Office</h3>
          <p><span class="info-label">Address:</span> 123 Swapnanagar Lane, Dream City</p>
          <p><span class="info-label">Email:</span> info@swapnanagar.com</p>
          <p><span class="info-label">Phone:</span> +123 456 7890</p>
          <p><span class="info-label">Support Hours:</span> 9:00 AM – 6:00 PM (Mon–Sat)</p>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 900, once: true });
</script>
<?php include locate_template('templates/global/footer.php'); wp_footer(); ?>
