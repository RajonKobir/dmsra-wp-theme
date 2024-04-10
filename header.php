<?php
    global $dmsra_options;
    if( isset($dmsra_options["dmsra_blog_posts_per_page"]) ){
        $posts_per_page = $dmsra_options["dmsra_blog_posts_per_page"];
        if(intval($posts_per_page) > 0){
            if( get_option('posts_per_page') != intval($posts_per_page) ){
                update_option('posts_per_page', $posts_per_page);
            }
        }
    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php bloginfo('name'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

        <header class="header" id="site-header" data-anchor="true" data-name="Header" >

            <div class="oe_structure oe_structure_solo" id="oe_structure_header_contact_1">
                <section class="s_text_block o_colored_level pb10 pt10 top-header-osbd" data-snippet="s_text_block" data-name="Text" data-bs-original-title="" title="" aria-describedby="tooltip140467" style="background-color: <?php echo $dmsra_options["dmsra_header_top_background_color"]; ?>; background-image: none; padding: 5px;">
                    <div class="container" style="">
                        <div class="row align-items-center" style="height: 40px;" data-bs-original-title="" title="" aria-describedby="tooltip293111">
                            <div class="col-lg-8 o_colored_level" data-bs-original-title="" title="" aria-describedby="tooltip148787" style="">

                        <span class="me-3" data-bs-original-title="" title="" aria-describedby="tooltip953657" style="">
                        
                        <a href="https://wa.me/<?php echo $dmsra_options["dmsra_header_top_left_company_whatsapp"]; ?>" data-bs-original-title="" title="" target="_blank" style="" aria-describedby="popover138630">
                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122"></small>
                        <font class=" text-o-color-4" data-bs-original-title="" title="" aria-describedby="tooltip464039" style="background-color: rgba(255, 255, 255, 0);">
                            <i class="<?php echo $dmsra_options["dmsra_header_top_left_company_whatsapp_icon"]; ?>" data-bs-original-title="" title="" aria-describedby="tooltip459877" style="color: <?php echo $dmsra_options["dmsra_header_top_left_company_whatsapp_icon_color"]; ?>;font-size: <?php echo $dmsra_options["dmsra_header_top_left_company_WhatsApp_icon_font_size"]; ?>;"></i>
                        </font>
                        <font class=" text-white" data-bs-original-title="" title="" aria-describedby="tooltip464039" style="background-color: rgba(255, 255, 255, 0);">
                            <span style="font-size: 14px;" data-bs-original-title="" title="" aria-describedby="tooltip227167"><?php echo $dmsra_options["dmsra_header_top_left_company_whatsapp"]; ?></span>
                        </font>
                        <span style="font-size: 14px;">
                        </span>
                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122"></small>
                        </a>

                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122">
                        <span style="background-color: rgb(5, 18, 65);">
                            <font data-bs-original-title="" title="" aria-describedby="tooltip653440" style="background-color: rgba(255, 255, 255, 0);">&ZeroWidthSpace;</font>
                        </span>
                        </small>

                        <i style="color: <?php echo $dmsra_options["dmsra_header_top_left_company_phone_icon_color"]; ?>; font-size: <?php echo $dmsra_options["dmsra_header_top_left_company_phone_icon_font_size"]; ?>;" aria-describedby="tooltip459877" title="" data-bs-original-title="" class="<?php echo $dmsra_options["dmsra_header_top_left_company_phone_icon"]; ?>"></i>

                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122">
                        <a href="tel:<?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?>" target="_blank" style="background-color: rgb(5, 18, 65);" data-bs-original-title="" title="">
                            <font class=" text-o-color-4" data-bs-original-title="" title="" aria-describedby="tooltip972906" style="background-color: rgba(255, 255, 255, 0);"><?php echo $dmsra_options["dmsra_header_top_left_company_phone"]; ?></font>
                        </a>
                        </small>

                    </span>

                    <a href="mailto:<?php echo $dmsra_options["dmsra_header_top_left_company_email"]; ?>" data-bs-original-title="" title="" style="">
                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122">
                        <font class=" text-o-color-4" data-bs-original-title="" title="" aria-describedby="tooltip836324" style="background-color: rgba(5, 18, 65, 0);">&ZeroWidthSpace;<span class="<?php echo $dmsra_options["dmsra_header_top_left_company_email_icon"]; ?>" style="color: <?php echo $dmsra_options["dmsra_header_top_left_company_email_icon_color"]; ?>;font-size: <?php echo $dmsra_options["dmsra_header_top_left_company_email_icon_font_size"]; ?>; data-bs-original-title="" title="" aria-describedby="tooltip366487"></span></font>
                        </small>
                        <font data-bs-original-title="" title="" aria-describedby="tooltip390060" class=" text-o-color-4" style="background-color: rgba(5, 18, 65, 0);"><?php echo $dmsra_options["dmsra_header_top_left_company_email"]; ?></font>
                        <font data-bs-original-title="" title="" aria-describedby="tooltip390060" class="text-o-color-4 " style="background-color: rgba(5, 18, 65, 0);">&ZeroWidthSpace;</font>
                        <small data-bs-original-title="" title="" aria-describedby="tooltip937122"></small>
                    </a>

                    <small data-bs-original-title="" title="" aria-describedby="tooltip937122">
                        </small>

                    </div>


                    <div class="col-lg-4 text-lg-end o_colored_level" style="">
                    <div class="s_social_media o_not_editable text-end no_icon_color" data-snippet="s_social_media" data-name="Social Media">

                        <a href="<?php echo $dmsra_options["dmsra_header_top_right_company_facebook_link"]; ?>" class="s_social_media_facebook" target="_blank">
                        <i class="<?php echo $dmsra_options["dmsra_header_top_right_company_facebook_icon"]; ?>" style="background-color: <?php echo $dmsra_options["dmsra_header_top_right_company_facebook_icon_background_color"]; ?>; font-size: <?php echo $dmsra_options["dmsra_header_top_right_company_facebook_icon_font_size"]; ?>;"></i>
                        </a>

                        <a href="<?php echo $dmsra_options["dmsra_header_top_right_company_youtube_link"]; ?>" class="s_social_media_youtube" target="_blank">
                        <i class="<?php echo $dmsra_options["dmsra_header_top_right_company_youtube_icon"]; ?>" style="background-color: <?php echo $dmsra_options["dmsra_header_top_right_company_youtube_icon_background_color"]; ?>; font-size: <?php echo $dmsra_options["dmsra_header_top_right_company_youtube_icon_font_size"]; ?>;"></i>
                        </a>

                        <a href="<?php echo $dmsra_options["dmsra_header_top_right_company_linkedin_link"]; ?>" class="s_social_media_linkedin" target="_blank">
                        <i class="<?php echo $dmsra_options["dmsra_header_top_right_company_linkedin_icon"]; ?>" style="background-color: <?php echo $dmsra_options["dmsra_header_top_right_company_linkedin_icon_background_color"]; ?>; font-size: <?php echo $dmsra_options["dmsra_header_top_right_company_linkedin_icon_font_size"]; ?>;"></i>
                        </a>

                        <a href="https://wa.me/<?php echo $dmsra_options["dmsra_header_top_right_company_whatsapp"]; ?>" class="s_social_media_whatsapp" target="_blank">
                        <i class="<?php echo $dmsra_options["dmsra_header_top_right_company_whatsapp_icon"]; ?>" style="background-color: <?php echo $dmsra_options["dmsra_header_top_right_company_whatsapp_icon_background_color"]; ?>; font-size: <?php echo $dmsra_options["dmsra_header_top_right_company_whatsapp_icon_font_size"]; ?>;"></i>
                        </a>
                    
                    </div>
                    </div>
                </div>
                </div>
            </section>
            </div>



    <div class="main-navbar" style="background-color: <?php echo $dmsra_options["dmsra_top_menu_bar_background_color"]; ?> !important; height: <?php echo $dmsra_options["dmsra_top_menu_bar_height"]; ?> !important;"> 
        <div class="container"> 
            <nav class="nav-items-wrapper" style="height: <?php echo $dmsra_options["dmsra_top_menu_bar_height"]; ?> !important;"> 
                <!-- Website Logo --> 
                <div class="header-brand-logo-outer"> 
                    <a href="<?php echo home_url(); ?>" class="header-brand-logo"> 
                        <img src="<?php echo $dmsra_options["dmsra_top_menu_bar_logo"]["url"]; ?>" width="<?php echo $dmsra_options["dmsra_top_menu_bar_logo_width"]; ?>" height="<?php echo $dmsra_options["dmsra_top_menu_bar_logo_height"]; ?>" alt="logo" style="margin-top: <?php echo $dmsra_options["dmsra_top_menu_bar_logo_margin_top"]; ?> !important;"> 
                    </a> 
                </div>

                <div class="nav-toggle-btn"> <div class="btn-inner"></div> </div>

                <!-- Main Nav --> 
                <?php
                if ( has_nav_menu( 'main_menu' ) ){
                    if(wp_get_nav_menu_items(get_nav_menu_locations()['main_menu'])){
                        wp_nav_menu( array(
                            'menu_class'		=> "nav-item-list", 
                            'container'			=> "", 
                            'walker'			=> class_exists( 'DMSRA_Walker_Nav_Menu' ) ? new DMSRA_Walker_Nav_Menu() : '', 
                            'theme_location'	=> "main_menu",
                        ) );
                    }
                }else{
                    echo '<p class="text-center">No Menu Location exists called (main_menu)</p>';
                }

                ?>   
                <!-- Main Nav ends here--> 

            </nav> 
        </div>
    </div>

</header>