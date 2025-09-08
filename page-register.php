
<?php 
    get_template_part('./tem-parts/header3', null, null);
?>
<?php
/**
 * Template Name: Community Registration
 */
wp_head();
?>
<style>
.register-bg {
    min-height: 100vh;
    width: 100vw;
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
}
.register-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    padding: 40px 30px;
    margin: 25px;
    width: 100%;
    max-width: 400px;
}
.register-box h3 {
    color: #222;
    margin-bottom: 30px;
}
.toggle-password {
    position: absolute;
    right: 15px;
    top: 30px;
    cursor: pointer;
    font-size: 18px;
}
</style>

<div class="register-bg">
    <div class="register-box">
        <h3 class="text-center pb-3">Join Swapnanagar Community</h3>
        <p class="text-center mb-4">Create your account to get started.</p>
        <?php if (is_user_logged_in()): ?>
            <div class="already-logged-in text-center">
                <p>You are already registered & logged in.</p>
                <a href="<?php echo esc_url(home_url()); ?>" class="btn main-btn">Go to Home</a>
            </div>
        <?php else: ?>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['community_register'])) {
                $email_or_phone = sanitize_text_field($_POST['email_or_phone']);
                $password       = $_POST['password'];
                $errors         = new WP_Error();

                // Check email or phone
                if (is_email($email_or_phone)) {
                    $email = $email_or_phone;
                    if (email_exists($email)) {
                        $errors->add('email_exists', 'Email already registered.');
                    }
                } else {
                    // Treat as phone: use it as username, append dummy email
                    $phone  = $email_or_phone;
                    $email  = $phone . '@swapnanagar.local';
                    if (username_exists($phone)) {
                        $errors->add('phone_exists', 'Phone number already registered.');
                    }
                }

                if (strlen($password) < 6) {
                    $errors->add('weak_password', 'Password must be at least 6 characters.');
                }

                if (empty($errors->errors)) {
                    $username = is_email($email_or_phone) ? explode('@', $email)[0] : $phone;

                    $user_id = wp_create_user($username, $password, $email);
                    if (!is_wp_error($user_id)) {
                        echo '<div class="alert alert-success">Registration successful! <a href="' . wp_login_url() . '">Log in here</a>.</div>';
                    } else {
                        echo '<div class="alert alert-danger">' . esc_html($user_id->get_error_message()) . '</div>';
                    }
                } else {
                    foreach ($errors->get_error_messages() as $error) {
                        echo '<div class="alert alert-danger">' . esc_html($error) . '</div>';
                    }
                }
            }
            ?>
            <form method="post" class="registration-form" id="community_register_form">
                <div class="mb-3">
                    <label for="email_or_phone">Email or Phone</label>
                    <input type="text" name="email_or_phone" id="email_or_phone" class="form-control" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    <span toggle="#password" class="toggle-password">👁</span>
                </div>
                <div class="mb-3">
                    <input type="submit" name="community_register" id="register_btn" class="btn main-btn w-100" value="Register" disabled>
                </div>
            </form>
            <div class="login-extra text-center mt-3">
                <p>Already have an account? <a href="login">Log in</a></p>
            </div>
        <?php endif; ?>
    </div>
</div>

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
wp_footer();
?>
