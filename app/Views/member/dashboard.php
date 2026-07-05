<?= $this->extend('member/layout'); ?>

<?= $this->section('content'); ?>

<!-- ==========================================
     MEMBER DASHBOARD SUMMARY
========================================== -->

<div class="row mt-4">

    <!-- ==========================================
         Member ID Card
    ========================================== -->

    <div class="col-md-3">

        <div class="dashboard-card">

            <h6>Member ID</h6>

            <h4>

                <?= esc($member['member_id']); ?>

            </h4>

        </div>

    </div>

    <!-- Membership Status -->

    <div class="col-md-3">

        <div class="dashboard-card">

            <h6>Membership Status</h6>

            <?php $status = strtolower($member['membership_status']); ?>

            <div class="mt-3">

                <span class="status-badge
                <?= ($status == 'active') ? 'status-active' : ''; ?>
                <?= ($status == 'pending') ? 'status-pending' : ''; ?>
                <?= ($status == 'expired') ? 'status-expired' : ''; ?>">

                    <?= esc($member['membership_status']); ?>

                </span>

            </div>

        </div>

    </div>

    <!-- ==========================================
         Current Membership Plan
    ========================================== -->

    <div class="col-md-3">

        <div class="dashboard-card">

            <h6>Current Plan</h6>

            <h4>

                <?= empty($plan) ? 'Not Selected' : esc($plan['plan_name']); ?>

            </h4>

        </div>

    </div>

    <!-- ==========================================
         Registration Date
    ========================================== -->

    <div class="col-md-3">

        <div class="dashboard-card">

            <h6>Registration Date</h6>

            <h4>

                <?= date('d M Y', strtotime($member['registration_date'])); ?>

            </h4>

        </div>

    </div>

    <div class="row mt-4">

        <!-- Membership Summary -->

        <div class="col-lg-6">

            <div class="dashboard-card h-100">

                <h4 class="mb-4">Membership Summary</h4>

                <table class="table table-borderless">

                    <tr>

                        <td><strong>Full Name</strong></td>

                        <td>
                            <?= esc($member['full_name']); ?>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>Email</strong></td>

                        <td>
                            <?= esc($member['email']); ?>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>Phone Number</strong></td>

                        <td>
                            <?= esc($member['phone_number']); ?>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>Membership Plan</strong></td>

                        <td>

                            <?= empty($plan) ? 'Not Selected' : esc($plan['plan_name']); ?>

                        </td>

                    </tr>

                    <tr>

                        <td><strong>Registration Date</strong></td>

                        <td>

                            <?= date('d M Y', strtotime($member['registration_date'])); ?>

                        </td>

                    </tr>

                </table>

            </div>

        </div>

        <!-- Quick Links -->

        <div class="col-lg-6">

            <div class="dashboard-card h-100">

                <h4 class="mb-4">

                    Quick Links

                </h4>

                <div class="row g-3">

                    <div class="col-6">

                        <a href="<?= base_url('member/profile'); ?>" class="quick-link">

                            <i class="bi bi-person"></i>

                            <h6>View Profile</h6>

                            <small>View your personal information</small>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="<?= base_url('member/update'); ?>" class="quick-link">

                            <i class="bi bi-pencil-square"></i>

                            <h6>Update Profile</h6>

                            <small>Update your personal information</small>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="<?= base_url('member/subscription'); ?>" class="quick-link">

                            <i class="bi bi-card-list"></i>

                            <h6>Subscription Plans</h6>

                            <small>Choose Subscription plan</small>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="<?= base_url('member/payment'); ?>" class="quick-link">

                            <i class="bi bi-credit-card"></i>

                            <h6>Payment</h6>

                            <small>Manage your membership payment</small>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>