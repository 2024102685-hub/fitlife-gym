<?php

$data = [
    'active' => 'trainer',
    'css'    => 'trainer.css'
];

echo view('layouts/header', $data);
echo view('layouts/navbar', $data);

?>

<section class="trainer-section">

    <div class="container">

        <div class="text-center">

            <h1>

                OUR TRAINERS

            </h1>

            <p>

                Meet Our Certified Fitness Professionals

            </p>

        </div>

        

            

            <div class="row g-4 mt-4">

                <!-- =========================
                            Trainer 1
                ========================== -->

                <div class="col-lg-3 col-md-6">

                    <div class="trainer-card">

                        <img src="<?= base_url('assets/images/trainers/alex.jpg'); ?>" class="trainer-image" alt="Alex Johnson">

                        <div class="trainer-content">

                            <h3>

                                Alex Johnson

                            </h3>

                            <h5>

                                Strength Coach

                            </h5>

                            <p>

                                8 Years Experience

                            </p>

                            <p>

                                Specializes in strength training,
                                bodybuilding and muscle building.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- =========================
                            Trainer 2
                ========================== -->

                <div class="col-lg-3 col-md-6">

                    <div class="trainer-card">

                        <img src="<?= base_url('assets/images/trainers/sarah.jpg'); ?>" class="trainer-image"alt="Sarah Lim">

                        <div class="trainer-content">

                            <h3>

                                Sarah Lim

                            </h3>

                            <h5>

                                Yoga Instructor

                            </h5>

                            <p>

                                6 Years Experience

                            </p>

                            <p>

                                Professional yoga instructor
                                focusing on flexibility and wellness.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- =========================
                            Trainer 3
                ========================== -->

                <div class="col-lg-3 col-md-6">

                    <div class="trainer-card">

                        <img src="<?= base_url('assets/images/trainers/daniel.jpg'); ?>" class="trainer-image"alt="Daniel Tan">

                        <div class="trainer-content">

                            <h3>

                                Daniel Tan

                            </h3>

                            <h5>

                                Cardio Trainer

                            </h5>

                            <p>

                                7 Years Experience

                            </p>

                            <p>

                                Expert in cardio training,
                                HIIT workouts and weight loss.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- =========================
                        Trainer 4
                ========================== -->

                <div class="col-lg-3 col-md-6">

                    <div class="trainer-card">

                        <img src="<?= base_url('assets/images/trainers/aliya.jpg'); ?>" class="trainer-image"alt="Aliya Natasha">

                        <div class="trainer-content">

                            <h3>

                                Liya Tasha

                            </h3>

                            <h5>

                                Personal Trainer

                            </h5>

                            <p>

                                5 Years Experience

                            </p>

                            <p>

                                Passionate about functional training,
                                healthy lifestyle and nutrition.

                            </p>

                        </div>

                    </div>

                </div>

            

        </div>

    </div>

</section>

<?= $this->include('layouts/footer'); ?>