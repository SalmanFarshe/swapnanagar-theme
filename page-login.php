<?php
/* Template Name: Login Page */
wp_head();
include locate_template('templates/global/header.php'); // Load custom header
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/login.css">
<section class="login-page">
    <div class="login-container">
        
        <!-- Right Column: Image or Info -->
        <div class="login-info" data-aos="fade-right">
            <h2>Welcome to Swapnanagar</h2>
            <p>Choose your role and access your personalized dashboard.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/login-illustration.png" alt="Login Illustration">
        </div>
        <!-- Left Column: Login Form -->
         <div class="login-form" data-aos="fade-left">
            <h2>Login to Your Account</h2>
            <form method="post" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>">
                <div class="form-group">
                    <input type="text" name="log" placeholder="Username or Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" placeholder="Password" required>
                </div>
                
                <!-- Role Selection -->
                <div class="form-group">
                    <label for="role">Select Role:</label>
                    <select name="role" id="role" required>
                        <option value="subscriber">Member</option>
                        <option value="owner">Owner</option>
                        <option value="tutor">Tutor</option>
                        <option value="administrator">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
            <p><a href="<?php echo wp_lostpassword_url(); ?>">Forgot Password?</a></p>
        </div>
    </div>
</section>
<?php 
    include locate_template('templates/global/footer.php'); 
    wp_footer();    
?>