<?php
/* Template Name: Register Page */
wp_head();
include locate_template('templates/global/header.php'); // Load custom header
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/login.css">
<section class="login-page">
    <div class="login-container">
        <!-- Right Column: Image or Info -->
        <div class="login-info" data-aos="fade-right">
            <h2>Join Swapnanagar</h2>
            <p>Create your account and become part of our vibrant community.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/login-illustration.png" alt="Register Illustration">
        </div>
        <!-- Left Column: Register Form -->
        <div class="login-form" data-aos="fade-left">
            <h2>Create an Account</h2>
            <form method="post" action="<?php echo esc_url(site_url('wp-login.php?action=register', 'login_post')); ?>">
                <div class="form-group">
                    <input type="text" name="user_login" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="user_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="user_pass" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="user_phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="text" name="user_nid" placeholder="NID Number" required>
                </div>
                <div class="form-group">
                    <input type="text" name="user_block" placeholder="Block (e.g. A, B, C)" required>
                </div>
                <div class="form-group">
                    <input type="text" name="user_flat" placeholder="Flat Number" required>
                </div>
                <div class="form-group">
                    <input type="text" name="user_address" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <label for="role">Register As:</label>
                    <select name="role" id="role" required>
                        <option value="subscriber">Member</option>
                        <option value="owner">Owner</option>
                        <option value="tutor">Tutor</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-btn">Register</button>
                </div>
            </form>
            <p>Already have an account? <a href="<?php echo esc_url(site_url('login')); ?>">Login here</a></p>
        </div>
    </div>
</section>
<?php 
    include locate_template('templates/global/footer.php'); 
    wp_footer();    
?>
