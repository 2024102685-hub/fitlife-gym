<?php

$data['active'] = 'register';
$data['css'] = 'auth.css';

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<section class="register-section">

    <div class="container">

        <!-- Register Card -->

        <div class="register-wrapper">

            <div class="row g-0 align-items-stretch">

                <!-- LEFT SIDE -->

                <div class="col-lg-5 d-flex">

                    <div class="register-left w-100">

                        <img src="<?= base_url('assets/images/register.jpg'); ?>" class="register-image"
                            alt="FitLife Gym">

                        <div class="register-info">

                            <h3>

                                JOIN FITLIFE GYM

                            </h3>

                            <p>

                                Create your account and start your
                                fitness journey with us today!

                            </p>

                            <div class="register-feature">

                                <i class="bi bi-check-circle-fill"></i>

                                <div>

                                    <h6>Easy Registration</h6>

                                    <small>Sign up in just a few simple steps.</small>

                                </div>

                            </div>

                            <div class="register-feature">

                                <i class="bi bi-shield-check"></i>

                                <div>

                                    <h6>Secure & Safe</h6>

                                    <small>Your information is protected.</small>

                                </div>

                            </div>

                            <div class="register-feature">

                                <i class="bi bi-stars"></i>

                                <div>

                                    <h6>Better Experience</h6>

                                    <small>Manage your membership easily.</small>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE -->

                <div class="col-lg-7 d-flex">

                    <div class="register-right w-100">

                        <form action="<?= base_url('register/save'); ?>" method="post">

                            <!-- =========================
                                 PERSONAL INFORMATION
                            ========================== -->

                            <h5 class="form-title">

                                PERSONAL INFORMATION

                            </h5>

                            <!-- Full Name -->

                            <div class="mb-3">

                                <label class="form-label">

                                    Full Name

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="bi bi-person"></i>

                                    </span>

                                    <input type="text" name="full_name" class="form-control"
                                        placeholder="Enter your full name" required>

                                </div>

                            </div>

                            <!-- IC Number -->

                            <div class="mb-3">

                                <label class="form-label">

                                    IC Number

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="bi bi-credit-card-2-front"></i>

                                    </span>

                                    <input type="text" name="ic_number" class="form-control" maxlength="12"
                                        placeholder="Example: 010203045678" required>

                                </div>

                            </div>

                            <!-- Phone & Email -->

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">

                                        Phone Number

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">

                                            <i class="bi bi-telephone"></i>

                                        </span>

                                        <input type="tel" name="phone_number" class="form-control"
                                            placeholder="Example: 0123456789" required>

                                    </div>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">

                                        Email Address

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">

                                            <i class="bi bi-envelope"></i>

                                        </span>

                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter your email" required>

                                    </div>

                                </div>

                            </div>

                            <!-- Gender -->

                            <div class="mb-4">

                                <label class="form-label">

                                    Gender

                                </label>

                                <select name="gender" class="form-select" required>

                                    <option value="" selected disabled>

                                        Select Gender

                                    </option>

                                    <option value="Male">

                                        Male

                                    </option>

                                    <option value="Female">

                                        Female

                                    </option>

                                </select>

                            </div>

                            <!-- =========================
                                        ACCOUNT INFORMATION
                                    ========================= -->

                            <h5 class="form-title account-title">

                                ACCOUNT INFORMATION

                            </h5>

                            <!-- Password -->

                            <div class="mb-3">

                                <label class="form-label">

                                    Password

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="bi bi-lock"></i>

                                    </span>

                                    <input type="password" id="password" name="password" class="form-control"
                                        minlength="8" placeholder="Minimum 8 characters" required>

                                    <span class="input-group-text toggle-password" data-target="password">

                                        <i class="bi bi-eye"></i>

                                    </span>

                                </div>

                            </div>

                            <!-- Confirm Password -->

                            <div class="mb-3">

                                <label class="form-label">

                                    Confirm Password

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="bi bi-lock-fill"></i>

                                    </span>

                                    <input type="password" id="confirmPassword" name="confirm_password"
                                        class="form-control" minlength="8" placeholder="Confirm password" required>

                                    <span class="input-group-text toggle-password" data-target="confirmPassword">

                                        <i class="bi bi-eye"></i>

                                    </span>

                                </div>

                            </div>

                            <!-- Terms -->

                            <div class="form-check mb-4">

                                <input class="form-check-input" type="checkbox" id="agree" required>

                                <label class="form-check-label" for="agree">

                                    I agree to the
                                    <a href="<?= base_url('policy'); ?>">
                                        Terms & Conditions
                                    </a>
                                    and
                                    <a href="<?= base_url('policy'); ?>">
                                        Privacy Policy
                                    </a>

                                </label>

                            </div>

                            <!-- Register Button -->

                            <button type="submit" class="register-btn">

                                REGISTER

                            </button>

                            <hr class="register-divider">

                            <div class="login-link">

                                Already have an account?

                                <a href="<?= base_url('login'); ?>">

                                    Login Here

                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>