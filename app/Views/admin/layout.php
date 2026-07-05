<?php

$data['css'] = 'admin.css';

echo view('layouts/header', $data);

$current = service('uri')->getSegment(2);

?>

<style>
    body {
        padding-top: 0;
    }
</style>

<section class="admin-dashboard">

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

                    <a href="<?= base_url('/admin/dashboard'); ?>">

                        <i class="bi bi-house-door"></i>

                        Dashboard

                    </a>

                </li>

                <!-- Manage Members-->

                <li class="<?= ($current == 'members') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/admin/members'); ?>">

                        <i class="bi bi-person"></i>

                        Manage Members

                    </a>

                </li>

                <!-- Revenue Report -->

                <li class="<?= ($current == 'revenue') ? 'active' : ''; ?>">

                    <a href="<?= base_url('/admin/revenue'); ?>">

                        <i class="bi bi-bar-chart"></i>

                        Revenue Report

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

                        Hello, Admin!

                    </h2>

                </div>

                <div class="user-info">

                    <i class="bi bi-bell"></i>

                    <div>

                        <small>

                            Logged in as Administrator

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