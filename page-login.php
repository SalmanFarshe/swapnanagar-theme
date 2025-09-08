<?php
    get_template_part('./tem-parts/header3', null, null);
?>
<?php
/**
 * Template Name: Login Page
 */
wp_head();
?>
<style>
.login-bg {
    min-height: 100vh;
    width: 100vw;
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    padding: 40px 30px;
    margin: 25px;
    width: 100%;
    max-width: 400px;
}
.login-box h3 {
    color: #222;
    margin-bottom: 30px;
}
.toggle-password {
    position: absolute;
    right: 15px;
    top: 45px;
    cursor: pointer;
    font-size: 18px;
}
</style>

<div class="login-bg">
    <div class="login-box">
        <h3 class="text-center pb-3">Log In</h3>
        <?php if (is_user_logged_in()): ?>
            <div class="already-logged-in text-center">
                <p>You are already logged in.</p>
                <a href="<?php echo esc_url(home_url()); ?>" class="btn main-btn">Go to Home</a>
            </div>
        <?php else: ?>
            <form name="loginform" id="custom_login_form" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                <div class="mb-3">
                    <label for="user_login">Email or Phone</label>
                    <input type="text" name="log" id="user_login" class="form-control" value="" size="20" required />
                </div>
                <div class="mb-3 position-relative">
                    <label for="user_pass">Password</label>
                    <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" required />
                    <span toggle="#user_pass" class="toggle-password">👁</span>
                </div>
                <div class="mb-2 text-end">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="mb-3">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn main-btn w-100" value="Log In" disabled />
                    <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>" />
                </div>
            </form>
            <div class="login-extra text-center mt-3">
                <p><a href="#">Can’t Access Your Account?</a></p>
                <p>Don’t have an account? <a href="register">Sign Up</a></p>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const emailPhone = document.getElementById("user_login");
    const password = document.getElementById("user_pass");
    const loginBtn = document.getElementById("wp-submit");
    const togglePassword = document.querySelector(".toggle-password");

    function checkInputs() {
        if (emailPhone.value.trim() !== "" && password.value.trim() !== "") {
            loginBtn.removeAttribute("disabled");
        } else {
            loginBtn.setAttribute("disabled", "true");
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
    wp_footer();
?>