<?php
/*
  Template Name: dmsra-home
*/
?>

<?php get_header(); ?>



<div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center py-2 text-white px-1 news" style="background: <?php echo $dmsra_options["dmsra_top_news_bar_left_background_color"]?>; color: <?php echo $dmsra_options["dmsra_top_news_bar_left_text_color"]?>;">
          <span class="d-flex align-items-center"><?php echo $dmsra_options["dmsra_top_news_bar_left_text"]?></span>
        </div>
        <marquee class="news-scroll" scrollmount="50" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" data-bs-original-title="" title="" aria-describedby="tooltip71176" style="background: <?php echo $dmsra_options["dmsra_top_news_bar_right_background_color"]?>; color: <?php echo $dmsra_options["dmsra_top_news_bar_right_text_color"]?>;"> 
        <?php echo $dmsra_options["dmsra_top_news_bar_right_text"]?>
      </marquee>      
    
    </div>
    
    </div>
  </div>


    <section class="home-slider-section"> 
      <div class="slider-items-wrapper owl-carousel owl-loaded owl-drag">   
        <div class="owl-stage-outer">
          <div class="owl-stage">

          <?php 
            // grabbing the slider items
            $dmsra_repeater_array = [];
            $dmsra_repeater_array_1 = $dmsra_options["dmsra_homepage_slider_repeater_1_design_switch"];
            $dmsra_repeater_array_2 = $dmsra_options["dmsra_homepage_slider_repeater_2_design_switch"];

            $unique_key_1 = '';
            $unique_key_2 = '';
            $even_iteration = 0;
            $odd_iteration = 1;
            foreach ($dmsra_repeater_array_1 as $key1 => $value1) {
              foreach ($dmsra_repeater_array_2 as $key2 => $value2) {
                if( $unique_key_1 != $key1 ){
                  $dmsra_repeater_array[$even_iteration] = $value1;
                  $unique_key_1 = $key1;
                  $even_iteration += 2;
                }
                if( $unique_key_2 != $key2){
                  $dmsra_repeater_array[$odd_iteration] = $value2;
                  $unique_key_2 = $key2;
                  $odd_iteration += 2;
                }
              }
            }


            $even_iteration = 0;
            $odd_iteration = 0;
            foreach($dmsra_repeater_array as $dmsra_repeater_array_single_key => $dmsra_repeater_array_single_value){
              if( $dmsra_repeater_array_single_key % 2 == 0 ){
          ?>

          <div class="owl-item" >
            <div class="slider-item"> 
              <section class="slider-top-buttom-padding o_colored_level" style="background-image: none;">
                  <div class="container">
                    <div class="row all-content-posstion-center" data-bs-original-title="" title="" aria-describedby="tooltip333174">
                      <div class="col-lg-6 o_colored_level" style="">
                        <h1 class="slider-main-tittle"><?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_title"][$even_iteration]; ?></h1>
                        <h4 class="slider-main-content"><?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_sub_title"][$even_iteration]; ?></h4>
                        <p class="slide-button-special-style-home-page">
                          <a class="green-button-style-2-osbd responsive-class-slider-botton" href="<?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_button_1_link"][$even_iteration]; ?>"><?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_button_1_text"][$even_iteration]; ?></a>
                          <a class="blue-button-style-osbd" href="<?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_button_2_link"][$even_iteration]; ?>"><?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_button_2_text"][$even_iteration]; ?></a>
                        </p>
                      </div>
                      <div class="col-lg-6">
                        <div class="youtube-video">
                          <iframe width="560" height="315" src="<?php echo $dmsra_options["dmsra_homepage_slider_repeater_1_youtube_link"][$even_iteration]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
          </div>

          <?php

              $even_iteration++;
            }else{
            // end of if

          ?>

          <div class="owl-item" >
          <div class="slider-item"> 
            <img src="<?php echo $dmsra_options["dmsra_homepage_slider_repeater_2_background_image"][$odd_iteration]["url"]; ?>" alt="images not found"> <div class="slider-content-outer"> 
            <div class="container"> 
              <div class="slider-content"> 
                <div class="line"></div> 
                <h2><?php echo $dmsra_options["dmsra_homepage_slider_repeater_2_title"][$odd_iteration]; ?></h2> 
                <h1><span style="color: #FC9D01;"><?php echo $dmsra_options["dmsra_homepage_slider_repeater_2_sub_title"][$odd_iteration]; ?></span></h1> 
                <h4><?php echo $dmsra_options["dmsra_homepage_slider_repeater_2_description"][$odd_iteration]; ?></h4> 
              </div> 
            </div> 
          </div> 
          </div>
          </div>

          <?php
                $odd_iteration++;
              }
              // end of if

            }
            // end of foreach
        
          ?>

        </div>
      </div>
      <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
          <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
        </div>
        <div class="owl-dots disabled"></div>
      </div> 
    </section>




    <section class="counter-section"> <div class="container"> <div class="row"> <div class="col-lg-3 col-md-6 col-sm-12"> <div class="counter-item-wrapper"> <h2 class="counter-number"> <i class="<?php echo $dmsra_options["dmsra_homepage_success_section_box_1_icon"]; ?>"></i> <span class="counter"><?php echo $dmsra_options["dmsra_homepage_success_section_box_1_amount"]; ?></span> <span><?php echo $dmsra_options["dmsra_homepage_success_section_box_1_sign"]; ?></span> </h2> <h3 class="counter-title"><?php echo $dmsra_options["dmsra_homepage_success_section_box_1_text"]; ?></h3> </div> </div> <div class="col-lg-3 col-md-6 col-sm-12"> <div class="counter-item-wrapper"> <h2 class="counter-number"> <i class="<?php echo $dmsra_options["dmsra_homepage_success_section_box_2_icon"]; ?>"></i> <span class="counter"><?php echo $dmsra_options["dmsra_homepage_success_section_box_2_amount"]; ?></span> <span><?php echo $dmsra_options["dmsra_homepage_success_section_box_2_sign"]; ?></span> </h2> <h3 class="counter-title"><?php echo $dmsra_options["dmsra_homepage_success_section_box_2_text"]; ?></h3> </div> </div> <div class="col-lg-3 col-md-6 col-sm-12"> <div class="counter-item-wrapper"> <h2 class="counter-number"> <i class="<?php echo $dmsra_options["dmsra_homepage_success_section_box_3_icon"]; ?>"></i> <span class="counter"><?php echo $dmsra_options["dmsra_homepage_success_section_box_3_amount"]; ?></span> <span><?php echo $dmsra_options["dmsra_homepage_success_section_box_3_sign"]; ?></span> </h2> <h3 class="counter-title"><?php echo $dmsra_options["dmsra_homepage_success_section_box_3_text"]; ?></h3> </div> </div> <div class="col-lg-3 col-md-6 col-sm-12"> <div class="counter-item-wrapper"> <h2 class="counter-number"> <i class="<?php echo $dmsra_options["dmsra_homepage_success_section_box_4_icon"]; ?>"></i> <span class="counter"><?php echo $dmsra_options["dmsra_homepage_success_section_box_4_amount"]; ?></span> <span><?php echo $dmsra_options["dmsra_homepage_success_section_box_4_sign"]; ?></span> </h2> <h3 class="counter-title"><?php echo $dmsra_options["dmsra_homepage_success_section_box_4_text"]; ?></h3> </div> </div> </div> </div> </section>







    <section class="course-section "> 
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
    




    <section class="footer-payment-top-buttom-padding" style="background-image: none;">
        <div class="container">
          <div class="row">
            <h3 class="h3-hero-area-tittle-black-center">যেসব মাধ্যমে পেমেন্ট করতে পারবেন</h3>
            
            <div class="offset-lg-1 col-lg-2 pt24 pb24 o_colored_level">
              <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/bank-logos/bkash-logo-footer.png'; ?>" alt="" class="custom-image-mfs img img-fluid o_we_custom_image" data-original-id="238" data-original-src="/web/image/238-732f1944/bkash-logo-footer.png" data-mimetype="image/png" data-resize-width="250" loading="lazy" style="">
              <h5 class="h5-custom-tittle">বিকাশ পার্সোনাল : 01715-684930</h5>
              <h5 class="h5-custom-tittle">বিকাশ পার্সোনাল : 01615-684930</h5>
            </div>
            <div class="col-lg-2 pt24 pb24 o_colored_level">
              <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/bank-logos/nagad-logo-footer.png'; ?>" alt="" class="custom-image-mfs img img-fluid o_we_custom_image" data-original-id="239" data-original-src="/web/image/239-a409634e/nagad-logo-footer.png" data-mimetype="image/png" data-resize-width="250" loading="lazy" style="">
              <h5 class="h5-custom-tittle">নগদ পার্সোনাল : 01715-684930</h5>
            </div>
            <div class="col-lg-2 pt24 pb24 o_colored_level">
              <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/bank-logos/rocket-logo-footer.png'; ?>" alt="" class="custom-image-mfs img img-fluid o_we_custom_image" data-original-id="240" data-original-src="/web/image/240-63752b78/rocket-logo-footer.png" data-mimetype="image/png" data-resize-width="250" loading="lazy" style="">
              <h5 class="h5-custom-tittle">রকেট পার্সোনাল : 01715-6849307</h5>
            </div>
            <div class="col-lg-2 pt24 pb24 o_colored_level">
              <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/bank-logos/dbbl-logo-footer.png'; ?>" alt="" class="custom-image-mfs img img-fluid o_we_custom_image" data-original-id="241" data-original-src="/web/image/241-9f4a0ffc/dbbl-logo-footer.png" data-mimetype="image/png" data-resize-width="250" loading="lazy" style="">
              <h5 class="h5-custom-tittle">Dutch Bangla Bank</h5>
              <h5 class="h5-custom-tittle">Account Name: Md. Khalid Zobaier</h5>
              <h5 class="h5-custom-tittle">Account No: 168.101.6030</h5>
              <h5 class="h5-custom-tittle">Branch: Kushtia</h5>
            </div>
            <div class="col-lg-2 pt24 pb24 o_colored_level">
              <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/bank-logos/city-bank-logo-footer.png'; ?>" alt="" class="custom-image-mfs img img-fluid o_we_custom_image" data-original-id="241" data-original-src="/web/image/241-9f4a0ffc/dbbl-logo-footer.png" data-mimetype="image/png" data-resize-width="250" loading="lazy" style="">
              <h5 class="h5-custom-tittle">City Bank</h5>
              <h5 class="h5-custom-tittle">Account Name: Md. Khalid Zobaier</h5>
              <h5 class="h5-custom-tittle">Account No: 2302563498001</h5>
              <h5 class="h5-custom-tittle">Branch: Kushtia</h5>
            </div>


          </div>
        </div>
      </section>




      <section><div class="container expertServices pb-5"><div class="expert_section_title"><div><h2>Experts Services To Change Your Business Value</h2></div> <div><p>We are focused on the specific goals of our client with multiple outcomes towards profits and benefits. Our experts are promised to provide all professional support to transform business through developing technology and brand new strategies.</p></div></div> <div class="row"><div class="col-md-3"><article class="special-service-col"><div class="brand-col"><figure class="brand-logo joomla-border"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-1.webp'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-1.webp'; ?>" alt="best solution for digital marketing" class="ls-is-cached lazyloaded"></picture></figure> <h5 class="joomla-hoverbox">Digital Marketing Service</h5></div> <div class="show_hover"><a href="#" class="hover-textbox joomla-hoverbox"><h4>Digital Marketing Service</h4> <p>We go well beyond to convey results. So in the event that you need for achievement on the web, you have gone to the perfect spot. We give the outcomes you have to make your venture triumph. Whether you are searching for a complete advanced promoting effort, or just to help you</p></a></div></article></div><div class="col-md-3"><article class="special-service-col"><div class="brand-col"><figure class="brand-logo responsive-border"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-2.webp'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-2.webp'; ?>" alt="E-Commerce  service solutions" class="ls-is-cached lazyloaded"></picture></figure> <h5 class="responsive-hoverbox">E-Commerce Solutions</h5></div> <div class="show_hover"><a href="#" class="hover-textbox responsive-hoverbox"><h4>E-Commerce Solutions</h4> <p>Responsive theme is a way to deal with web outline went for creating locales to give an ideal review and communication experience simple perusing and route with at least planning resizing, and looking—over an extensive variety of gadgets such</p></a></div></article></div><div class="col-md-3"><article class="special-service-col"><div class="brand-col"><figure class="brand-logo software-border"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-3.webp'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-3.webp'; ?>" alt="Software Development" class="ls-is-cached lazyloaded"></picture></figure> <h5 class="responsive-software">Software Development</h5></div> <div class="show_hover"><a href="#" class="hover-textbox responsive-software"><h4>Software Development</h4> <p>We offer a broad range of software development with experts, which already brought success to many established businesses all around the world. We ensure you, working with us with trust, would be a great investment and experience towards</p></a></div></article></div><div class="col-md-3"><article class="special-service-col"><div class="brand-col"><figure class="brand-logo magento-border"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-4.webp'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/expert-services/expert-service-4.webp'; ?>" alt="mobile apps development" class="ls-is-cached lazyloaded"></picture></figure> <h5 class="magento-hoverbox">Mobile Apps Development</h5></div> <div class="show_hover"><a href="#" class="hover-textbox magento-hoverbox"><h4>Mobile Apps Development</h4> <p>Our specialists are very much furnished with every single virtual device to ensure success in each stride. We create, android, iOS, Cordova, WP, Xamarin applications, portable back-ends, give mix and support  believe connecting</p></a></div></article></div></div></div></section>



  <section><div class="happy_client "><div class="container"><div class="happy_client_title"><div><h2>Our Happy Clients</h2></div></div> <div class="row"><div class="col-md-6"><div class="row text-center"><div class="col-md-12"><div class="local_client_title"><h3>Local Clients</h3></div></div> <div class="gallery_top"><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/1.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/1.jpg'; ?>" alt="Skills and Training Project STEP"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/2.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/2.jpg'; ?>" alt="SME foundation"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/3.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/3.jpg'; ?>" alt="Independent University BD"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/4.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/4.jpg'; ?>" alt="State University of Bangladesh"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/5.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/5.jpg'; ?>" alt="Asian University of Bangladesh"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/6.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/6.jpg'; ?>" alt="IUBAT"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/7.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/7.jpg'; ?>"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/8.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/8.jpg'; ?>" alt="victoria university"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/9.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/9.jpg'; ?>" alt="american alumni association"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/10.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/10.jpg'; ?>" alt="PIE international education"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/11.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/11.jpg'; ?>" alt="graduate resources enhancing"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/12.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/12.jpg'; ?>" alt="international admission service"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/13.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/13.jpg'; ?>" alt="Infinity Mega Mall"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/14.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/14.jpg'; ?>" alt="Rich Man BD"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/15.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/15.jpg'; ?>" alt="Pacific Associates Ltd."></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/16.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/local/16.jpg'; ?>" alt="Royal Malabar Jewellers BD Ltd"></picture></div></div></div></div> <div class="col-md-6">
    
    
    <div class="row text-center"><div class="col-md-12"><div class="local_client_title"><h3>International Clients</h3></div></div> <div class="gallery_top"><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/1.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/1.jpg'; ?>" alt="International Trade Centre"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/2.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/2.jpg'; ?>" alt="Ausgreen International Pty Ltd"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/3.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/3.jpg'; ?>" alt="Parallels International GmbH"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/4.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/4.jpg'; ?>" alt="Cyberworks Robotics Inc."></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/5.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/5.jpg'; ?>" alt="Zaytuna Restaurant"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/6.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/6.jpg'; ?>" alt="SG Education UK"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/7.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/7.jpg'; ?>" alt="Artificial Grass Liquidators"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/8.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/8.jpg'; ?>" alt="Science of Alpha LLC"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/9.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/9.jpg'; ?>" alt="Memo Australia"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/10.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/10.jpg'; ?>" alt="Green Park Solar"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/11.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/11.jpg'; ?>" alt="Byteshake Ltd"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/12.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/12.jpg'; ?>" alt="Perceptive IT"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/13.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/13.jpg'; ?>" alt="WEB CPE Inc"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/14.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/14.jpg'; ?>" alt="Active Care Education"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/15.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/15.jpg'; ?>" alt="Handyman Super Services"></picture></div><div class="gallery"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/16.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/happy-clients/international/16.jpg'; ?>" alt="Real Hand Spa &amp; Moroccan"></picture></div></div></div></div></div></div></div></section>



    <section><div class="advertising_partner"><div class="container"><div class="advertising_partner_title"><div><h3>Our Advertising Partner</h3></div></div> <div class="row"><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/1.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/1.jpg'; ?>" alt="Google Ads Account "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/2.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/2.jpg'; ?>" alt="meta business partner"></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/3.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/3.jpg'; ?>" alt="Bing Ads Manager "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/4.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/4.jpg'; ?>" alt="Amazon Ads "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/5.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/5.jpg'; ?>" alt="YouTube Advertising "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/6.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/6.jpg'; ?>" alt="Pinterest Ads "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/7.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/7.jpg'; ?>" alt="Titktok Ads "></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/8.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/8.jpg'; ?>" alt="LinkedIn Ads"></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/9.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/9.jpg'; ?>" alt="Twitter Ads"></picture></div></div><div class="col-md-3 memorable_journey_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/10.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/advertising-partner/10.jpg'; ?>" alt="google double Click"></picture></div></div></div></div></div></section>




    <section><div class="business_partner"><div class="container"><div class="business_partner_title"><div><h3>Our Business Partner</h3></div></div> <div class="row"><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/1.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/1.jpg'; ?>" alt="partnership with Google"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/2.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/2.jpg'; ?>" alt="partnership with meta"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/3.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/3.jpg'; ?>" alt="partnership with Microsoft"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/4.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/4.jpg'; ?>" alt="partnership with Amazon"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/5.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/5.jpg'; ?>" alt="partnership with GoDaddy"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/6.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/6.jpg'; ?>" alt="partnership with Shopify"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/7.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/7.jpg'; ?>" alt="partnership with Asana"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/8.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/8.jpg'; ?>" alt="partnership with Salesforce"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/9.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/9.jpg'; ?>" alt="partnership with A2-Hosting"></picture></div></div><div class="col-md-3 business_partner_div"><div class="advertising_partner_div"><picture><source type="image/webp" srcset="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/10.jpg'; ?>"> <img src="<?php echo DMSRA_THEME_URL . 'assets/public/images/business-partner/10.jpg'; ?>" alt="partnership with WP"></picture></div></div></div></div></div></section>



<?php get_footer(); ?>