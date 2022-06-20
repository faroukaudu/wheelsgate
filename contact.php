<?php
    include("include/header.php");
?>

    <!-- Header Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Contact us </h2>
                <p class="description light"> Feel free to contact us at anytime, 24/7.
                </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->

            <!-- Breadcrumbs -->

            <div class="container">
                <section class="contact">


                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">Port Harcourt-Nigeria</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p> No 2B Godwin Abbe Street,<br> Elekehia Housing Estate,<br> Port Harcourt, Nigeria.</p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <!-- <p>+234-80687-90161</p> -->
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p> <a href="mailto:info@wheelsgate.com"> info@wheelsgate.com </a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">Lagos-Nigeria</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>No 3 Southernview Estate,

                                        <br> Lekki Lagos State,
                                        <br> Lagos, Nigeria.</p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+234-803733-0097</p>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p> <a href="mailto:info@wheelsgate.com"> info@wheelsgate.com </a> </p>
                                </div>
                            </div>
                        </div>


                        <div class="row contact-centers">
                            <div class="col-md-4">
                                <div class="contact-area-box">
                                    <h4 class="contact-title subtitle">Foreign Office-USA</h4>
                                    <div class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>241 Kastlekove Drive,
                                            <br> Lewis Center, Ohio,
                                            <br>43035, United States.</p>
                                    </div>
                                    <div class="phone" >
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p>+1 (614) 906-8474</p>
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p><a href="mailto:info@wheelsgate.com"> info@wheelsgate.com</a> </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <h2 class="title-2"> Send us a message </h2>
                            <!-- <form id="contact_form" class="form well-form" action="php/contact.php" method="post"> -->
                            <form class="form well-form" action="try-cc.php" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    <!-- <input name="name" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name"> -->
                                    <input name="name" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">

                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <input name="email" placeholder="Email Address" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                                </div>

                                <!-- Phone Number-->
                                <div class="form-group">
                                    <input name="phone" placeholder="Phone Number" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your phone number" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>

                                <!-- Text area -->
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Write the Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                                </div>
                                <!-- Button -->
                                <!-- <button name="btn" type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button> -->
                                <button name="btn-send" type="submit" class="btn btn-block btn-warning" > SEND MESSAGE </button>

                                <!-- <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div> -->


                            </form>
                            <hr>
                            <!-- php error being called here -->
                            <!-- <?php

                            $Msg="";
                            if(isset($_GET['error']))
                            {

                                $Msg = 'please fill in the blanks';
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }


                            ?> -->
                        </div>
                        <!-- 4.892753, 7.018187 -->

                        <div class="col-md-6 contact-map">
                            <h2 class="title-2"> View Map </h2>
                            <ul class="nav nav-pills" id="map-address">
                                <li class="active">
                                <a href="#location1" data-latitude="51.4845012" data-longitude="-0.0941221" data-map-title="United Kingdom" data-map-zoom="16" data-toggle="tab">Port Harcourt-Nigeria.</a>

                                </li>
                                <li>
                                    <a href="#location2" data-latitude="51.4845012" data-longitude="-0.0941221" data-map-title="United Kingdom" data-map-zoom="16" data-toggle="tab">Lagos-Nigeria.</a>
                                </li>
                                <li>
                                <a href="#location3" data-latitude="51.4845012" data-longitude="-0.0941221" data-map-title="United Kingdom" data-map-zoom="16" data-toggle="tab">USA</a>
                                </li>
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5442518265445!2d3.4682507147703534!3d6.4525023953319005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf444d1c0fcdf%3A0x296858d3854bd0f7!2s1%20Olawale%20Cole%20Onitiri%20Ave%2C%20Rd%2C%2042!5e0!3m2!1sen!2sng!4v1586297608708!5m2!1sen!2sng" width="600" height="450"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            </ul>

                            <!-- Google Map will load programatically inside this div.
                                You may change the Default Latitude and Longitude here. For multiple locations, change above.  -->
                                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="location1">
                        <!-- <h2>Edirne</h2> -->

                        <div class="map">
                        <br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.280902583112!2d7.015976514727067!3d4.89256564132639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d231fac129db%3A0xe3c17fdc2324a406!2sIvory%20Heights%20Garden%20Estate!5e0!3m2!1sen!2sng!4v1593474426970!5m2!1sen!2sng" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="location2">
                        <!-- <h2>İstanbul / Ümraniye</h2> -->

                        <div class="map">
                        <br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6238200200005!2d3.5380633147287868!3d6.442326725889072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf6fe184ac515%3A0x4056296338721313!2s3%20Southern%20View%20Estate%2C%20Lekki%20Penninsula%20II%2C%20Lagos!5e0!3m2!1sen!2sng!4v1593463568036!5m2!1sen!2sng" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="location3">
                        <!-- <h2>Buyaka</h2> -->

                        <div class="map">
                        <br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.93955731405!2d-83.01351868475875!3d40.14363008012765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8838f39ed1d19137%3A0xf193b88a1a4305cc!2s241%20Kastlekove%20Dr%2C%20Lewis%20Center%2C%20OH%2043035%2C%20USA!5e0!3m2!1sen!2sng!4v1593464206263!5m2!1sen!2sng" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>


                        </div>
                    </div>

                </section>
            </div>
        </main>
        <!-- Main Content Section -->

        <!-- Footer Section -->
<?php
    include("include/footer.php");
?>
        <!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>
    </div>
    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Jquery Library -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Back to top -->
    <script src="js/back-to-top.js"></script>

    <!-- Form Validation -->
    <script src="js/validate.js"></script>

    <!-- Contact Form JS -->
    <script src="js/contact.js"></script>

    <!-- Subscribe Form JS -->
    <script src="js/subscribe.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

    <!-- Map handler -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Add ?key=GOOGLE_API_KEY_HRE to avoid warnings and future API failiures.
         You may find more information here: https://developers.google.com/maps/documentation/javascript/get-api-key -->

    <!--  Map Functions -->
    <script src="js/maps.js"></script>

</body>

</html>
