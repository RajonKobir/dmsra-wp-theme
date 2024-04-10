<?php
/*
  Template Name: dmsra-course-1
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
                    <img src="<?php echo $dmsra_options["dmsra_courses_course_1_banner"]["url"];  ?>">
                </div>
                <h3 class="title">
                    <?php echo $dmsra_options["dmsra_courses_course_1_title"];  ?> 
                </h3>
            </div>


            <div class="col-lg-4">
                <div class="course-details-sidebar-wrapper">

                    <!-- showing course details  -->
                    <?php echo $dmsra_options["dmsra_courses_course_1_details"]; ?>
                    <!-- showing course details ends -->

                    <a href="<?php echo $dmsra_options["dmsra_courses_course_1_admission_button_link"]; ?>" class="admission-btn-inner"><?php echo $dmsra_options["dmsra_courses_course_1_admission_button_text"]; ?></a>
                    <a href="tel:<?php echo $dmsra_options["dmsra_courses_course_1_admission_phone_number"]; ?>" class="course-details-call-btn-inner">Call Now: <?php echo $dmsra_options["dmsra_courses_course_1_admission_phone_number"]; ?></a>
                </div>
            </div>



            <!-- showing course description  -->
            <?php echo $dmsra_options["dmsra_courses_course_1_description"]; ?>
            <!-- showing course description ends -->




        </div>
    </div>
</section>
    





<?php get_footer(); ?>