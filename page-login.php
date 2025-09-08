<?php
    get_template_part('./tem-parts/header3', null, null);
?>
<?php
/**
 * Template Name: Library Page
 */
wp_head();
?>
<section class="login-section pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center pb-5">Log Into Swapnanagar</h3>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="login-box">

                    <?php if (is_user_logged_in()): ?>
                        <div class="already-logged-in text-center">
                            <p>You are already logged in.</p>
                            <a href="<?php echo esc_url(home_url()); ?>" class="btn main-btn">Go to Home</a>
                        </div>
                    <?php else: ?>
                        <?php
                        $args = array(
                            'redirect'       => home_url(), // redirect after login
                            'form_id'        => 'custom_login_form',
                            'label_username' => __('Email or Phone'),
                            'label_password' => __('Password'),
                            'label_log_in'   => __('Log In'),
                            'remember'       => true
                        );
                        ?>

                        <!-- Role Selection (commented out, not used) -->
                        <!--
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
                        -->

                        <form name="loginform" id="custom_login_form" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                            <p>
                                <label for="user_login">Email or Phone</label>
                                <input type="text" name="log" id="user_login" class="form-control" value="" size="20" required />
                            </p>
                            <p class="position-relative">
                                <label for="user_pass">Password</label>
                                <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" required />
                                <span toggle="#password" class="toggle-password" style="position:absolute; right:10px; top:50px; cursor:pointer;">
                                👁
                            </span>
                            </p>

                            <p class="text-right">
                                <a href="#">Forgot Password?</a>
                            </p>

                            <p>
                                <input type="submit" name="wp-submit" id="wp-submit" class="btn main-btn w-100" value="Log In" disabled />
                                <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>" />
                            </p>
                        </form>

                        <div class="login-extra text-center mt-4">
                            <p><a href="#">Can’t Access Your Account?</a></p>
                            <p>Don’t have an account? <a href="register">Sign Up</a></p>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const emailPhone = document.getElementById("email_or_phone");
    const password = document.getElementById("password");
    const registerBtn = document.getElementById("register_btn");
    const togglePassword = document.querySelector(".toggle-password");

    function checkInputs() {
        if (emailPhone.value.trim() !== "" && password.value.trim() !== "") {
            registerBtn.removeAttribute("disabled");
        } else {
            registerBtn.setAttribute("disabled", "true");
        }
    }

    emailPhone.addEventListener("input", checkInputs);
    password.addEventListener("input", checkInputs);

    togglePassword.addEventListener("click", function() {
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
    });
});
</script>
<?php
    // get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>
