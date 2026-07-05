<?php

$data['active'] = 'home';
$data['css'] = 'home.css';

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<!-- ======================================================
     SECTION : HERO
     PURPOSE : Display homepage introduction
======================================================= -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center gy-4">

            <!-- ===========================
                 HERO CONTENT
            ============================ -->

            <div class="col-lg-6">

                <h1>

                    WELCOME TO

                    <br>

                    <span>FITLIFE GYM</span>

                </h1>

                <div class="line"></div>

                <p>
                    Your journey to a healthier and stronger lifestyle starts here.
                    Join FitLife Gym and achieve your fitness goals with modern
                    facilities and professional trainers.
                </p>

                <div class="mt-4">

                    <a href="<?= base_url('register'); ?>" class="btn btn-dark btn-lg me-3">
                        Join Now
                    </a>

                    <a href="<?= base_url('login'); ?>" class="btn btn-outline-dark btn-lg">
                        Login
                    </a>

                </div>

            </div>

            <!-- ===========================
                 HERO IMAGE
            ============================ -->

            <div class="col-lg-6 text-center">

                <img src="<?= base_url('assets/images/hero.jpg'); ?>" alt="FitLife Gym" class="img-fluid hero-image">

            </div>

        </div>

    </div>

</section>

<!-- ======================================================
     SECTION : FACILITIES
     PURPOSE : Display gym facilities
======================================================= -->

<section class="facilities">

    <div class="container">

        <p class="section-title">

            WHY CHOOSE US

        </p>

        <h2>

            Our Facilities

        </h2>

        <div class="row g-4">


            <!-- Modern Equipment -->

            <div class="col-lg-4 col-md-6">

                <div class="card facility-card h-100">

                    <img src="<?= base_url('assets/images/equipment.jpg'); ?>" alt="Modern Equipment"
                        class="card-img-top">

                    <div class="card-body">

                        <h4 class="card-title">
                            Modern Equipment
                        </h4>

                        <p class="card-text">
                            High quality equipment designed to support every workout and fitness level.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Expert Trainers -->

            <div class="col-lg-4 col-md-6">

                <div class="card facility-card h-100">

                    <img src="<?= base_url('assets/images/trainer.jpg'); ?>" alt="Expert Trainers" class="card-img-top">

                    <div class="card-body">

                        <h4 class="card-title">
                            Expert Trainers
                        </h4>

                        <p class="card-text">
                            Certified trainers ready to guide and motivate you throughout your fitness journey.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Healthy Community -->

            <div class="col-lg-4 col-md-6">

                <div class="card facility-card h-100">

                    <img src="<?= base_url('assets/images/community.jpg'); ?>" alt="Healthy Community"
                        class="card-img-top">

                    <div class="card-body">

                        <h4 class="card-title">
                            Healthy Community
                        </h4>

                        <p class="card-text">
                            Join a positive and supportive community that inspires healthy living every day.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>