<?php
/*
  Template Name: dmsra-course-2
*/
?>

<?php get_header(); ?>



<section class="banner-section" style="background: url(<?php echo DMSRA_THEME_URL . 'assets/public/images/course-page-top-background.jpg'; ?>);padding: 70px 0px;text-align: center;background-attachment: fixed;background-position: center center;background-size: cover;position: relative;z-index: 1;">
    <div class="container">
        <div class="banner-content-wrapper">
            <h1 class="banner-title">Course Details</h1>
            <ul class="banner-item">
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0)">
                        Course Details
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="course-details-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-details-images">
                    <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/teacher-banners/banner-2.jpg';  ?>">
                </div>
                <h3 class="title">
                    Master Digital Marketing & Shopify (Online + Offline Course) 
                </h3>
            </div>
            <div class="col-lg-4">
                <div class="course-details-sidebar-wrapper">
                    <div class="course-price-outer">
                        <span class="price">7,000.00 BDT (Online)</span>
                        <span class="price">10,000.00 BDT (Offline)</span>
                        <span class="price free_english_spoken_class">(Free English spoken class every friday)</span>
                    </div>
                    <ul>
                        <li>
                            <i class="fas fa-user"></i>
                            <strong>Instructor</strong> <span>Abu Sayed Rafi</span>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                             <strong>Duration</strong> <span>4+ Month</span>
                        </li>
                        <li>
                            <i class="fas fa-video"></i>
                             <strong>Lectures</strong> <span>48 + Lectures</span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                             <strong>Language</strong> <span>Bangla</span>
                        </li>
                        <li>
                            <i class="fas fa-certificate"></i>
                            <strong>Certificate</strong> <span>Yes ( 500 BDT )</span>
                        </li>
                    </ul>
                    <a href="#" class="admission-btn-inner">Admission</a>
                    <a href="tel:<?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?>" class="course-details-call-btn-inner">Call Now: <?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?></a>
                </div>
            </div>

            <!-- showing course details  -->
            <?php echo $dmsra_options["dmsra_courses_course_2_description"]; ?>
            <!-- showing course details ends -->

        </div>
    </div>
</section>
    





<?php get_footer(); ?>