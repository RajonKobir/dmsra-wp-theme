<?php
/*
  Template Name: dmsra-courses
*/
?>

<?php get_header(); ?>


<?php

// $args = array(
//   // 'post_title' => 'Course 2',
//   'post_type'      => 'courses',
//   'post_status'    => array( 'any', 'trash' ),
//   'posts_per_page' => -1,
// );

// // $query = get_posts($args);

// $query = new WP_Query( $args ); 
// $posts = $query->get_posts();


// var_dump($posts);



// $courses_info_directory = __DIR__ . '../inc/custom_post_types/courses/course-infos/';
// $course_files = scandir( $courses_info_directory );

// $path_to_file = DMSRA_THEME_PATH . '/inc/custom_post_types/courses/course-infos/';

// $old = getcwd(); 

// // Change the current directory
// chdir($path_to_file);

// $new = getcwd(); 

// $course_files = scandir( $new );

// var_dump($course_files);




?>


<section class="banner-section" style="background: url(<?php echo $dmsra_options["dmsra_blog_page_breadcrumb_background_image"]["url"]; ?>);padding: 70px 0px;text-align: center;background-attachment: fixed;background-position: center center;background-size: cover;position: relative;z-index: 1;">
    <div class="container">
        <div class="banner-content-wrapper">
            <h1 class="banner-title">All Courses</h1>
            <ul class="banner-item">
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0)">
                        All Courses
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="course-section mt-5"> 
      <div class="container-fluid"> 
        <div class="section-heading-outer"> 
          <h2 class="heading"> Our <span class="separate-color">Courses</span> </h2> 
        </div> 
        <div class="row"> 
  

        <?php

$courses_args = array(
  'post_type'      => 'courses',
  'post_status'    => array( 'publish' ),
  'posts_per_page' => -1,
  'orderby'        => 'date',
  'order'          => 'ASC',
);

$courses_query = get_posts($courses_args);
// var_dump($courses_query);

foreach($courses_query as $single_course_key => $single_course_value){
?>

<div class="col-lg-4 col-md-6 course-item-wrapper-position"> 
  <div class="course-item-wrapper"> 
    <div class="courses-item-image"> 
      <a href="<?php echo $single_course_value->guid;  ?>">
      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($single_course_value->ID) );  ?>" height="303" width="500" alt="Courses">
    </a> 
  </div> 
  <div class="courses-item-content"> 
    <h4 class="title"> <?php echo $single_course_value->post_title;  ?> </h4> 
  <div class="course-price"> 
    <span class="course-free-name">Online Course Fee </span> <span>  <del> <?php echo get_post_meta( $single_course_value->ID, 'online_previous_price', true ); ?> </del> &nbsp;<?php echo get_post_meta( $single_course_value->ID, 'online_current_price', true ); ?> BDT </span>
    </div> 
    <div class="course-price"> 
    <span class="course-free-name">Offline Course Fee </span> <span>  <del> <?php echo get_post_meta( $single_course_value->ID, 'offline_previous_price', true ); ?> </del> &nbsp;<?php echo get_post_meta( $single_course_value->ID, 'offline_current_price', true ); ?> BDT </span> 
</div> 
</div> <a href="<?php echo $single_course_value->guid;  ?>" class="course-item-details-link"> View details </a> </div> </div> 


<?php
}
// end of foreach 


?>
        
        </div>
        </div> </section>
    





<?php get_footer(); ?>