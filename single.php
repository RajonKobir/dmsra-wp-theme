<?php
/*
* The template for displaying pages
*/ 
?>

<?php get_header(); ?>


<section class="banner-section" style="background: url(<?php echo $dmsra_options["dmsra_blog_page_breadcrumb_background_image"]["url"]; ?>);padding: 70px 0px;text-align: center;background-attachment: fixed;background-position: center center;background-size: cover;position: relative;z-index: 1;">
    <div class="container">
        <div class="banner-content-wrapper">
            <h1 class="banner-title"><?php echo single_post_title(); ?></h1>
            <ul class="banner-item">
              <li>
                  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                    <i class="fas fa-blog"></i>
                    <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
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


<main class="main">
    <div class="page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="single-page pt-50 pr-30">
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                    <?php 
                        // custom post count
                        dmsraCustomSetPostViews(get_the_ID());
                    ?>
                    <?php
                        $categoty_name = '';
                        $categoty_url = '';
                        $author_url = '#';
                        $categories = get_the_category();

                        if ( ! empty( $categories ) ) {
                            $categoty_name =  esc_html( $categories[0]->name );	
                            $categoty_url =  esc_url( get_category_link( $categories[0]->term_id ) );	
                        }
                        if ( ! empty( get_author_posts_url(get_the_author_meta('ID')) ) ) {
                          $author_url = get_author_posts_url(get_the_author_meta('ID'));
                        }
                    ?>

                    <div class="single-header style-2">
                      <div class="row">
                          <div class="col-xl-10 col-lg-12 m-auto">
                              <h6 class="mb-10"><a href="<?php echo $categoty_url; ?>"><?php echo $categoty_name; ?></a></h6>
                              <h2 class="mb-10"><?php the_title(); ?></h2>
                              <div class="single-header-meta">
                                  <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                      <a class="author-avatar" href="#">
                                      </a>
                                      <span class="post-by">By <a href="<?php echo $author_url; ?>"><?php the_author(); ?></a></span>
                                      <span class="post-on has-dot"><?php echo get_the_time('d M, Y h:i:sa'); ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>

                    <?php
                      $featured_image_url = '';
                      if( ! empty( get_the_post_thumbnail_url(get_the_ID(), 'full' ) ) ){
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full' );
                    ?>

                    <figure class="single-thumbnail">
                        <img style="display: block;margin: auto;" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                    </figure>

                    <?php
                      }
                    ?>

                    <div class="single-content">
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 m-auto">
                                  <?php the_content(); ?>
                                    <!--Entry bottom-->
                                    <div class="entry-bottom mt-50 mb-30">
                                    </div>
                                    <!--Comment Area-->
                                    <div id="comments_area" <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                                      <?php comments_template(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php //echo next_posts_link(); ?>
                    <?php //previous_posts_link(); ?>
                    <?php endwhile; ?>

                    <!-- <nav class="pagination">
            <button class="btn-whole"><?php //echo get_previous_posts_link('Previous'); ?></button>
            <button class="btn-whole"><?php //echo get_next_posts_link('Next'); ?></button>
        </nav> -->

              <?php
                                    // the_posts_pagination(array(
                                    //     'prev_text' => '<i class="fas fa-arrow-left-long"></i> Prev',
                                    //     'next_text' => 'Next <i class="fas fa-arrow-right-long"></i>',
                                    //     'screen_reader_text' => ' ',
                                    //     'show_all' => 'false',
                                    // ));
                                ?>

      <?php  else : ?>
              <section class="no_posts_to_show mt-5">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="no_posts">
                              <h6 class="text-center">
                                  No Post To Show!
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


          <?php  endif; ?>



          </div>
            </div>
        </div>
    </div>
    </div>
</main>

  <?php get_footer(); ?>
