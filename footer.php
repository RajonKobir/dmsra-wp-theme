<?php
    global $dmsra_options;
?>
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item-wrapper">
                    <a href="<?php echo home_url(); ?>" class="footer-logo">
                        <img src="<?php echo $dmsra_options["dmsra_top_menu_bar_logo"]["url"]; ?>">
                    </a>
                    <p class="footer-address">House No -351, Block-D, Housing Estate, Kushtia, Kushtia-7000, Bangladesh</p>
                    <a href="mailto:<?php echo $dmsra_options["dmsra_header_top_left_company_email"]; ?>" class="footer-email">
                        <i class="fas fa-envelope"></i>
                        <?php echo $dmsra_options["dmsra_header_top_left_company_email"]; ?>
                    </a>
                    <a href="tel:<?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?>" class="footer-phone">
                        <i class="fas fa-phone-alt"></i>
                        <?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?>
                    </a>


                    <ul class="socials-link-list">
                        <li class="socials-link-list-item">
                            <a href="<?php echo $dmsra_options["dmsra_header_top_right_company_facebook_link"]; ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="socials-link-list-item">
                            <a href="<?php echo $dmsra_options["dmsra_header_top_right_company_youtube_link"]; ?>" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item-wrapper">
                    <h4 class="footer-item-title">
                        Category
                    </h4>
                    <ul class="footer-list">
                                                 <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Spoken English
                            </a>
                        </li>
                                                <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Freelancing
                            </a>
                        </li>
                                                <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Digital Marketing
                            </a>
                        </li>
                                                <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Logo Design
                            </a>
                        </li>
                                            </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item-wrapper">
                    <h4 class="footer-item-title">
                        Quick Links
                    </h4>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                FAQ
                            </a>
                        </li>
                        
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Student Admission
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Student Support
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Support Attendance
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Payment &amp; Refund
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Teacher Login
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Become a teacher
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Apply for Student Id
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item-wrapper">
                    <h4 class="footer-item-title">
                        Important Links
                    </h4>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a target="_blank" href="<?php echo home_url('/web-registration-form/'); ?>" target="_blank" class="footer-list-item-link">
                                Web Registration Form
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a target="_blank" href="<?php echo home_url('/digital-marketing-registration-form/'); ?>" class="footer-list-item-link">
                                Digital Marketing Registration Form
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a target="_blank" href="<?php echo home_url('/spoken-english-registration-form/'); ?>" class="footer-list-item-link">
                                Spoken English Registration Form
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Find Certificate
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Apply for Certificate
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-list-item-link">
                                Exam
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a target="_blank" href="<?php echo home_url('/web-admission-form/'); ?>"  class="footer-list-item-link">
                                Web Form
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<span class="scroll-back-top"> <i class="fas fa-arrow-up"></i> </span>
    </div>
</footer>




<section><div class="copywrite text-center"><ul><li><a href="<?php echo home_url('/terms-and-condition/'); ?>" class="">Terms And Condition</a></li> <li><a href="<?php echo home_url('/privacy-policy/'); ?>" class="">Privacy Policy</a></li> <li><a href="#" class="">Refund Policy</a></li> <li><a href="#" class="">Disclaimer</a></li></ul> <p>© 2019 - <?php echo date('Y'); ?> Digital Marketing Solution and Research Agency. All Right Reserved. | Design &amp; Development By :- <a href="/" class="nuxt-link-active">Digital Marketing Solution and Research Agency.</a></p></div></section>


<?php wp_footer(); ?>
</body>
</html>
