<?php

$data = [
'active' => 'policy',
'css'    => 'policy.css' ];

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<!-- ==========================================================
     WEBSITE POLICY
     Purpose:
     Display Website Policy information.
========================================================== -->

<section class="policy-section">

    <div class="container">

        <div class="text-center mb-5">

            <h1>

                WEBSITE POLICY

            </h1>

            <p>

                FitLife Gym is committed to protecting your privacy and
                providing a safe, secure and trustworthy experience.

            </p>

        </div>

        <div class="row g-4 mt-4">

            <!-- Privacy Policy -->

            <div class="col-lg-6">

                <div class="policy-card">

                    <div class="policy-header">

                        <h3>

                            PRIVACY POLICY

                        </h3>

                    </div>

                    <ul>

                        <li>We are committed to protecting your personal information and respecting your privacy.</li>

                        <li>We collect personal information only when you register as a member or use our services.</li>

                        <li>Your information will not be shared with third parties without your consent.</li>

                        <li>We use your information to provide and improve our services.</li>

                        <li>We take appropriate security measures to protect your data from unauthorized access.</li>

                    </ul>

                    <div class="policy-note">

                        <i class="bi bi-info-circle"></i>

                        By using our website, you agree to the terms of this Privacy Policy.

                    </div>

                </div>

            </div>

            <!-- Terms & Conditions -->

            <div class="col-lg-6">

                <div class="policy-card">

                    <div class="policy-header">

                        <h3>

                            TERMS & CONDITIONS

                        </h3>

                    </div>

                    <ul>

                        <li>Please read the following terms carefully before using our website and services.</li>

                        <li>Membership is valid only after successful registration and payment.</li>

                        <li>Members must provide accurate and up-to-date information.</li>

                        <li>Payments are non-refundable once the transaction is completed.</li>

                        <li>Members must comply with gym rules and regulations at all times.</li>

                    </ul>

                    <div class="policy-note">

                        <i class="bi bi-info-circle"></i>

                        By using our website, you agree to be bound by these Terms & Conditions.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>