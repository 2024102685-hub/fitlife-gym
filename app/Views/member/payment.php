<?= $this->extend('member/layout'); ?>

<?= $this->section('content'); ?>

<div class="row g-4">

    <!-- Current Plan -->
    <div class="col-md-4">
        <div class="dashboard-card">

            <div>

                <small>Current Plan</small>

                <h5>
                    <?= esc($plan['plan_name']); ?> Plan
                </h5>

                <strong>

                    RM
                    <?= number_format($plan['price'], 2); ?>

                </strong>

            </div>

        </div>

    </div>

    <!-- Duration -->
    <div class="col-md-4">
        <div class="dashboard-card">

            <div>

                <small>Membership Duration</small>

                <h5>
                    <?= esc($plan['duration']); ?>
                </h5>

            </div>

        </div>

    </div>

    <!-- Status -->
    <div class="col-md-4">
        <div class="dashboard-card">

            <div>

                <small>Current Status</small>

                <?php if ($member['membership_status'] == 'Active'): ?>

                    <span class="status-badge status-active">

                        Active

                    </span>

                <?php elseif ($member['membership_status'] == 'Pending'): ?>

                    <span class="status-badge status-pending">

                        Pending

                    </span>

                <?php else: ?>

                    <span class="status-badge">

                        <?= esc($member['membership_status']); ?>

                    </span>

                <?php endif; ?>

            </div>

        </div>

    </div>

    <!-- ==========================================
                 MAKE PAYMENT
    ========================================== -->

    <div class="col-lg-12">

        <div class="card payment-card">

            <div class="card-header">

                <h5>

                    <i class="bi bi-credit-card me-2"></i>

                    Make Payment

                </h5>

            </div>

            <div class="card-body">

                <form action="<?= base_url('/member/payment/save'); ?>" method="post">

                    <div class="row">

                        <!-- LEFT -->
                        <div class="col-lg-6">

                            <div class="mb-4">

                                <label class="form-label">
                                    Subscription Plan
                                </label>

                                <input type="text" class="form-control readonly"
                                    value="<?= esc($plan['plan_name']); ?> Plan" readonly>

                            </div>

                            <div class="mb-4">

                                <label class="form-label">
                                    Amount
                                </label>

                                <input type="text" class="form-control readonly"
                                    value="RM <?= number_format($plan['price'], 2); ?>" readonly>

                            </div>

                        </div>

                        <!-- RIGHT -->
                        <div class="col-lg-6">

                            <label class="form-label fw-bold mb-3">

                                Payment Method

                            </label>

                            <label class="payment-option">

                                <input type="radio" name="payment_method" value="FPX">

                                <div class="payment-info">

                                    <h6>FPX (Online Banking)</h6>

                                    <small>Fast and secure online payment</small>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input type="radio" name="payment_method" value="Credit / Debit Card">

                                <div class="payment-info">

                                    <h6>Credit / Debit Card</h6>

                                    <small>Visa & Mastercard</small>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input type="radio" name="payment_method" value="E-Wallet">

                                <div class="payment-info">

                                    <h6>E-Wallet</h6>

                                    <small>Touch 'n Go eWallet / GrabPay</small>

                                </div>

                            </label>

                            <button type="submit" class="btn btn-warning w-100 mt-3">

                                Proceed Payment

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>