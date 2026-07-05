<?= $this->include('layouts/header'); ?>

<?php

$data['css'] = 'member.css';

echo view('layouts/header', $data);

$current = service('uri')->getSegment(2);

?>

<style>
    body {
        padding-top: 0;
    }
</style>

<section class="member-dashboard">

    <div class="dashboard-container">

        <!-- =========================
             MEMBER SIDEBAR
        ========================== -->

        <aside class="sidebar">

            <div class="sidebar-logo">

                <img src="<?= base_url('assets/images/logo.png'); ?>" alt="FitLife Gym">

                <div>

                    <h4>FitLife Gym</h4>

                    <span>Stronger Every Day</span>

                </div>

            </div>

            <ul class="sidebar-menu">

                <!-- Dashboard -->

                <li class="<?= ($current == 'dashboard') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/member/dashboard'); ?>">

                        <i class="bi bi-house-door"></i>

                        Dashboard

                    </a>

                </li>

                <!-- View Profile -->

                <li class="<?= ($current == 'profile') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/member/profile'); ?>">

                        <i class="bi bi-person"></i>

                        View Profile

                    </a>

                </li>

                <!-- Update Profile -->

                <li class="<?= ($current == 'update') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/member/update'); ?>">

                        <i class="bi bi-pencil-square"></i>

                        Update Profile

                    </a>

                </li>

                <!-- Subscription -->

                <li class="<?= ($current == 'subscription') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/member/subscription'); ?>">

                        <i class="bi bi-card-list"></i>

                        Subscription Plans

                    </a>

                </li>

                <!-- Payment -->

                <li class="<?= ($current == 'payment') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/member/payment'); ?>">

                        <i class="bi bi-credit-card"></i>

                        Payment

                    </a>

                </li>

                <!-- Logout -->

                <li class="logout">

                    <a href="<?= base_url('/logout'); ?>">

                        <i class="bi bi-box-arrow-right"></i>

                        Logout

                    </a>

                </li>

            </ul>

        </aside>

        <!-- =========================
             MAIN CONTENT
        ========================== -->

        <main class="dashboard-content">

            <!-- =========================
                 TOP BAR
            ========================== -->

            <div class="topbar">

                <div>

                    <h2>

                        Hello, <?= esc(session('full_name')); ?> !

                    </h2>

                </div>

                <div class="user-info">

                    <i class="bi bi-bell"></i>

                    <div>

                        <small>

                            Logged in as Member

                        </small>

                    </div>

                </div>

            </div>

            <!-- =========================
                 PAGE CONTENT
            ========================== -->

            <?= $this->renderSection('content'); ?>

        </main>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>