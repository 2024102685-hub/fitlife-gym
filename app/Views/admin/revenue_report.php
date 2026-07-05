<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold mb-0">

        Revenue Report

    </h2>

</div>

<!-- ==========================
     SUMMARY CARDS
========================== -->

<div class="row g-4 mb-4">

    <div class="col-lg-3">

        <div class="dashboard-card">

            <h6>Total Revenue</h6>

            <h3 class="text-success">

                RM <?= number_format($totalRevenue,2); ?>

            </h3>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <h6>Total Payments</h6>

            <h3>

                <?= $totalPayments; ?>

            </h3>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <h6>Average Payment</h6>

            <h3>

                RM <?= number_format($averagePayment,2); ?>

            </h3>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <h6>Paid Transactions</h6>

            <h3>

                <?= $paidTransactions; ?>

            </h3>

        </div>

    </div>

</div>

<!-- ==========================
     PAYMENT HISTORY
========================== -->

<div class="dashboard-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h4 class="mb-0">

            Payment History

        </h4>

    </div>

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead>

                <tr>

                    <th>Payment ID</th>

                    <th>Member</th>

                    <th>Plan</th>

                    <th>Method</th>

                    <th>Amount</th>

                    <th>Date</th>

                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($payments as $payment): ?>

                <tr>

                    <td>

                        <?= esc($payment['payment_id']); ?>

                    </td>

                    <td>

                        <?= esc($payment['full_name']); ?>

                    </td>

                    <td>

                        <?= esc($payment['plan_name']); ?>

                    </td>

                    <td>

                        <?= esc($payment['payment_method']); ?>

                    </td>

                    <td>

                        RM <?= number_format($payment['amount'],2); ?>

                    </td>

                    <td>

                        <?= date('d M Y',strtotime($payment['payment_date'])); ?>

                    </td>

                    <td>

                        <?php if($payment['payment_status']=="Paid"): ?>

                            <span class="badge bg-success">

                                Paid

                            </span>

                        <?php else: ?>

                            <span class="badge bg-danger">

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

<?= $this->endSection(); ?>