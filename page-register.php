<?php
/**
 * Template Name: Community Registration
 */
wp_head();
?>
<?php get_template_part('./tem-parts/header2', null, null); ?>

<section class="login-section pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center mt-115">Join the Swapnanagar Community</h3>
            <p class="text-center mb-4">Create your account to get started.</p>
            <div class="col-lg-10">
                <div class="login-box p-4 rounded">

                <?php
                if (is_user_logged_in()) {
                    echo '<div class="already-logged-in">';
                    echo '<p>You are already registered & logged in.</p>';
                    echo '<a href="' . esc_url(home_url()) . '" class="btn main-btn">Go to Home</a>';
                    echo '</div>';
                } else {
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['community_register'])) {
                        
                        $username   = sanitize_user($_POST['username']);
                        $email      = sanitize_email($_POST['email']);
                        $password   = $_POST['password'];
                        $confirm    = $_POST['confirm_password'];
                        $first_name = sanitize_text_field($_POST['first_name']);
                        $last_name  = sanitize_text_field($_POST['last_name']);
                        $role       = sanitize_text_field($_POST['reg_role']);
                        $phone      = sanitize_text_field($_POST['phone']);
                        $address    = sanitize_text_field($_POST['address']);
                        $bio        = sanitize_textarea_field($_POST['bio']);
                        
                        $errors = new WP_Error();

                        if (username_exists($username)) {
                            $errors->add('username_exists', 'Username already exists.');
                        }
                        if (!validate_username($username)) {
                            $errors->add('invalid_username', 'Invalid username.');
                        }
                        if (email_exists($email)) {
                            $errors->add('email_exists', 'Email already registered.');
                        }
                        if (!is_email($email)) {
                            $errors->add('invalid_email', 'Invalid email address.');
                        }
                        if ($password !== $confirm) {
                            $errors->add('password_mismatch', 'Passwords do not match.');
                        }
                        if (empty($role)) {
                            $errors->add('role_missing', 'Please select a role.');
                        }

                        if (empty($errors->errors)) {
                            $user_id = wp_create_user($username, $password, $email);
                            wp_update_user(array(
                                'ID' => $user_id,
                                'first_name' => $first_name,
                                'last_name'  => $last_name,
                                'role'       => $role
                            ));
                            
                            update_user_meta($user_id, 'phone', $phone);
                            update_user_meta($user_id, 'address', $address);
                            update_user_meta($user_id, 'description', $bio);
                            
                            echo '<div class="alert alert-success">Registration successful! <a href="' . wp_login_url() . '">Login here</a>.</div>';
                        } else {
                            foreach ($errors->get_error_messages() as $error) {
                                echo '<div class="alert alert-danger">' . esc_html($error) . '</div>';
                            }
                        }
                    }
                    ?>

                    <form method="post" class="registration-form">
                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <p>
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </p>
                                <p>
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </p>
                                <p>
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" required>
                                </p>
                                <p>
                                    <label for="reg_role">Select Your Role</label>
                                    <select name="reg_role" id="reg_role" class="form-control" required>
                                        <option value="">-- Select Role --</option>
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
                            </div>

                            <!-- Column 2 -->
                            <div class="col-md-6">
                                <p>
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                </p>
                                <p>
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control">
                                </p>
                                <p>
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </p>
                                <p>
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">
                                </p>
                                <p>
                                    <label>Short Bio</label>
                                    <textarea name="bio" class="form-control" rows="4"></textarea>
                                </p>
                            </div>
                        </div>
                        <p class="mt-3">
                            <input type="submit" name="community_register" class="btn main-btn w-100" value="Register">
                        </p>
                    </form>

                    <?php
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
