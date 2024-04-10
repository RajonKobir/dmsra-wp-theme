

  <?php get_header(); ?>


  <section class="banner-section" style="background: url(<?php echo $dmsra_options["dmsra_blog_page_breadcrumb_background_image"]["url"]; ?>);padding: 70px 0px;text-align: center;background-attachment: fixed;background-position: center center;background-size: cover;position: relative;z-index: 1;">
    <div class="container">
        <div class="banner-content-wrapper">
            <h1 class="banner-title"><?php echo dmsra_page_title(); ?></h1>
            <ul class="banner-item">
              <li>
                  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                    <i class="fas fa-blog"></i>
                    <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
                  </a>
              </li>
                <li class="active">
                    <a href="javascript:void(0)">
                      <?php echo the_archive_title(); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


<div id="wrap" class="js_blog website_blog">
    <!-- if have posts  -->
    <?php if (have_posts()) : ?>
        <section id="o_wblog_index_content">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div id="o_wblog_posts_loop_container" class="col ">
                    
                        <div id="o_wblog_posts_loop" class="loop-grid">
                            <div class="row ">

                                <!-- loop through posts  -->
                                <?php while (have_posts()) : the_post(); ?>

                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated" style="border: 1px solid #dfdede30;border-radius: 8px;">
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="border-radius-15" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full' ); ?>" alt="" style="object-fit: cover;max-height: 177px;">
                                    </a>
                                </div>
                                <div class="entry-content-2">
                                    <?php
                                        $categoty_name = '';
                                        $categoty_url = '';
                                        $categories = get_the_category();

                                        if ( ! empty( $categories ) ) {
                                            $categoty_name =  esc_html( $categories[0]->name );	
                                            $categoty_url =  esc_url( get_category_link( $categories[0]->term_id ) );	
                                        }
                                    ?>
                                    <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="<?php echo $categoty_url; ?>"><?php echo $categoty_name; ?></a></h6>

                                    <h4 class="post-title mb-15">
                                        <a href="<?php the_permalink(); ?>" style="font-size: 19px;"><?php the_title(); ?></a>
                                    </h4>
                                    <?php
                                          $dmsra_post_views_count = get_post_meta( get_the_ID(), 'dmsra_post_views_count', true );
                                          // Check if the custom field has a value.
                                          if ( empty( $dmsra_post_views_count ) ) {
                                              $dmsra_post_views_count = 0;
                                          }
                                      ?>
                                    <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on mr-10"><?php echo get_the_time('d M, Y'); ?></span>
                                            <span class="hit-count has-dot mr-10"><?php echo $dmsra_post_views_count; ?> Views</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <?php endwhile; ?>
                            <!-- loop through posts ends here  -->
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php
                                    the_posts_pagination(array(
                                        'prev_text' => '<i class="fas fa-arrow-left-long"></i> Prev',
                                        'next_text' => 'Next <i class="fas fa-arrow-right-long"></i>',
                                        'screen_reader_text' => ' ',
                                        'show_all' => 'false',
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>
    

                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="no_posts_to_show mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="no_posts">
                            <h6 class="text-center">
                                No Posts To Show!
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
    <?php endif; ?>
    <!-- if have posts ends here  -->
</div>

  <?php get_footer(); ?>