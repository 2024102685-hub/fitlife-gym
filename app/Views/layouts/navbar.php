<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">

    <div class="container">

        <!-- ==========================================================
             WEBSITE LOGO
             Purpose:
             Display FitLife Gym logo and website branding.
        ========================================================== -->

        <a class="navbar-brand d-flex align-items-center" href="<?= base_url(); ?>">

            <img src="<?= base_url('assets/images/logo.png'); ?>" class="logo-img me-3" alt="FitLife Gym Logo">

            <div>

                <h3 class="logo-title mb-0">FitLife Gym</h3>

                <small class="logo-tagline">
                    Stronger Every Day
                </small>

            </div>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link <?= ($active == 'home') ? 'active' : ''; ?>" href="<?= base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($active == 'about') ? 'active' : ''; ?>" href="<?= base_url('about'); ?>">
                        About Us
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($active == 'trainer') ? 'active' : ''; ?>"
                        href="<?= base_url('trainer'); ?>">
                        Trainers Directory
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($active == 'policy') ? 'active' : ''; ?>" href="<?= base_url('policy'); ?>">
                        Website Policy
                    </a>
                </li>

            </ul>

            <a href="<?= base_url('login'); ?>" class="btn btn-outline-dark">

                <i class="bi bi-person"></i>

                Login

            </a>
        </div>

    </div>

</nav>