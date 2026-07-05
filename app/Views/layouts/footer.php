<!-- ==========================================================
     FOOTER
     Purpose:
     Display website footer information.
========================================================== -->

<footer class="footer">

    <div class="container">

        <div class="footer-bottom">

            <!-- Copyright -->
            <div class="footer-left">

                © 2026 FitLife Gym. All Rights Reserved.

            </div>

            <!-- Footer Navigation -->
            <div class="footer-right">

                <a href="<?= base_url('policy'); ?>">Website Policy</a>

                <span>|</span>

                <a href="<?= base_url('contact'); ?>">Contact Us</a>

                <span>|</span>

                <span>Follow Us</span>

                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                <a href="#"><i class="fa-brands fa-instagram"></i></a>

                <a href="#"><i class="fa-brands fa-youtube"></i></a>

            </div>

            <script>
                document.querySelectorAll(".toggle-password").forEach(function (button) {

                    button.addEventListener("click", function () {

                        const input = document.getElementById(this.dataset.target);
                        const icon = this.querySelector("i");

                        if (input.type === "password") {

                            input.type = "text";
                            icon.classList.replace("bi-eye", "bi-eye-slash");

                        } else {

                            input.type = "password";
                            icon.classList.replace("bi-eye-slash", "bi-eye");

                        }

                    });

                });
                
            </script>

            </body>

            </html>

        </div>

    </div>

</footer>