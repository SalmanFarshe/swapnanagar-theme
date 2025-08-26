<?php
/**
 * Template Name: Community Registration
 */
wp_head();
?>
<?php 
get_template_part('./tem-parts/header3', null, null);
?>

<section class="login-section pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center mt-115">Join the Swapnanagar Community</h3>
            <p class="text-center mb-5">Create your account to get started.</p>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="login-box p-4 rounded">

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
                        <p>
                            <label>Email or Phone</label>
                            <input type="text" name="email_or_phone" id="email_or_phone" class="form-control" required>
                        </p>
                        <p class="position-relative">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control pr-5" required>
                            <span toggle="#password" class="toggle-password" style="position:absolute; right:10px; top:50px; cursor:pointer;">
                                👁
                            </span>
                        </p>
                        <p class="mt-3">
                            <input type="submit" name="community_register" id="register_btn" class="btn main-btn w-100" value="Register" disabled>
                        </p>
                    </form>

                    <div class="login-extra text-center mt-3">
                        <p>Already have an account? <a href="login">Log in</a></p>
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
