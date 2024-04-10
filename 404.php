<?php
/*
* The template for displaying pages
*/ 
?>

<?php get_header(); ?>

<section id="o_wblog_post_main" class="container pt-4 pb-5 ">
      <section class="no_posts_to_show mt-5">
      <div class="container">
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
        </div>
    </section>
</section>


<?php get_footer(); ?>
