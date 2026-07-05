<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold mb-0">
        Edit Member
    </h2>

    <a href="<?= base_url('/admin/members'); ?>" class="btn btn-dark">
        <i class="bi bi-arrow-left me-2"></i>
        Back to Manage
    </a>

</div>

<form action="<?= base_url('/admin/member/update/' . $member['member_id']); ?>" method="post">

    <div class="card profile-card shadow-sm border-0">

        <div class="card-header">

            <h5>

                <i class="bi bi-pencil-square me-2"></i>

                Edit Member Information

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <!-- Member ID -->
                <div class="col-12 mb-4">

                    <label class="form-label fw-semibold">
                        Member ID
                    </label>

                    <input type="text" class="form-control" value="<?= esc($member['member_id']); ?>" readonly>

                </div>

                <!-- Full Name -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Full Name
                    </label>

                    <input type="text" name="full_name" class="form-control" value="<?= esc($member['full_name']); ?>"
                        required>

                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Email Address
                    </label>

                    <input type="email" name="email" class="form-control" value="<?= esc($member['email']); ?>"
                        required>

                </div>

                <!-- IC -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        IC Number
                    </label>

                    <input type="text" class="form-control" value="<?= esc($member['ic_number']); ?>" readonly>

                </div>

                <!-- Phone -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Phone Number
                    </label>

                    <input type="text" name="phone_number" class="form-control"
                        value="<?= esc($member['phone_number']); ?>">

                </div>

                <!-- Gender -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Gender
                    </label>

                    <input type="text" class="form-control" value="<?= esc($member['gender']); ?>" readonly>

                </div>

                <!-- Registration Date -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Registration Date
                    </label>

                    <input type="text" class="form-control"
                        value="<?= date('d M Y', strtotime($member['registration_date'])); ?>" readonly>

                </div>

            </div>

            <hr class="my-4">

            <h5 class="mb-4">

                <i class="bi bi-card-checklist me-2 text-warning"></i>

                Membership Details

            </h5>

            <div class="row">

                <!-- Membership Plan -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Membership Plan
                    </label>

                    <select name="plan_id" class="form-select">

                        <?php foreach ($plans as $plan): ?>

                            <option value="<?= $plan['plan_id']; ?>" <?= ($member['plan_id'] == $plan['plan_id']) ? 'selected' : ''; ?>>

                                <?= esc($plan['plan_name']); ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <!-- Membership Status -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Membership Status
                    </label>

                    <select name="membership_status" class="form-select">

                        <option value="Pending" <?= ($member['membership_status'] == 'Pending') ? 'selected' : ''; ?>>

                            Pending

                        </option>

                        <option value="Active" <?= ($member['membership_status'] == 'Active') ? 'selected' : ''; ?>>

                            Active

                        </option>

                    </select>

                </div>

            </div>

            <div class="d-flex justify-content-end mt-4">

                <button type="submit" class="btn btn-warning px-5">

                    <i class="bi bi-check-circle me-2"></i>

                    Save Changes

                </button>

            </div>

        </div>

    </div>

</form>

<?= $this->endSection(); ?>