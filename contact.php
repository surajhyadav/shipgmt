   <?php include('imports/header.php'); ?>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact Us</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>-</span></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__top-img" style="background: #000;">
                    <img src="assets/images/bbb.jpg" alt="" style="opacity: 0.6">
                </div>
                <div class="contact-page__middle">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__middle-left">
                                <h3 class="contact-page__middle-title">Get in Touch</h3>
                                <p class="contact-page__middle-text">Whether you have a question about our services, need assistance, or just want to connect, our team is ready to answer all your queries. We believe in quick communication and personalized support to ensure your experience with us is smooth and hassle-free.</p>
                                <div class="contact-page__contact-info">
                                    <h3 class="contact-page__contact-info-title">Contact Info</h3>
                                    <ul class="contact-page__contact-list list-unstyled">
                                        <li>
                                            <h4 class="contact-page__contact-list-title">Address</h4>
                                            <p>
                                                W-2117, Akshar Bussiness Park, Janta Market Rd, opposite APMC, Sector 25, Vashi, Navi Mumbai, Maharashtra 400703
                                            </p>
                                        </li>
                                        <li>
                                            <h4 class="contact-page__contact-list-title">Phone</h4>
                                            <p><a href="tel:09354587874">+91 9082208629</a><span></span>
                                           
                                        </li>
                                        <li>
                                            <h4 class="contact-page__contact-list-title">Email</h4>
                                            <p><a href="mailto:info@example.com">info@shipgmt.com</a><span>or</span>
                                            <a href="mailto:info@example.com">hr@shipgmt.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="contact-page__contact-link">www.shipgmt.com</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__middle-right">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120661.02193850632!2d72.93096108030652!3d19.078815395527972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c168b615608d%3A0xc4724ace45d87091!2sJanta%20Market%20Rd%2C%20opposite%20APMC%20Fruits%20and%20Vegetable%20Market%2C%20Sector%2025%2C%20Vashi%2C%20Navi%20Mumbai%2C%20Maharashtra%20400703!3m2!1d19.0788337!2d73.0133628!5e0!3m2!1sen!2sin!4v1750226626456!5m2!1sen!2sin"
                                    class="contact-page__google-map" allowfullscreen></iframe>

                                    <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-page__bottom">
                    <div class="contact-page__form-box">
                        <h3 class="comment-one__title">Let’s Get in Touch</h3>
                        <p class="comment-one__text">
                            Your email address will not be published. Required fields are
                            marked *
                        </p>
                        <form action="http://html.scriptfusions.com/flowtrack/main-html/assets/inc/sendemail.php" method="POST"
                            class="contact-page__form contact-form-validated">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name*" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Your Email*" name="email" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone*" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject*" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea required name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn"
                                            data-loading-text="Please wait...">
                                            Send Meassage
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="result"></div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
         <?php include('imports/footer.php');  ?>
    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="150"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@flowtrack.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->    
    <!-- /.search-popup -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>

    <script src="assets/vendors/jquery/jquery-latest.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.circleType.html"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.lettering.min.html"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
    <script src="assets/vendors/gsap/gsap.js"></script>
    <script src="assets/vendors/gsap/ScrollTrigger.js"></script>
    <script src="assets/vendors/gsap/SplitText.js"></script>
    <script src="assets/vendors/scroll/lenis.min.js"></script>
    <!-- template js -->
    <script src="assets/js/flowtrack.js"></script>
</body>


<!-- Mirrored from html.scriptfusions.com/flowtrack/main-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 06:10:57 GMT -->
</html>