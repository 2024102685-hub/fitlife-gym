<?php

$data['active'] = 'login';
$data['css'] = 'auth.css';

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<!-- ==========================================================
     LOGIN PAGE
========================================================== -->

<section class="login-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-11">

                <div class="login-wrapper">

                    <div class="row g-0">

                        <!-- =======================================
                             LEFT SIDE
                        ======================================== -->

                        <div class="col-lg-6 p-0">

                            <div class="login-left">

                                <img src="<?= base_url('assets/images/login.jpg'); ?>" class="login-image"
                                    alt="FitLife Gym">

                                <div class="login-overlay"></div>

                                <div class="login-content">

                                    <h2>

                                        WELCOME <span> BACK!</span>

                                    </h2>

                                    <p>

                                        Login to your account to manage your profile,
                                        memberships, subscriptions and more.

                                    </p>

                                    <div class="login-features">

                                        <div class="feature">

                                            <i class="bi bi-shield-check"></i>

                                            <span>Secure Login</span>

                                        </div>

                                        <div class="feature">

                                            <i class="bi bi-person-circle"></i>

                                            <span>Manage Profile</span>

                                        </div>

                                        <div class="feature">

                                            <i class="bi bi-credit-card"></i>

                                            <span>Easy Payments</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- =======================================
                             RIGHT SIDE
                        ======================================== -->

                        <div class="col-lg-6 p-0">

                            <div class="login-right">

                                <?php if (session()->getFlashdata('success')): ?>

                                    <div class="alert alert-success">

                                        <?= session()->getFlashdata('success'); ?>

                                    </div>

                                <?php endif; ?>

                                <?php if (session()->getFlashdata('error')): ?>

                                    <div class="alert alert-danger">

                                        <?= session()->getFlashdata('error'); ?>

                                    </div>

                                <?php endif; ?>

                                <h4>
                                    LOGIN
                                </h4>

                                <p class="text-muted mb-4">
                                    Login using your registered email and password.
                                </p>

                                <!-- Login Form -->

                                <form action="<?= base_url('/login'); ?>" method="post">

                                    <!-- Email -->

                                    <div class="mb-3">

                                        <label>

                                            Email

                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">

                                                <i class="bi bi-person"></i>

                                            </span>

                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter your email">
                                        </div>

                                    </div>

                                    <!-- Password -->

                                    <div class="mb-3">

                                        <label>

                                            Password

                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">

                                                <i class="bi bi-lock"></i>

                                            </span>

                                            <input type="password" id="loginPassword" name="password"
                                                class="form-control" placeholder="Enter your password">

                                            <span class="input-group-text toggle-password" data-target="loginPassword">

                                                <i class="bi bi-eye"></i>

                                            </span>

                                        </div>

                                    </div>

                                    <!-- Button -->

                                    <button type="submit" class="login-btn">

                                        LOGIN

                                    </button>

                                </form>

                                <hr>

                                <div class="register-link">

                                    Don't have an account?

                                    <a href="<?= base_url('register'); ?>">

                                        Register Here

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

    const memberBtn = document.getElementById("memberBtn");
    const adminBtn = document.getElementById("adminBtn");
    const roleInput = document.getElementById("role");

    memberBtn.addEventListener("click", function () {

        memberBtn.classList.add("active");
        adminBtn.classList.remove("active");

        roleInput.value = "member";

    });

    adminBtn.addEventListener("click", function () {

        adminBtn.classList.add("active");
        memberBtn.classList.remove("active");

        roleInput.value = "admin";

    });

</script>

<?= $this->include('layouts/footer'); ?>