<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<!-- =========================
     PAGE HEADER
========================= -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold mb-0">

        View Member

    </h2>

    <a href="<?= base_url('/admin/members'); ?>" class="btn btn-dark">

        <i class="bi bi-arrow-left"></i>

        Back to Manage

    </a>

</div>

<div class="container-fluid">

    <div class="row g-4">

    <!-- =========================
         MEMBER INFORMATION
    ========================== -->

    <div class="col-lg-6 d-flex">

        <div class="card profile-card shadow-sm border-0 w-100">

            <div class="card-header">

                <h5>

                    <i class="bi bi-person-circle me-2"></i>

                    Member Information

                </h5>

            </div>

            <div class="card-body profile-body">

                <div class="profile-item">

                    <label>Member ID</label>

                    <span><?= esc($member['member_id']); ?></span>

                </div>

                <div class="profile-item">

                    <label>Full Name</label>

                    <span><?= esc($member['full_name']); ?></span>

                </div>

                <div class="profile-item">

                    <label>IC Number</label>

                    <span><?= esc($member['ic_number']); ?></span>

                </div>

                <div class="profile-item">

                    <label>Email Address</label>

                    <span><?= esc($member['email']); ?></span>

                </div>

                <div class="profile-item">

                    <label>Phone Number</label>

                    <span><?= esc($member['phone_number']); ?></span>

                </div>

                <div class="profile-item">

                    <label>Gender</label>

                    <span><?= esc($member['gender']); ?></span>

                </div>

                <div class="profile-item">

                    <label>Registration Date</label>

                    <span><?= date('d M Y', strtotime($member['registration_date'])); ?></span>

                </div>

            </div>

        </div>

    </div>

    <!-- =========================
         MEMBERSHIP DETAILS
    ========================== -->

    <div class="col-lg-6 d-flex">

        <div class="card profile-card shadow-sm border-0 w-100">

            <div class="card-header">

                <h5>

                    <i class="bi bi-card-checklist me-2"></i>

                    Membership

                </h5>

            </div>

            <div class="card-body profile-body">

                <div class="profile-item">

                    <label>Status</label>

                    <?php $status = strtolower($member['membership_status']); ?>

                    <span class="status-badge
                    <?= ($status == 'active') ? 'status-active' : ''; ?>
                    <?= ($status == 'pending') ? 'status-pending' : ''; ?>">

                        <?= esc($member['membership_status']); ?>

                    </span>

                </div>

                <div class="profile-item">

                    <label>Current Plan</label>

                    <span>

                        <?= empty($plan) ? 'Not Selected' : esc($plan['plan_name']); ?>

                    </span>

                </div>

                <div class="profile-item">

                    <label>Subscription Date</label>

                    <span>

                        <?= !empty($payment)
                            ? date('d M Y', strtotime($payment['payment_date']))
                            : '-'; ?>

                    </span>

                </div>

                <div class="profile-item">

                    <label>Payment Method</label>

                    <span>

                        <?= !empty($payment)
                            ? esc($payment['payment_method'])
                            : '-'; ?>

                    </span>

                </div>

                <div class="profile-item">

                    <label>Amount Paid</label>

                    <span>

                        <?= !empty($payment)
                            ? 'RM ' . number_format($payment['amount'], 2)
                            : '-'; ?>

                    </span>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>