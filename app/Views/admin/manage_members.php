<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('success')): ?>

    <div class="alert alert-success alert-dismissible fade show">

        <?= session()->getFlashdata('success'); ?>

        <button class="btn-close" data-bs-dismiss="alert"></button>

    </div>

<?php endif; ?>

<div class="dashboard-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3>Manage Members</h3>

    </div>

    <!-- Search & Filter -->
    <form method="get" action="<?= base_url('/admin/members'); ?>">

        <div class="row mb-4">

            <div class="col-md-6">

                <input type="text" name="search" class="form-control" placeholder="Search Member ID or Name..."
                    value="<?= esc($_GET['search'] ?? '') ?>">

            </div>

            <div class="col-md-3">

                <select name="status" class="form-select">

                    <option value="">All Status</option>

                    <option value="Active" <?= (($_GET['status'] ?? '') == 'Active') ? 'selected' : ''; ?>>

                        Active

                    </option>

                    <option value="Pending" <?= (($_GET['status'] ?? '') == 'Pending') ? 'selected' : ''; ?>>

                        Pending

                    </option>

                </select>

            </div>

            <div class="col-md-2">

                <button type="submit" class="btn btn-warning search-btn">

                    <i class="bi bi-search me-2"></i>

                    Search

                </button>

            </div>

        </div>

    </form>

    <!-- Members Table -->

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th>Member ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Status</th>

                <th width="180">Action</th>

            </tr>

        </thead>

        <tbody>

            <?php foreach ($members as $member): ?>

                <tr>

                    <td>
                        <?= esc($member['member_id']); ?>
                    </td>

                    <td>
                        <?= esc($member['full_name']); ?>
                    </td>

                    <td>
                        <?= esc($member['email']); ?>
                    </td>

                    <td>

                        <?php if ($member['membership_status'] == "Active"): ?>

                            <span class="badge bg-success">

                                Active

                            </span>

                        <?php else: ?>

                            <span class="badge bg-danger">

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

                        <a href="<?= base_url('/admin/member/edit/' . $member['member_id']); ?>"
                            class="btn btn-sm btn-dark text-white">

                            <i class="bi bi-pencil"></i>

                            Edit
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection(); ?>