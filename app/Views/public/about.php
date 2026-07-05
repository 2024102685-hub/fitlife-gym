<?php

$data = [
'active' => 'about',
'css'    => 'about.css' ];

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<!-- ==========================================================
     ABOUT STORY
     Purpose:
     Display FitLife Gym story.
========================================================== -->

<section class="about-story">

    <div class="container">

        <div class="about-wrapper">

        <div class="row align-items-center">

            <!-- About Image -->

            <div class="col-lg-6 mb-4">

                <img src="<?= base_url('assets/images/about.jpg'); ?>" class="img-fluid about-image" alt="FitLife Gym">

            </div>

            <!-- About Content -->

            <div class="col-lg-6">

                <div class="story-card">

                    <h2>

                        OUR STORY

                    </h2>

                    <div class="orange-line"></div>

                    <p>

                        FitLife Gym was established with a passion for helping
                        individuals achieve healthier and stronger lifestyles.
                        Our mission is to provide a welcoming environment equipped
                        with modern fitness facilities, professional trainers,
                        and flexible membership plans suitable for everyone.

                    </p>

                    <p>

                        Whether you are a beginner or an experienced athlete,
                        FitLife Gym is committed to supporting your fitness
                        journey through quality service, expert guidance,
                        and a positive community.

                    </p>

                </div>

            </div>

        </div>
        </div>

    </div>

</section>

<!-- ==========================================================
     VISION & MISSION
     Purpose:
     Display FitLife Gym vision and mission.
========================================================== -->

<section class="vision-mission">

    <div class="container">

        <div class="row g-4">

            <!-- =======================
                 VISION
            ======================== -->

            <div class="col-lg-6">

                <div class="vm-card">

                    <h3>

                        OUR VISION

                    </h3>

                    <p>

                        To become a leading fitness centre that inspires healthier
                        lifestyles and builds a stronger community through
                        quality fitness services.

                    </p>

                </div>

            </div>

            <!-- =======================
                 MISSION
            ======================== -->

            <div class="col-lg-6">

                <div class="vm-card">

                    <h3>

                        OUR MISSION

                    </h3>

                    <p>

                        To provide modern fitness facilities, professional trainers,
                        affordable membership plans and excellent customer service
                        to help members achieve their fitness goals.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>