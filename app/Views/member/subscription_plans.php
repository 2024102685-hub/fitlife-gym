<?= $this->extend('member/layout'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('success')): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        <strong>Success!</strong>

        <?= session()->getFlashdata('success'); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

    </div>

<?php endif; ?>

<!-- ==========================================
     MEMBERSHIP PLANS
========================================== -->

<div class="row g-4">

    <?php foreach ($plans as $plan): ?>

        <div class="col-lg-4 col-md-6 d-flex">

            <div class="membership-card <?= ($plan['plan_name'] == 'Premium') ? 'premium-card' : ''; ?>">

                <?php if ($plan['plan_name'] == 'Premium'): ?>

                    <div class="popular-badge">
                        Most Popular
                    </div>

                <?php endif; ?>

                <!-- Plan Title -->
                <div>

                    <h3>
                        <?= esc($plan['plan_name']); ?> Plan
                    </h3>

                    <h1>
                        RM<?= number_format($plan['price'], 0); ?>
                    </h1>

                    <span class="plan-duration">
                        <?= esc($plan['duration']); ?>
                    </span>

                    <hr>

                    <ul class="plan-features">

                        <?php if ($plan['plan_name'] == 'Basic'): ?>

                            <li><i class="bi bi-check-circle"></i> Gym Access Only</li>

                            <li><i class="bi bi-x-circle"></i> Group Classes</li>

                            <li><i class="bi bi-x-circle"></i> Personal Trainer</li>

                        <?php elseif ($plan['plan_name'] == 'Standard'): ?>

                            <li><i class="bi bi-check-circle"></i> Gym Access</li>

                            <li><i class="bi bi-check-circle"></i> Group Classes</li>

                            <li><i class="bi bi-x-circle"></i> Personal Trainer</li>

                        <?php else: ?>

                            <li><i class="bi bi-check-circle"></i> Unlimited Gym Access</li>

                            <li><i class="bi bi-check-circle"></i> Group Classes</li>

                            <li><i class="bi bi-check-circle"></i> Personal Trainer</li>

                        <?php endif; ?>

                    </ul>

                </div>

                <!-- Button -->
                <form action="<?= base_url('/member/select-plan'); ?>" method="post" class="mt-3">

                    <input type="hidden" name="plan_id" value="<?= esc($plan['plan_id']); ?>">

                    <?php if ($member['plan_id'] == $plan['plan_id']): ?>

                        <button type="button" class="btn btn-selected w-100" disabled>

                            <i class="bi bi-check-circle-fill me-2"></i>

                            Current Plan

                        </button>

                    <?php else: ?>

                        <button type="submit" class="btn btn-select w-100">

                            Choose <?= esc($plan['plan_name']); ?> Plan

                        </button>

                    <?php endif; ?>

                </form>

            </div>

        </div>

    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>