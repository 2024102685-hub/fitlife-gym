<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="row g-4">

    <!-- Total Members -->
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>

                Total Members

            </h6>

            <h3><?= $totalMembers ?></h3>
        </div>
    </div>

    <!-- Active Members -->
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>

                Active Members

            </h6>

            <h3><?= $activeMembers ?></h3>
        </div>
    </div>

    <!-- Pending Members -->
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>

                Pending Members

            </h6>

            <h3><?= $pendingMembers ?></h3>
        </div>
    </div>

    <!-- Revenue -->
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>

                Total Revenue

            </h6>

            <h3>RM <?= number_format($totalRevenue, 2) ?></h3>
        </div>
    </div>

</div>

<div class="row mt-4">

    <!-- Recent Members -->
    <div class="col-lg-6">

        <div class="dashboard-card h-100">

            <h4 class="mb-4">Recent Members</h4>

            <table class="table">

                <thead>

                    <tr>

                        <th>Member ID</th>

                        <th>Name</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($recentMembers as $member): ?>

                        <tr>

                            <td><?= esc($member['member_id']) ?></td>

                            <td><?= esc($member['full_name']) ?></td>

                            <td>

                                <?php if ($member['membership_status'] == "Active"): ?>

                                    <span class="status-badge status-active">
                                        Active
                                    </span>

                                <?php else: ?>

                                    <span class="status-badge status-pending">
                                        Pending
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

    <!-- Recent Payments -->

    <div class="col-lg-6">

        <div class="dashboard-card h-100">

            <h4 class="mb-4">Recent Payments</h4>

            <table class="table">

                <thead>

                    <tr>

                        <th>Payment ID</th>

                        <th>Amount</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($recentPayments as $payment): ?>

                        <tr>

                            <td><?= esc($payment['payment_id']) ?></td>

                            <td>RM <?= number_format($payment['amount'], 2) ?></td>

                            <td>

                                <span class="badge bg-success">

                                    Paid

                                </span>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>