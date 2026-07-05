<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="dashboard-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3>Manage Members</h3>

        <div class="d-flex gap-2">

            <input type="text" class="form-control" placeholder="Search member..." style="width:250px;">

            <select class="form-select" style="width:180px;">

                <option>All Members</option>
                <option>Active</option>
                <option>Pending</option>

            </select>

        </div>

    </div>

    <div class="table-responsive">

        <table class="table align-middle table-hover">

            <thead>

                <tr>

                    <th>Member ID</th>

                    <th>Full Name</th>

                    <th>Email</th>

                    <th>Plan</th>

                    <th>Status</th>

                    <th width="180">Action</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach ($members as $member): ?>

                    <tr>

                        <td>
                            <?= esc($member['member_id']) ?>
                        </td>

                        <td>
                            <?= esc($member['full_name']) ?>
                        </td>

                        <td>
                            <?= esc($member['email']) ?>
                        </td>

                        <td>

                            <?= empty($member['plan_id']) ? '-' : esc($member['plan_id']) ?>

                        </td>

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

                        <td>

                            <a href="<?= base_url('/admin/member/view/' . $member['member_id']); ?>"
                                class="btn btn-sm btn-primary">

                                <i class="bi bi-eye"></i>

                                View

                            </a>

                            <a href="#" class="btn btn-sm btn-warning">

                                <i class="bi bi-pencil"></i>

                                Edit

                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<?= $this->endSection(); ?>