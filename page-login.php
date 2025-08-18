<?php
/**
 * Template Name: Library Page
 */
wp_head();
?>
<?php
    get_template_part('./tem-parts/header2', null, null);
?>
<section class="login-section pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center mt-115">Log Into Swapnanagar</h3>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="login-box">
                    <?php
                    if (is_user_logged_in()) {
                        echo '<div class="already-logged-in">';
                        echo '<p>You are already logged in.</p>';
                        echo '<a href="' . esc_url(home_url()) . '" class="btn main-btn">Go to Home</a>';
                        echo '</div>';
                    } else {
                        $args = array(
                            'redirect' => home_url(), // redirect after login
                            'form_id' => 'custom_login_form',
                            'label_username' => __('Username'),
                            'label_password' => __('Password'),
                            'label_remember' => __('Remember Me'),
                            'label_log_in' => __('Log In'),
                            'remember' => true
                        );
                    ?>
                    <p>
                        <label for="reg_role">Select Your Role</label>
                        <select name="reg_role" id="reg_role" class="form-control mb-3" required>
                            <option value="subscriber">Subscriber</option>
                            <option value="contributor">Contributor</option>
                            <option value="author">Author</option>
                            <option value="editor">Editor</option>
                            <option value="tutor">Tutor</option>
                            <option value="student">Student</option>
                            <option value="library_member">Library Member</option>
                            <option value="event_organizer">Event Organizer</option>
                            <option value="moderator">Moderator</option>
                        </select>
                    </p>
                    <?php
                        wp_login_form($args);
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>
