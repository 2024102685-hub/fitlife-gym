<?= $this->extend('member/layout'); ?>

<?= $this->section('content'); ?>

<!-- ==========================================
     UPDATE PROFILE
========================================== -->

<div class="row">

    <div class="col-12">

        <div class="card profile-card">

            <div class="card-header">

                <h5>

                    <i class="bi bi-pencil-square"></i>

                    Update Personal Information

                </h5>

            </div>

            <div class="profile-body">

                <form action="<?= base_url('/member/update/save'); ?>" method="post">

                    <div class="row">

                        <!-- Full Name -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">Full Name</label>

                            <input type="text" name="full_name" class="form-control"
                                value="<?= esc($member['full_name']); ?>" required>

                        </div>

                        <!-- Member ID -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">Member ID</label>

                            <input type="text" class="form-control readonly" value="<?= esc($member['member_id']); ?>"
                                readonly>

                        </div>

                        <!-- IC Number -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">IC Number</label>

                            <input type="text" name="ic_number" class="form-control"
                                value="<?= esc($member['ic_number']); ?>" required>

                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">Email</label>

                            <input type="email" class="form-control readonly" value="<?= esc($member['email']); ?>"
                                readonly>

                        </div>

                        <!-- Phone Number -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">Phone Number</label>

                            <input type="text" name="phone_number" class="form-control"
                                value="<?= esc($member['phone_number']); ?>" required>

                        </div>

                        <!-- Registration Date -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label">Registration Date</label>

                            <input type="text" class="form-control readonly"
                                value="<?= date('d M Y', strtotime($member['registration_date'])); ?>" readonly>

                        </div>

                    </div>

                    <div class="text-end mt-3">

                        <button type="submit" class="btn btn-warning text-white px-4 ms-2">

                            Update Profile

                        </button>

                        <a href="<?= base_url('/member/profile'); ?>" class="btn btn-light px-4">

                            Cancel

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>