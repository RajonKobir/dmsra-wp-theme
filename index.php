<?php
/*
* The template for displaying pages
*/ 
?>

<?php get_header(); ?>

<?php

// checking if blog page
if ( !is_front_page() && is_home() ) {
    include( 'page-templates/dmsra-blog.php' );
}else{

?>

<!-- container starts here  -->
<div class="container">

<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="blog_area">
            <div class="post_details">
              <p class="single_page_post_content">
                <?php the_content(); ?>
              </p>
            </div>
        </div>
      <?php endwhile; ?>

<?php  else : ?>

  <section class="no_posts_to_show mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="no_posts">
                  <h6 class="text-center">
                    No Content To Show!
                  </h6>
                  <br>
                  <a href="<?php echo home_url(); ?>">
                      <h5 class="text-center">
                        <i class="fas fa-arrow-left-long"></i> Go Back To Home
                      </h5>
                  </a>
              </div>
          </div>
      </div>
  </section>

<?php  endif; ?>

</div>
<!-- container ends here  -->

<?php
  }
  // checking if blog page ends here
?>


<?php get_footer(); ?>
