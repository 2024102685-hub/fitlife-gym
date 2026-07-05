<?= $this->extend('member/layout'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('success')): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        <strong>Success!</strong>
        <?= session()->getFlashdata('success'); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

    </div>

<?php endif; ?>

<div class="container-fluid">

    <div class="row g-4">

        <!-- ==========================================
             PERSONAL INFORMATION
        ========================================== -->

        <div class="col-lg-6 d-flex">

            <div class="card profile-card shadow-sm border-0 w-100">

                <div class="card-header">

                    <h5>

                        <i class="bi bi-person-circle me-2"></i>

                        Personal Information

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

                </div>

            </div>

        </div>

        <!-- ==========================================
             SUBSCRIPTION DETAILS
        ========================================== -->

        <div class="col-lg-6 d-flex">

            <div class="card profile-card shadow-sm border-0 w-100">

                <div class="card-header">

                    <h5>

                        <i class="bi bi-card-checklist me-2"></i>

                        Subscription Details

                    </h5>

                </div>

                <div class="card-body profile-body">

                    <div class="profile-item">

                        <label>Status</label>

                        <?php $status = strtolower($member['membership_status']); ?>

                        <span class="status-badge
                            <?= ($status == 'active') ? 'status-active' : ''; ?>
                            <?= ($status == 'pending') ? 'status-pending' : ''; ?>
                            <?= ($status == 'expired') ? 'status-expired' : ''; ?>">

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

                        <label>Registration Date</label>

                        <span>

                            <?= date('d M Y', strtotime($member['registration_date'])); ?>

                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ==========================================
         PAYMENT HISTORY
    ========================================== -->

    <div class="row mt-4">

        <div class="col-12">

            <div class="card profile-card shadow-sm border-0">

                <div class="card-header">

                    <h5>

                        <i class="bi bi-credit-card me-2"></i>

                        Payment History

                    </h5>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead>

                                <tr>

                                    <th>Payment ID</th>

                                    <th>Payment Date</th>

                                    <th>Payment Method</th>

                                    <th>Amount (RM)</th>

                                    <th>Status</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php if (empty($payments)): ?>

                                    <tr>

                                        <td colspan="5" class="text-center text-muted py-5">

                                            <i class="bi bi-credit-card fs-1 d-block mb-3"></i>

                                            No payment history available.

                                        </td>

                                    </tr>

                                <?php else: ?>

                                    <?php foreach ($payments as $payment): ?>

                                        <tr>

                                            <td>

                                                <?= esc($payment['payment_id']); ?>

                                            </td>

                                            <td>

                                                <?= date('d M Y', strtotime($payment['payment_date'])); ?>

                                            </td>

                                            <td>

                                                <?= esc($payment['payment_method']); ?>

                                            </td>

                                            <td>

                                                RM <?= number_format($payment['amount'], 2); ?>

                                            </td>

                                            <td>

                                                <?php if ($payment['payment_status'] == 'Paid'): ?>

                                                    <span class="badge-paid">

                                                        Paid

                                                    </span>

                                                <?php else: ?>

                                                    <span class="badge-pending">

                                                        Pending

                                                    </span>

                                                <?php endif; ?>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>