<?php
/*
  Template Name: dmsra-course-1
*/
?>

<?php get_header(); ?>



<section class="banner-section" style="background: url(<?php echo DMSRA_THEME_URL . 'assets/public/images/course-page-top-background.jpg'; ?>);padding: 70px 0px;text-align: center;background-attachment: fixed;background-position: center center;background-size: cover;position: relative;z-index: 1;">
    <div class="container">
        <div class="banner-content-wrapper">
            <h1 class="banner-title"><?php echo single_post_title(); ?></h1>
            <ul class="banner-item">
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0)">
                        <?php echo single_post_title(); ?>
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
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );  ?>">
                </div>
                <h3 class="title">
                    <?php the_title(); ?> 
                    <?php echo get_post_meta( get_the_ID(), 'online_offline_title_extra', true ); ?> 
                </h3>
            </div>


            <div class="col-lg-4">
                <div class="course-details-sidebar-wrapper">

                    <div class="course-price-outer">
                    <?php 
                        $online_current_price = get_post_meta( get_the_ID(), 'online_current_price', true );
                        $offline_current_price = get_post_meta( get_the_ID(), 'offline_current_price', true );
                        if(!empty($online_current_price)){
                            echo '<span class="price">'.$online_current_price.' BDT (Online)</span>';
                        }
                        if(!empty($offline_current_price)){
                            echo '<span class="price">'.$offline_current_price.' BDT (Offline)</span>';
                        }
                    ?>
                        
                        
                    </div>
                    <ul>
                        <li>
                            <i class="fas fa-user"></i>
                            <strong>Instructor</strong> <span><?php echo get_post_meta( get_the_ID(), 'instructor_name', true ); ?></span>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                             <strong>Duration</strong> <span><?php echo get_post_meta( get_the_ID(), 'class_duration', true ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-video"></i>
                             <strong>Lectures</strong> <span><?php echo get_post_meta( get_the_ID(), 'number_of_lectures', true ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                             <strong>Language</strong> <span><?php echo get_post_meta( get_the_ID(), 'course_language', true ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-certificate"></i>
                            <strong>Certificate</strong> <span><?php echo get_post_meta( get_the_ID(), 'certificate_message', true ); ?></span>
                        </li>
                    </ul>

                    <a href="<?php echo get_post_meta( get_the_ID(), 'admission_button_link', true ); ?>" class="admission-btn-inner"><?php echo get_post_meta( get_the_ID(), 'admission_button_text', true ); ?></a>
                    <a href="tel:<?php echo get_post_meta( get_the_ID(), 'contact_number', true ); ?>" class="course-details-call-btn-inner">Call Now: <?php echo get_post_meta( get_the_ID(), 'contact_number', true ); ?></a>
                </div>
            </div>



            <!-- showing course description  -->
            <?php the_content(); ?>
            <!-- showing course description ends -->




        </div>
    </div>
</section>
    





<?php get_footer(); ?>